<?php

namespace AppBundle\Command\City;

use AppBundle\Command\City\Exception\CityNotDefinedException;


class ChangeCityHandler extends CityHandlerAbstract
{
    /**
     * @param ChangeCityCommand $command
     * @return \AppBundle\Entity\City
     */
    public function handle(ChangeCityCommand $command)
    {
        $city = $command->getCity();
        if (!$city->getId()) {
            throw new CityNotDefinedException('City id is required.');
        }
        $oldCity = $this->cityRepository->find($city->getId());

        if (!$oldCity) {
            throw new CityNotDefinedException('City id is wrong.');
        }

        $this->checkCityName($city);

        $this->cityRepository->saveAndRefresh($city);

        return $city;
    }
}