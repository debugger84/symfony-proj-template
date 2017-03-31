<?php

namespace ApiBundle\Controller\V1;

use AppBundle\Command\City\AddCityCommand;
use AppBundle\Command\City\ChangeCityCommand;
use AppBundle\Command\City\DeleteCityCommand;
use AppBundle\Command\Exception\CommandException;
use AppBundle\Entity\City;
use AppBundle\Entity\Region;
use AppBundle\Query\AddressInAreaQuery;
use AppBundle\Query\CityQuery;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Validator\ConstraintViolation;


class AddressesController extends BaseController
{
    /**
     * @ApiDoc(
     *
     *  description="Checks if address is in area",
     *  parameters={
     *    {"name" = "address", "dataType" = "string", "required"=true},
     *    {"name" = "lat", "dataType" = "double", "required"=true, "description" = "Latitude of the center of searchable area"},
     *    {"name" = "lng", "dataType" = "double", "required"=true, "description" = "Longitude of the center of searchable area"},
     *    {"name" = "radius", "dataType" = "integer", "required"=true, "description" = "Radius of the searchable area in meters"}
     *  }
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Get("/cities/{id}/addresses/{address}/in-area")
     */
    public function getInAreaAction(Request $request, $id, $address)
    {
        $serializer = $this->getSerializer();
        $parameters = $request->query->all();
        /** @var AddressInAreaQuery $query */
        $query = $serializer->denormalize($parameters, AddressInAreaQuery::class);

        $city = $this->getCity($id);
        $query->setCity($city);
        $query->setAddress($address);

        $errorsView = $this->validate($query);
        if ($errorsView) {
            return $errorsView;
        }

        $service = $this->getAddressService();
        $result = $service->checkIfAddressInArea($query);

        $data = [
            'check-result' => $result
        ];

        $view = $this->view($data, 200);
        return $this->handleView($view);
    }

    private function getCity($id, $errorIfNotFound = true)
    {
        $cityRepository = $this->getCityRepository();
        $city = $cityRepository->find($id);

        if (!$city && $errorIfNotFound) {
            throw new NotFoundHttpException(sprintf('The city with id \'%s\' was not found.', $id));
        }

        return $city;
    }

    /**
     * @return \AppBundle\Repository\CityRepository
     */
    private function getCityRepository()
    {
        return $this->get('app.repository.city_repository');
    }

    /**
     * @return \AppBundle\Service\AddressService
     */
    private function getAddressService()
    {
        return $this->get('app.service.address_service');
    }
}
