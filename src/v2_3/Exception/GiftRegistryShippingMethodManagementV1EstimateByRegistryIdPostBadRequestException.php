<?php

namespace Kiboko\Magento\v2_3\Exception;

class GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}