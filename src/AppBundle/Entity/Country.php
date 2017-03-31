<?php

namespace AppBundle\Entity;


use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CountryRepository")
 */
class Country
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
     * @var Region[]|Collection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Region", mappedBy="country")
     * @Groups({"withRegions"})
     */
    protected $regions;

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
     * @return Region[]|Collection
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * @param Region[]|Collection $regions
     * @return $this
     */
    public function setRegions($regions)
    {
        $this->regions = $regions;
        return $this;
    }
}