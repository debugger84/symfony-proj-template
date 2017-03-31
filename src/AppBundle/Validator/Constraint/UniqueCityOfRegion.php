<?php

namespace AppBundle\Validator\Constraint;

use AppBundle\Validator\UniqueCityOfRegionValidator;
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class UniqueCityOfRegion extends Constraint
{
    public $message = 'A city with such name is exists in this region.';

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }

    public function validatedBy()
    {
        return UniqueCityOfRegionValidator::class;
    }
}