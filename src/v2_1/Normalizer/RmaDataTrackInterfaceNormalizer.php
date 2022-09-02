<?php

namespace Kiboko\Magento\V2_1\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_1\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RmaDataTrackInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\RmaDataTrackInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\RmaDataTrackInterface';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Kiboko\Magento\V2_1\Model\RmaDataTrackInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('carrier_code', $data)) {
            $object->setCarrierCode($data['carrier_code']);
        }
        if (\array_key_exists('carrier_title', $data)) {
            $object->setCarrierTitle($data['carrier_title']);
        }
        if (\array_key_exists('entity_id', $data)) {
            $object->setEntityId($data['entity_id']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        if (\array_key_exists('rma_entity_id', $data)) {
            $object->setRmaEntityId($data['rma_entity_id']);
        }
        if (\array_key_exists('track_number', $data)) {
            $object->setTrackNumber($data['track_number']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['carrier_code'] = $object->getCarrierCode();
        $data['carrier_title'] = $object->getCarrierTitle();
        $data['entity_id'] = $object->getEntityId();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['rma_entity_id'] = $object->getRmaEntityId();
        $data['track_number'] = $object->getTrackNumber();
        return $data;
    }
}
