<?php

namespace Kiboko\Magento\Endpoint;

class CatalogCostStorageV1UpdatePost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Add or update product cost. Input item should correspond to \Magento\Catalog\Api\Data\CostInterface. If any items will have invalid cost, store id or sku, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.
     *
     * @param \Kiboko\Magento\Model\V1ProductsCostPostBody $catalogCostStorageV1UpdatePostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1ProductsCostPostBody $catalogCostStorageV1UpdatePostBody)
    {
        $this->body = $catalogCostStorageV1UpdatePostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/products/cost';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\CatalogCostStorageV1UpdatePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return \Kiboko\Magento\Model\CatalogDataPriceUpdateResultInterface[]|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\CatalogDataPriceUpdateResultInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\CatalogCostStorageV1UpdatePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}