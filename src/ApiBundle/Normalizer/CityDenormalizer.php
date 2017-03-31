<?php


namespace ApiBundle\Normalizer;

use AppBundle\Entity\City;
use AppBundle\Entity\Region;
use AppBundle\Repository\RegionRepository;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CityDenormalizer  implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @var RegionRepository
     */
    private $regionRepository;

    /**
     * @var bool
     */
    private $startToDenormalize = false;

    /**
     * CityDenormalizer constructor.
     * @param RegionRepository $regionRepository
     */
    public function __construct(RegionRepository $regionRepository)
    {
        $this->regionRepository = $regionRepository;
    }


    /**
     * Denormalizes data back into an object of the given class.
     *
     * @param mixed $data data to restore
     * @param string $class the expected class to instantiate
     * @param string $format format the given data was extracted from
     * @param array $context options available to the denormalizer
     *
     * @return object
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $this->startToDenormalize = true;
        /** @var City $object */
        $object = $this->denormalizer->denormalize($data, $class, $format, $context);
        if (isset($data['region']) && !empty($data['region'])) {
            /** @var Region $region */
            $region = $this->regionRepository->find((int) $data['region']);
            if ($region) {
                $object->setRegion($region);
            }
        }
        $this->startToDenormalize = false;

        return $object;
    }

    /**
     * Checks whether the given class is supported for denormalization by this normalizer.
     *
     * @param mixed $data Data to denormalize from
     * @param string $type The class to which the data should be denormalized
     * @param string $format The format being deserialized from
     *
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return ($type == City::class && !$this->startToDenormalize);
    }
}