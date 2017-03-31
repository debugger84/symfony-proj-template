<?php


namespace AppBundle\Command\City;


use AppBundle\Command\City\Exception\CityNameIsExistsException;
use AppBundle\Command\City\Exception\RegionIsRequiredException;
use AppBundle\Entity\City;
use AppBundle\Query\CityQuery;
use AppBundle\Repository\CityRepository;

abstract class CityHandlerAbstract
{
    /**
     * @var CityRepository
     */
    protected $cityRepository;

    /**
     * AddCityHandler constructor.
     * @param CityRepository $cityRepository
     */
    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    protected function checkCityName(City $city)
    {
        $cityQuery = new CityQuery();
        $cityQuery->setName($city->getName());
        $cityQuery->setRegion($city->getRegion());

        /** @var City $existsCity */
        $existsCity = $this->cityRepository->findOneByQuery($cityQuery);

        if ($existsCity) {
            if (!$city->getId() || $existsCity->getId() != $city->getId()) {
                throw new CityNameIsExistsException('City with such name is exists in this region.');
            }
        }
    }
}