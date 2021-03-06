<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\MaxDepth;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Validator\Constraint as AppAssert;

/**
 * @AppAssert\UniqueCityOfRegion(groups={"Adding"}, payload="name")
 * @ORM\Entity
 * @ORM\Table(name="city", uniqueConstraints={@ORM\UniqueConstraint(name="city_name_in_region", columns={"name", "region_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CityRepository")
 */
class City
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups({"main"})
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @Assert\NotBlank(message="City name is required.", groups={"Adding"})
     * @Assert\Length(
     *     min=2,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Adding"}
     * )
     *  @Groups({"main"})
     */
    protected $name;

    /**
     * @var Region
     * @ORM\JoinColumn(name="region_id")
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Region", inversedBy="cities")
     * @MaxDepth(1)
     * @Groups({"withRegion"})
     *
     * @Assert\NotBlank(message="Please enter a region id.", groups={"Adding"})
     */
    protected $region;

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
        //Manual setting of id is blocked
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
     * @return Region|null
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param Region $region
     * @return $this
     */
    public function setRegion(Region $region)
    {
        $this->region = $region;
        return $this;
    }
}