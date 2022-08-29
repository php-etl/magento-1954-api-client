<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CompanyCreditCreditLimitRepositoryV1SavePut extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return '/V1/companyCredits/{id}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditLimitRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditLimitRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditLimitRepositoryV1SavePutInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditLimitRepositoryV1SavePutBadRequestException();
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditLimitRepositoryV1SavePutUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CompanyCreditCreditLimitRepositoryV1SavePutInternalServerErrorException();
        }
        return null;
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
