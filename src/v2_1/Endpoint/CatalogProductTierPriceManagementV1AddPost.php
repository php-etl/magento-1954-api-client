<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class CatalogProductTierPriceManagementV1AddPost extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/products/{sku}/group-prices/{customerGroupId}/tiers/{qty}/price/{price}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductTierPriceManagementV1AddPostBadRequestException
     * @throws \Kiboko\Magento\v2_1\Exception\CatalogProductTierPriceManagementV1AddPostUnauthorizedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CatalogProductTierPriceManagementV1AddPostBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CatalogProductTierPriceManagementV1AddPostUnauthorizedException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}