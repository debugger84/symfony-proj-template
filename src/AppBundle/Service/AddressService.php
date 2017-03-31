<?php


namespace AppBundle\Service;


use AppBundle\Query\AddressInAreaQuery;
use Ivory\GoogleMap\Service\Geocoder\GeocoderService;
use Ivory\GoogleMap\Service\Geocoder\Request\GeocoderAddressRequest;
use Ivory\GoogleMap\Service\Geocoder\Response\GeocoderResult;

class AddressService
{
    /** @var  GeocoderService */
    private $geocoderService;

    /**
     * AddressService constructor.
     * @param GeocoderService $geocoderService
     */
    public function __construct(GeocoderService $geocoderService)
    {
        $this->geocoderService = $geocoderService;
    }


    /**
     * @param AddressInAreaQuery $query
     * @return bool
     */
    public function checkIfAddressInArea(AddressInAreaQuery $query)
    {
        $address = $query->getAddress() . ', ' . $query->getCity()->getName();

        $request = new GeocoderAddressRequest($address);

        $response = $this->geocoderService->geocode($request);

        /** @var GeocoderResult[] $results */
        $results = $response->getResults();
        if (!isset($results[0])) {
            return false;
        }

        $result = $results[0];
        $lat = $result->getGeometry()->getLocation()->getLatitude();
        $lng = $result->getGeometry()->getLocation()->getLongitude();

        $distance = $this->calcDistance($lat, $lng, $query->getLat(), $query->getLng());

        return $distance < $query->getRadius();
    }

    private function calcDistance($lat1, $lng1, $lat2, $lng2)
    {
        $R = 6378137; // Earth’s mean radius in meter
        $dLat = deg2rad($lat2 - $lat1);
        $dLong = deg2rad($lng2 - $lng1);
        $a = sin($dLat / 2) * sin($dLat / 2) +
            cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
            sin($dLong / 2) * sin($dLong / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $d = $R *$c;

        return $d; // returns the distance in meter
    }

}