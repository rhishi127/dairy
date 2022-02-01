<?php

namespace Custom\Domain\Dto\Result;

abstract class AbstractResultDto
{
    /**
     * @var bool
     */
    public $is_success;

    /**
     * @var string
     */
    public $error_message;

    abstract public function getIsSuccess();

    abstract public function getErrorMessage();

    abstract public function setIsSuccess($isSuccess);

    abstract public function setErrorMessage($errorMessage);
}
