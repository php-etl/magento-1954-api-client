<?php

namespace Kiboko\Magento\Endpoint;

class DownloadableSampleRepositoryV1SavePut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    protected $sku;
    protected $id;
    /**
     * Update downloadable sample of the given product
     *
     * @param string $sku 
     * @param string $id 
     * @param \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody $downloadableSampleRepositoryV1SavePutBody 
     */
    public function __construct(string $sku, string $id, \Kiboko\Magento\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody $downloadableSampleRepositoryV1SavePutBody)
    {
        $this->sku = $sku;
        $this->id = $id;
        $this->body = $downloadableSampleRepositoryV1SavePutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{sku}', '{id}'), array($this->sku, $this->id), '/V1/products/{sku}/downloadable-links/samples/{id}');
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
     * @throws \Kiboko\Magento\Exception\DownloadableSampleRepositoryV1SavePutUnauthorizedException
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
            throw new \Kiboko\Magento\Exception\DownloadableSampleRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}