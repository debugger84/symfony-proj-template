<?php

namespace AppBundle\Query;


use AppBundle\Entity\City;
use Symfony\Component\Validator\Constraints as Assert;

class AddressInAreaQuery
{
    /**
     * @var string
     * @Assert\NotBlank(message="Address is required.")
     */
    private $address;

    /**
     * @var float
     * @Assert\NotBlank(message="Latitude is required.")
     * @Assert\Type(type="float", message="Latitude should be float number.")
     */
    private $lat;

    /**
     * @var float
     * @Assert\NotBlank(message="Longitude is required.")
     * @Assert\Type(type="float", message="Longitude should be float number.")
     */
    private $lng;

    /**
     * @var City
     * @Assert\NotBlank(message="City is required.")
     */
    private $city;

    /**
     * @var int
     * @Assert\NotBlank(message="Radius is required.")
     * @Assert\Type(type="integer", message="Radius must be an integer value of meters.")
     */
    private $radius;

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return $this
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     * @return $this
     */
    public function setLat(float $lat)
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * @return float
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * @param float $lng
     * @return $this
     */
    public function setLng(float $lng)
    {
        $this->lng = $lng;
        return $this;
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
    public function setCity(City $city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     * @return $this
     */
    public function setRadius(int $radius)
    {
        $this->radius = $radius;
        return $this;
    }

}