<?php

namespace AppBundle\Validator;

use AppBundle\Entity\City;
use AppBundle\Query\CityQuery;
use AppBundle\Repository\CityRepository;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class UniqueCityOfRegionValidator extends ConstraintValidator
{
    /**
     * @var CityRepository
     */
    protected $cityRepository;

    /**
     * @param City $city
     * @param Constraint $constraint
     */
    public function validate($city, Constraint $constraint)
    {
        if (!$this->checkCityName($city)) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }

    protected function checkCityName(City $city)
    {
        $cityQuery = new CityQuery();
        $cityQuery->setName($city->getName());
        $cityQuery->setRegion($city->getRegion());

        /** @var City $existsCity */
        $existsCity = $this->cityRepository->findOneByQuery($cityQuery);

        if ($existsCity) {
            if (!$city->getId() || $existsCity->getId() != $city->getId()) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param CityRepository $cityRepository
     * @return $this
     */
    public function setCityRepository(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
        return $this;
    }


}