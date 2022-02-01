<?php

namespace Domain\Dto\Common;

class ValidationCheckDto
{
    /**
     * @var bool
     */
    public $is_valid;
    
    public function __construct()
    {
        $this->is_valid = false;
    }

    public function getIsValid()
    {
        return $this->is_valid;
    }
    
    public function exchangeArray($data)
    {
        $is_existed = (isset($data['is_valid'])) ?
                intval($data['is_valid']) : null;
        $this->is_valid = $is_existed === 1 ? true : false;
    }

    public function toArray()
    {
        $data = array();
        $data['is_valid'] = $this->is_valid;
        return $data;
    }
}
