<?php

namespace Kiboko\Magento\V2_3\Endpoint;

class SharedCatalogProductManagementV1UnassignProductsPost extends \Kiboko\Magento\V2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2_3\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     * Remove the specified products from the shared catalog.
     *
     * @param int $id
     * @param null|\Kiboko\Magento\V2_3\Model\V1SharedCatalogIdUnassignProductsPostBody $requestBody
     */
    public function __construct(int $id, ?\Kiboko\Magento\V2_3\Model\V1SharedCatalogIdUnassignProductsPostBody $requestBody = null)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/V1/sharedCatalog/{id}/unassignProducts');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Kiboko\Magento\V2_3\Model\V1SharedCatalogIdUnassignProductsPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \Kiboko\Magento\V2_3\Model\V1SharedCatalogIdUnassignProductsPostBody) {
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
     * @throws \Kiboko\Magento\V2_3\Exception\SharedCatalogProductManagementV1UnassignProductsPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Kiboko\Magento\V2_3\Exception\SharedCatalogProductManagementV1UnassignProductsPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2_3\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2_3\\Model\\ErrorResponse', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
