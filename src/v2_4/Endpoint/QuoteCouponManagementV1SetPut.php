<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class QuoteCouponManagementV1SetPut extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return '/V1/carts/mine/coupons/{couponCode}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_4\Exception\QuoteCouponManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\QuoteCouponManagementV1SetPutUnauthorizedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\QuoteCouponManagementV1SetPutBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\QuoteCouponManagementV1SetPutUnauthorizedException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
