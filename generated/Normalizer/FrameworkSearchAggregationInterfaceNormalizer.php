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
class FrameworkSearchAggregationInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Kiboko\\Magento\\Model\\FrameworkSearchAggregationInterface';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\Model\\FrameworkSearchAggregationInterface';
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
        $object = new \Kiboko\Magento\Model\FrameworkSearchAggregationInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('buckets', $data) && $data['buckets'] !== null) {
            $values = array();
            foreach ($data['buckets'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Kiboko\\Magento\\Model\\FrameworkSearchBucketInterface', 'json', $context);
            }
            $object->setBuckets($values);
        }
        elseif (\array_key_exists('buckets', $data) && $data['buckets'] === null) {
            $object->setBuckets(null);
        }
        if (\array_key_exists('bucket_names', $data) && $data['bucket_names'] !== null) {
            $values_1 = array();
            foreach ($data['bucket_names'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setBucketNames($values_1);
        }
        elseif (\array_key_exists('bucket_names', $data) && $data['bucket_names'] === null) {
            $object->setBucketNames(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getBuckets() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['buckets'] = $values;
        $values_1 = array();
        foreach ($object->getBucketNames() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['bucket_names'] = $values_1;
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Kiboko\\Magento\\Model\\FrameworkSearchAggregationInterface' => false);
    }
}