<?php

namespace Custom\Domain\Dto;

use Custom\Domain\Dto\Result\DefaultResultDto;

class InsertIdDto extends DefaultResultDto
{
    /**
     * @var int
     */
    public $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function exchangeArray($data)
    {
        $this->id = (isset($data['id'])) ? $data['id'] : null;
    }

    public function toArray()
    {
        $data = array();
        $data['id'] = $this->id;
        return $data;
    }
}
