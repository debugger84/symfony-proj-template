<?php


namespace ApiBundle\Normalizer;

use AppBundle\Entity\City;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CityNormalizer  implements NormalizerInterface, NormalizerAwareInterface
{
    use NormalizerAwareTrait;

    /**
     * {@inheritdoc}
     * @param City $object
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $country = $this->normalizer->normalize($object->getRegion()->getCountry(), $format, $context);
        $region = $this->normalizer->normalize($object->getRegion(), $format, $context);

        return [
            'id'     => $object->getId(),
            'name'   => $object->getName(),
            'country' => $country,
            'state/region' => $region,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof City;
    }
}