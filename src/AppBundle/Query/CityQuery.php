<?php


namespace AppBundle\Query;


use AppBundle\Entity\Region;

class CityQuery
{
    use SequenceTrait;

    /**
     * @var string
     */
    protected $partOfName = '';

    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var Region|null
     */
    protected $region;

    /**
     * @return string
     */
    public function getPartOfName(): string
    {
        return $this->partOfName;
    }

    /**
     * @param string $partOfName
     * @return $this
     */
    public function setPartOfName(string $partOfName)
    {
        $this->partOfName = strip_tags($partOfName);
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Region
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