<?php

namespace Kiboko\Magento\v2_3\Exception;

class CustomerGroupManagementV1GetDefaultGroupGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}