<?php

namespace Domain\Dto\Common;

class TotalCountDto
{
    /**
     * @var int|null
     */
    public $count;

    public function setCount($count)
    {
        $this->count = $count;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function exchangeArray($data)
    {
        $this->count = (isset($data['total']))
            ? intval($data['total']) : null;
        return $this;
    }

    public function toArray()
    {
        $data = array();
        $data['totalCount'] = $this->count;
        return $data;
    }
}
