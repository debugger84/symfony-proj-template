<?php

namespace AppBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="region")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RegionRepository")
 */
class Region
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups({"main"})
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     *
     * @Assert\NotBlank(message="Please enter a city name.")
     * @Assert\Length(
     *     min=2,
     *     max=120,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     * )
     * @Groups({"main"})
     */
    protected $name;

    /**
     * @var Country
     * @ORM\JoinColumn(name="country_id")
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country", inversedBy="regions")
     * @Groups({"withCountry"})
     * @Assert\NotBlank(message="Please enter a city name.")
     */
    protected $country;

    /**
     * @var City[]|Collection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\City", mappedBy="region")
     * @Groups({"withCities"})
     */
    protected $cities;

    /**
     * Region constructor.
     */
    public function __construct()
    {
        $this->cities = new ArrayCollection();
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country $country
     * @return $this
     */
    public function setCountry(Country $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return City[]|Collection
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * @param City[]|Collection $cities
     * @return $this
     */
    public function setCities($cities)
    {
        $this->cities = $cities;
        return $this;
    }
}