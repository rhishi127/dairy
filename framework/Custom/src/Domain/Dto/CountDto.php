<?php

namespace Custom\Domain\Dto;

class CountDto
{
    /**
     * @var int|null
     */
    public $count;

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
    }

    public function exchangeArray($data)
    {
        $this->count = (isset($data['count'])) ?
            intval($data['count']) : null;
    }

    public function toArray()
    {
        $data = array();
        $data['count'] = $this->count;
        return $data;
    }
}
