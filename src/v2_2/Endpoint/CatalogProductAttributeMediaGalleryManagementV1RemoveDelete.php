<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CatalogProductAttributeMediaGalleryManagementV1RemoveDelete extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return '/V1/products/{sku}/media/{entryId}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteUnauthorizedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1RemoveDeleteUnauthorizedException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}