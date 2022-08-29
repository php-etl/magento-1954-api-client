<?php

namespace Kiboko\Magento\v2_3\Exception;

class CustomerGroupRepositoryV1GetListGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}