<?php

namespace Custom\Utility\Validator\Result;

class ValidationResult
{
    /**
     * @var bool
     */
    private $isValid;
    
    /**
     * @var string
     */
    private $message;
    
    public function __construct($isValid = false, $message = '')
    {
        $this->isValid = $isValid;
        $this->message = $message;
    }
    
    public function isValid()
    {
        return $this->isValid;
    }
    
    public function getMessage()
    {
        return $this->message;
    }
    
    public function setIsValid($isValid)
    {
        $this->isValid = $isValid;
    }
    
    public function setMessage($message)
    {
        $this->message = $message;
    }
}
