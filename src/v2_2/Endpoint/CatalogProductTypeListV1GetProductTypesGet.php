<?php

namespace Kiboko\Magento\V2_2\Endpoint;

class CatalogProductTypeListV1GetProductTypesGet extends \Kiboko\Magento\V2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_2\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/V1/products/types';
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
     * @throws \Kiboko\Magento\V2_2\Exception\CatalogProductTypeListV1GetProductTypesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2_2\Model\CatalogDataProductTypeInterface[]|\Kiboko\Magento\V2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_2\\Model\\CatalogDataProductTypeInterface[]', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_2\Exception\CatalogProductTypeListV1GetProductTypesGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_2\\Model\\ErrorResponse', 'json'));
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
