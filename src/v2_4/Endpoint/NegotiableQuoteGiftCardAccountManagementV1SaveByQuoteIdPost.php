<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/negotiable-carts/{cartId}/giftCards';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_4\Exception\NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostUnauthorizedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\NegotiableQuoteGiftCardAccountManagementV1SaveByQuoteIdPostUnauthorizedException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}