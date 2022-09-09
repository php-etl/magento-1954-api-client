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

class AsynchronousOperationsDataDetailedOperationStatusInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\AsynchronousOperationsDataDetailedOperationStatusInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\AsynchronousOperationsDataDetailedOperationStatusInterface';
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
        $object = new \Kiboko\Magento\V2_1\Model\AsynchronousOperationsDataDetailedOperationStatusInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bulk_uuid', $data) && $data['bulk_uuid'] !== null) {
            $object->setBulkUuid($data['bulk_uuid']);
        } elseif (\array_key_exists('bulk_uuid', $data) && $data['bulk_uuid'] === null) {
            $object->setBulkUuid(null);
        }
        if (\array_key_exists('error_code', $data) && $data['error_code'] !== null) {
            $object->setErrorCode($data['error_code']);
        } elseif (\array_key_exists('error_code', $data) && $data['error_code'] === null) {
            $object->setErrorCode(null);
        }
        if (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] !== null) {
            $object->setExtensionAttributes($data['extension_attributes']);
        } elseif (\array_key_exists('extension_attributes', $data) && $data['extension_attributes'] === null) {
            $object->setExtensionAttributes(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('result_message', $data) && $data['result_message'] !== null) {
            $object->setResultMessage($data['result_message']);
        } elseif (\array_key_exists('result_message', $data) && $data['result_message'] === null) {
            $object->setResultMessage(null);
        }
        if (\array_key_exists('result_serialized_data', $data) && $data['result_serialized_data'] !== null) {
            $object->setResultSerializedData($data['result_serialized_data']);
        } elseif (\array_key_exists('result_serialized_data', $data) && $data['result_serialized_data'] === null) {
            $object->setResultSerializedData(null);
        }
        if (\array_key_exists('serialized_data', $data) && $data['serialized_data'] !== null) {
            $object->setSerializedData($data['serialized_data']);
        } elseif (\array_key_exists('serialized_data', $data) && $data['serialized_data'] === null) {
            $object->setSerializedData(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('topic_name', $data) && $data['topic_name'] !== null) {
            $object->setTopicName($data['topic_name']);
        } elseif (\array_key_exists('topic_name', $data) && $data['topic_name'] === null) {
            $object->setTopicName(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['bulk_uuid'] = $object->getBulkUuid();
        $data['error_code'] = $object->getErrorCode();
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        $data['id'] = $object->getId();
        $data['result_message'] = $object->getResultMessage();
        $data['result_serialized_data'] = $object->getResultSerializedData();
        $data['serialized_data'] = $object->getSerializedData();
        $data['status'] = $object->getStatus();
        $data['topic_name'] = $object->getTopicName();
        return $data;
    }
}
