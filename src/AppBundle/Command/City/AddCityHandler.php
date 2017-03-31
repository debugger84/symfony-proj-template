<?php

namespace AppBundle\Command\City;

use AppBundle\Command\City\Exception\RegionIsRequiredException;


class AddCityHandler extends CityHandlerAbstract
{
    /**
     * @param AddCityCommand $command
     * @return \AppBundle\Entity\City
     */
    public function handle(AddCityCommand $command)
    {
        $city = $command->getCity();
        $region = $city->getRegion();
        if (!$region) {
            throw new RegionIsRequiredException('Region is required');
        }

        $this->checkCityName($city);

        $this->cityRepository->saveAndRefresh($city);

        return $city;
    }
}