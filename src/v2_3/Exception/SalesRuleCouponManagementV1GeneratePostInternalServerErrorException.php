<?php

namespace Kiboko\Magento\v2_3\Exception;

class SalesRuleCouponManagementV1GeneratePostInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal Server error');
    }
}