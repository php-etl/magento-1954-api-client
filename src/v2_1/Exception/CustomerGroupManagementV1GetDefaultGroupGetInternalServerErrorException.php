<?php

namespace Kiboko\Magento\V2_1\Exception;

class CustomerGroupManagementV1GetDefaultGroupGetInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Kiboko\Magento\V2_1\Model\ErrorResponse
     */
    private $errorResponse;
    public function __construct(\Kiboko\Magento\V2_1\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Internal Server error');
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse(): \Kiboko\Magento\V2_1\Model\ErrorResponse
    {
        return $this->errorResponse;
    }
}
