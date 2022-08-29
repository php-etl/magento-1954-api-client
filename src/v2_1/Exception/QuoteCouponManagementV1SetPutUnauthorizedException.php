<?php

namespace Kiboko\Magento\v2_1\Exception;

class QuoteCouponManagementV1SetPutUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}