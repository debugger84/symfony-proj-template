<?php

namespace AppBundle\Command\City;

use AppBundle\Command\City\Exception\CityNotDefinedException;


class DeleteCityHandler extends CityHandlerAbstract
{
    /**
     * @param DeleteCityCommand $command
     * @return bool
     */
    public function handle(DeleteCityCommand $command)
    {
        $city = $command->getCity();
        if (!$city->getId()) {
            throw new CityNotDefinedException('City id is required.');
        }

        $this->cityRepository->delete($city);

        return true;
    }
}