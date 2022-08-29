<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class SalesRuleRuleRepositoryV1SavePost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/salesRules';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1SavePostInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1SavePostBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1SavePostUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\SalesRuleRuleRepositoryV1SavePostInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
