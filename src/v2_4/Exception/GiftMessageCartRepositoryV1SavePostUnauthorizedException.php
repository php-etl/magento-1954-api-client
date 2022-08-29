<?php

namespace Kiboko\Magento\v2_4\Exception;

class GiftMessageCartRepositoryV1SavePostUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}