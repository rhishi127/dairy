<?php

namespace Custom\Domain\Dto;

class ExistenceCheckDto
{
    /**
     * @var bool
     */
    public $is_existed;

    public function getIsExisted()
    {
        return $this->is_existed;
    }

    public function setIsExisted($isExisted)
    {
        $this->is_existed = $isExisted;
    }

    public function exchangeArray($data)
    {
        $is_existed = (isset($data['is_existed'])) ?
            intval($data['is_existed']) : null;
        $this->is_existed = $is_existed === 1 ? true : false;
    }

    public function toArray()
    {
        $data = array();
        $data['is_existed'] = $this->is_existed;
        return $data;
    }
}
