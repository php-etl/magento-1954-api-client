<?php

namespace Kiboko\Magento\v2_2\Exception;

class NegotiableQuoteCouponManagementV1SetPutUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
