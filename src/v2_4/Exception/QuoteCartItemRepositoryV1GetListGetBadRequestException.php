<?php

namespace Kiboko\Magento\v2_4\Exception;

class QuoteCartItemRepositoryV1GetListGetBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}