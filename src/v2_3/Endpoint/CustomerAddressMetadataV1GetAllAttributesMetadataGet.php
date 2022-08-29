<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CustomerAddressMetadataV1GetAllAttributesMetadataGet extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/V1/attributeMetadata/customerAddress';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CustomerAddressMetadataV1GetAllAttributesMetadataGetInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}