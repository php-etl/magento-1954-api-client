<?php

namespace Kiboko\Magento\V2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2_2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class V1ProductsSkuDownloadableLinksPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_2\\Model\\V1ProductsSkuDownloadableLinksPostBody';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_2\\Model\\V1ProductsSkuDownloadableLinksPostBody';
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
        $object = new \Kiboko\Magento\V2_2\Model\V1ProductsSkuDownloadableLinksPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('isGlobalScopeContent', $data) && $data['isGlobalScopeContent'] !== null) {
            $object->setIsGlobalScopeContent($data['isGlobalScopeContent']);
        } elseif (\array_key_exists('isGlobalScopeContent', $data) && $data['isGlobalScopeContent'] === null) {
            $object->setIsGlobalScopeContent(null);
        }
        if (\array_key_exists('link', $data) && $data['link'] !== null) {
            $object->setLink($this->denormalizer->denormalize($data['link'], 'Kiboko\\Magento\\V2_2\\Model\\DownloadableDataLinkInterface', 'json', $context));
        } elseif (\array_key_exists('link', $data) && $data['link'] === null) {
            $object->setLink(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getIsGlobalScopeContent()) {
            $data['isGlobalScopeContent'] = $object->getIsGlobalScopeContent();
        }
        $data['link'] = $this->normalizer->normalize($object->getLink(), 'json', $context);
        return $data;
    }
}
