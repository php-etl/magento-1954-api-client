<?php

namespace Kiboko\Magento\v2_3\Exception;

class RmaRmaRepositoryV1DeleteDeleteBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}