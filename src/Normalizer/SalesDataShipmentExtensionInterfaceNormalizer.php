<?php

namespace Kiboko\Magento\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\Runtime\Normalizer\CheckArray;
use Kiboko\Magento\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SalesDataShipmentExtensionInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\SalesDataShipmentExtensionInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\SalesDataShipmentExtensionInterface';
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
        $object = new \Kiboko\Magento\Model\SalesDataShipmentExtensionInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ext_shipment_id', $data) && $data['ext_shipment_id'] !== null) {
            $object->setExtShipmentId($data['ext_shipment_id']);
        }
        elseif (\array_key_exists('ext_shipment_id', $data) && $data['ext_shipment_id'] === null) {
            $object->setExtShipmentId(null);
        }
        if (\array_key_exists('ext_return_shipment_id', $data) && $data['ext_return_shipment_id'] !== null) {
            $object->setExtReturnShipmentId($data['ext_return_shipment_id']);
        }
        elseif (\array_key_exists('ext_return_shipment_id', $data) && $data['ext_return_shipment_id'] === null) {
            $object->setExtReturnShipmentId(null);
        }
        if (\array_key_exists('ext_location_id', $data) && $data['ext_location_id'] !== null) {
            $object->setExtLocationId($data['ext_location_id']);
        }
        elseif (\array_key_exists('ext_location_id', $data) && $data['ext_location_id'] === null) {
            $object->setExtLocationId(null);
        }
        if (\array_key_exists('ext_tracking_url', $data) && $data['ext_tracking_url'] !== null) {
            $object->setExtTrackingUrl($data['ext_tracking_url']);
        }
        elseif (\array_key_exists('ext_tracking_url', $data) && $data['ext_tracking_url'] === null) {
            $object->setExtTrackingUrl(null);
        }
        if (\array_key_exists('ext_tracking_reference', $data) && $data['ext_tracking_reference'] !== null) {
            $object->setExtTrackingReference($data['ext_tracking_reference']);
        }
        elseif (\array_key_exists('ext_tracking_reference', $data) && $data['ext_tracking_reference'] === null) {
            $object->setExtTrackingReference(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('extShipmentId') && null !== $object->getExtShipmentId()) {
            $data['ext_shipment_id'] = $object->getExtShipmentId();
        }
        if ($object->isInitialized('extReturnShipmentId') && null !== $object->getExtReturnShipmentId()) {
            $data['ext_return_shipment_id'] = $object->getExtReturnShipmentId();
        }
        if ($object->isInitialized('extLocationId') && null !== $object->getExtLocationId()) {
            $data['ext_location_id'] = $object->getExtLocationId();
        }
        if ($object->isInitialized('extTrackingUrl') && null !== $object->getExtTrackingUrl()) {
            $data['ext_tracking_url'] = $object->getExtTrackingUrl();
        }
        if ($object->isInitialized('extTrackingReference') && null !== $object->getExtTrackingReference()) {
            $data['ext_tracking_reference'] = $object->getExtTrackingReference();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\SalesDataShipmentExtensionInterface' => false);
    }
}