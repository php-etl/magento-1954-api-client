<?php

namespace Kiboko\Magento\v2_2\Exception;

class NegotiableQuoteNegotiableQuotePriceManagementV1PricesUpdatedPostBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}
