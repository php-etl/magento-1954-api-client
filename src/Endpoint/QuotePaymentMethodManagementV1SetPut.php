<?php

namespace Kiboko\Magento\Endpoint;

class QuotePaymentMethodManagementV1SetPut extends \Kiboko\Magento\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\Runtime\Client\Endpoint
{
    /**
     * Adds a specified payment method to a specified shopping cart.
     *
     * @param \Kiboko\Magento\Model\V1CartsMineSelectedPaymentMethodPutBody $quotePaymentMethodManagementV1SetPutBody 
     */
    public function __construct(\Kiboko\Magento\Model\V1CartsMineSelectedPaymentMethodPutBody $quotePaymentMethodManagementV1SetPutBody)
    {
        $this->body = $quotePaymentMethodManagementV1SetPutBody;
    }
    use \Kiboko\Magento\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/V1/carts/mine/selected-payment-method';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1SetPutUnauthorizedException
     * @throws \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1SetPutBadRequestException
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
            throw new \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1SetPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\Exception\QuotePaymentMethodManagementV1SetPutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json'), $response);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\Model\\ErrorResponse', 'json');
        throw new \Kiboko\Magento\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}