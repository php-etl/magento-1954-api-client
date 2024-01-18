<?php

namespace Kiboko\Magento\Endpoint;

class InventoryCatalogApiBulkSourceUnassignV1ExecutePost extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Run mass product to source un-assignment
     *
     * @param \Kiboko\Magento\Model\V1InventoryBulkProductSourceUnassignPostBody $inventoryCatalogApiBulkSourceUnassignV1ExecutePostBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1InventoryBulkProductSourceUnassignPostBody $inventoryCatalogApiBulkSourceUnassignV1ExecutePostBody)
    {
        $this->body = $inventoryCatalogApiBulkSourceUnassignV1ExecutePostBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/inventory/bulk-product-source-unassign';
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
     * @throws \Kiboko\Magento\Exception\InventoryCatalogApiBulkSourceUnassignV1ExecutePostUnauthorizedException
     * @throws \Kiboko\Magento\Exception\InventoryCatalogApiBulkSourceUnassignV1ExecutePostBadRequestException
     * @throws \Kiboko\Magento\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Kiboko\Magento\Model\ErrorResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\Exception\InventoryCatalogApiBulkSourceUnassignV1ExecutePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\InventoryCatalogApiBulkSourceUnassignV1ExecutePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}