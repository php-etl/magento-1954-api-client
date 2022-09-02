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

class V1NegotiableCartsCartIdSetPaymentInformationPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2_1\\Model\\V1NegotiableCartsCartIdSetPaymentInformationPostBody';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2_1\\Model\\V1NegotiableCartsCartIdSetPaymentInformationPostBody';
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
        $object = new \Kiboko\Magento\V2_1\Model\V1NegotiableCartsCartIdSetPaymentInformationPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('billingAddress', $data)) {
            $object->setBillingAddress($this->denormalizer->denormalize($data['billingAddress'], 'Kiboko\\Magento\\V2_1\\Model\\QuoteDataAddressInterface', 'json', $context));
        }
        if (\array_key_exists('paymentMethod', $data)) {
            $object->setPaymentMethod($this->denormalizer->denormalize($data['paymentMethod'], 'Kiboko\\Magento\\V2_1\\Model\\QuoteDataPaymentInterface', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBillingAddress()) {
            $data['billingAddress'] = $this->normalizer->normalize($object->getBillingAddress(), 'json', $context);
        }
        $data['paymentMethod'] = $this->normalizer->normalize($object->getPaymentMethod(), 'json', $context);
        return $data;
    }
}
