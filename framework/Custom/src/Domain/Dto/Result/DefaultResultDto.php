<?php

namespace Custom\Domain\Dto\Result;

use Custom\Domain\Dto\Result\AbstractResultDto;

class DefaultResultDto extends AbstractResultDto
{
    /**
     * @var boolean
     */
    public $is_success;

    /**
     * @var string|null
     */
    public $error_message;

    public function __construct()
    {
        $this->is_success = false;
    }

    public function getIsSuccess()
    {
        return $this->is_success;
    }

    public function getErrorMessage()
    {
        return $this->error_message;
    }

    public function setIsSuccess($isSuccess)
    {
        $this->is_success = $isSuccess;
    }

    public function setErrorMessage($errorMessage)
    {
        $this->error_message = $errorMessage;
    }
}
