<?php

namespace Kiboko\Magento\V2_1\Endpoint;

class PutV1CartsByCartIdCouponByCouponCode extends \Kiboko\Magento\V2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_1\Runtime\Client\EndpointTrait;
    protected $cartId;
    protected $couponCode;
    /**
     * Adds a coupon by code to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     */
    public function __construct(int $cartId, string $couponCode)
    {
        $this->cartId = $cartId;
        $this->couponCode = $couponCode;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}', '{couponCode}'), array($this->cartId, $this->couponCode), '/V1/carts/{cartId}/coupons/{couponCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2_1\Exception\PutV1CartsByCartIdCouponByCouponCodeBadRequestException
     * @throws \Kiboko\Magento\V2_1\Exception\PutV1CartsByCartIdCouponByCouponCodeUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_1\Exception\PutV1CartsByCartIdCouponByCouponCodeBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_1\Exception\PutV1CartsByCartIdCouponByCouponCodeUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_1\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
