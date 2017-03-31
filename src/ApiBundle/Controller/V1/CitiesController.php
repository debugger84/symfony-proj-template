<?php

namespace ApiBundle\Controller\V1;

use AppBundle\Command\City\AddCityCommand;
use AppBundle\Command\City\ChangeCityCommand;
use AppBundle\Command\City\DeleteCityCommand;
use AppBundle\Command\Exception\CommandException;
use AppBundle\Entity\City;
use AppBundle\Query\CityQuery;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class CitiesController extends BaseController
{
    /**
     * @ApiDoc(
     *
     *  description="List of cities",
     *  filters={
     *    {"name"="name", "dataType"="string", "description"="A part of city name"}
     *  },
     *  parameters={
     *    {"name" = "limit", "dataType" = "integer", "required"=false},
     *    {"name" = "offset", "dataType" = "integer", "required"=false}
     *  }
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getCitiesAction(Request $request)
    {
        $serializer = $this->getSerializer();
        $parameters = $request->query->all();
        /** @var CityQuery $query */
        $query = $serializer->denormalize($parameters, CityQuery::class);
        if (!$query->getLimit()) {
            $query->setLimit(15);
        }
        $cityRepository = $this->getCityRepository();
        $cities = $cityRepository->findAllCitiesWithCountryAndRegion($query);

        $items = $serializer->normalize($cities, null, ['groups' => ['main']]);
        $data = [
            'items' => $items,
            'wholeCount' => $cityRepository->findCount($query),
            'limit' => $query->getLimit(),
            'offset' => $query->getOffset(),
        ];

        $view = $this->view($data, 200);
        return $this->handleView($view);
    }

    /**
     * @ApiDoc()
     * @param int $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getCityAction($id)
    {
        $city = $this->getCity($id);

        $serializer = $this->getSerializer();
        $data = $serializer->normalize($city, null, ['groups' => ['main']]);

        $view = $this->view($data, 200);
        return $this->handleView($view);
    }

    /**
     * @ApiDoc(
     *   description="Creates new city",
     *   resource = true,
     *   input = "AppBundle\Entity\City",
     *   statusCodes = {
     *     201 = "Returned when successful",
     *     400 = "Returned when the data has errors",
     *     401 = "Returned when not authenticated",
     *     403 = "Returned when not having permissions"
     *   }
     * )
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function postCityAction(Request $request)
    {
        $serializer = $this->getSerializer();
        $parameters = $request->request->all();
        /** @var City $city */
        $city = $serializer->denormalize($parameters, City::class, null, ['groups' => ['main']]);

        $errorsView = $this->validate($city, ['Adding']);
        if ($errorsView) {
            return $errorsView;
        }

        $handler = $this->getAddCityHandler();
        try {
            $city = $handler->handle(new AddCityCommand($city));
            $data = $serializer->normalize($city, null, ['groups' => ['main']]);
            $view = $this->view($data, 201);
            $url = $this->generateUrl('api_cities_get_city', ['id' => $city->getId()], UrlGeneratorInterface::ABSOLUTE_URL);
            $view->setHeader('Location', $url);
        } catch (CommandException $e) {
            $view = $this->view(['common' => $e->getMessage()], 400);
        }

        return $this->handleView($view);
    }

    /**
     * @ApiDoc(
     *   description="Changes city data",
     *   resource = true,
     *
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     400 = "Returned when the data has errors",
     *     401 = "Returned when not authenticated",
     *     403 = "Returned when not having permissions"
     *   },
     *   parameters={
     *     {"name" = "name", "dataType" = "string", "required"=false, "description"="Name of a city"},
     *     {"name" = "region", "dataType" = "integer", "required"=false, "description"="ID of a region"}
     *   }
     * )
     *
     * @param Request $request
     * @param int $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function putCityAction(Request $request, $id)
    {
        $city = $this->getCity($id);

        $serializer = $this->getSerializer();
        $parameters = json_decode($request->getContent(), true);

        /** @var City $city */
        $city = $serializer->denormalize(
            $parameters,
            City::class,
            null,
            [
                'groups' => ['main'],
                'object_to_populate' => $city
            ]
        );

        $errorsView = $this->validate($city, ['Adding']);
        if ($errorsView) {
            return $errorsView;
        }

        $handler = $this->getChangeCityHandler();
        try {
            $city = $handler->handle(new ChangeCityCommand($city));
            $data = $serializer->normalize($city, null, ['groups' => ['main']]);
            $view = $this->view($data, 200);
        } catch (CommandException $e) {
            $view = $this->view(['common' => $e->getMessage()], 400);
        }

        return $this->handleView($view);
    }

    /**
     * @ApiDoc(
     *   description="Delete a city",
     *   resource = true,
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     400 = "Returned when the data has errors",
     *     401 = "Returned when not authenticated",
     *     403 = "Returned when not having permissions"
     *   }
     * )
     *
     * @param int $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteCityAction($id)
    {
        $city = $this->getCity($id, false);

        if (!$city) {
            $view = $this->view([], 204);
            return $this->handleView($view);
        }

        $handler = $this->getDeleteCityHandler();
        try {
            $success = $handler->handle(new DeleteCityCommand($city));
            if ($success) {
                $view = $this->view([], 204);
            } else {
                $view = $this->view(['common' => 'Cannot delete the city'], 400);
            }
        } catch (CommandException $e) {
            $view = $this->view(['common' => $e->getMessage()], 400);
        }

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
     * @return \AppBundle\Command\City\AddCityHandler
     */
    private function getAddCityHandler()
    {
        return $this->get('app.command.handler.add_city_handler');
    }

    /**
     * @return \AppBundle\Command\City\ChangeCityHandler
     */
    private function getChangeCityHandler()
    {
        return $this->get('app.command.handler.change_city_handler');
    }

    /**
     * @return \AppBundle\Command\City\DeleteCityHandler
     */
    private function getDeleteCityHandler()
    {
        return $this->get('app.command.handler.delete_city_handler');
    }
}
