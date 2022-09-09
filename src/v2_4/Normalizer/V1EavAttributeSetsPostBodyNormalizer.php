<?php

namespace Kiboko\Magento\V2_4\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_4\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class V1EavAttributeSetsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_4\\Model\\V1EavAttributeSetsPostBody';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_4\\Model\\V1EavAttributeSetsPostBody';
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
        $object = new \Kiboko\Magento\V2_4\Model\V1EavAttributeSetsPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attributeSet', $data) && $data['attributeSet'] !== null) {
            $object->setAttributeSet($this->denormalizer->denormalize($data['attributeSet'], 'Kiboko\\Magento\\V2_4\\Model\\EavDataAttributeSetInterface', 'json', $context));
        } elseif (\array_key_exists('attributeSet', $data) && $data['attributeSet'] === null) {
            $object->setAttributeSet(null);
        }
        if (\array_key_exists('entityTypeCode', $data) && $data['entityTypeCode'] !== null) {
            $object->setEntityTypeCode($data['entityTypeCode']);
        } elseif (\array_key_exists('entityTypeCode', $data) && $data['entityTypeCode'] === null) {
            $object->setEntityTypeCode(null);
        }
        if (\array_key_exists('skeletonId', $data) && $data['skeletonId'] !== null) {
            $object->setSkeletonId($data['skeletonId']);
        } elseif (\array_key_exists('skeletonId', $data) && $data['skeletonId'] === null) {
            $object->setSkeletonId(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['attributeSet'] = $this->normalizer->normalize($object->getAttributeSet(), 'json', $context);
        $data['entityTypeCode'] = $object->getEntityTypeCode();
        $data['skeletonId'] = $object->getSkeletonId();
        return $data;
    }
}
