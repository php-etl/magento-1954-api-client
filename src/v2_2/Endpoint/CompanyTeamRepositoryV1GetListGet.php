<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CompanyTeamRepositoryV1GetListGet extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/V1/team/';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1GetListGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1GetListGetInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1GetListGetUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CompanyTeamRepositoryV1GetListGetInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
