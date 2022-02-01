<?php

namespace Custom\Domain\Dto;

class SumDto
{
    /**
     * @var int|null
     */
    public $total;

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function exchangeArray($data)
    {
        $this->total = (isset($data['total']))
            ? intval($data['total']) : null;
        return $this;
    }

    public function toArray()
    {
        $data = array();
        $data['totalSum'] = $this->total;
        return $data;
    }
}
