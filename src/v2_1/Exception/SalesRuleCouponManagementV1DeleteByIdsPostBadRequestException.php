<?php

namespace Kiboko\Magento\v2_1\Exception;

class SalesRuleCouponManagementV1DeleteByIdsPostBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}
