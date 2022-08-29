<?php

namespace Kiboko\Magento\v2_2\Exception;

class SalesTransactionRepositoryV1GetGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}