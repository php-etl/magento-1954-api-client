<?php

namespace Kiboko\Magento\V2_2\Endpoint;

class PostV1CartsByCartIdEstimateShippingMethodsByAddressId extends \Kiboko\Magento\V2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_2\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Estimate shipping
     *
     * @param int $cartId The shopping cart ID.
     * @param null|\Kiboko\Magento\V2_2\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody $requestBody
     */
    public function __construct(int $cartId, ?\Kiboko\Magento\V2_2\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody $requestBody = null)
    {
        $this->cartId = $cartId;
        $this->body = $requestBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/{cartId}/estimate-shipping-methods-by-address-id');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Kiboko\Magento\V2_2\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\V2_2\Model\V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody) {
            return array(array('Content-Type' => array('application/xml')), $this->body);
        }
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2_2\Exception\PostV1CartsByCartIdEstimateShippingMethodsByAddressIdUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2_2\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\V2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_2\\Model\\QuoteDataShippingMethodInterface[]', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_2\Exception\PostV1CartsByCartIdEstimateShippingMethodsByAddressIdUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_2\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_2\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
