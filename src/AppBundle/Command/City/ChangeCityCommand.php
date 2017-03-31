<?php
namespace AppBundle\Command\City;

use AppBundle\Entity\City;

class ChangeCityCommand
{
    /**
     * @var City
     */
    private $city;

    /**
     * AddCityCommand constructor.
     * @param City $city
     */
    public function __construct(City $city)
    {
        $this->city = $city;
    }

    /**
     * @return City
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param City $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
}