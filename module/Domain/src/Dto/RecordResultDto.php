<?php

namespace Domain\Dto;

use Custom\Domain\Entity\DefaultEntity;

class RecordResultDto
{
    public $is_success;

    public $record;

    public function __construct()
    {
        $this->is_success = true;
        $this->record = null;
    }

    public function getRecord()
    {
        return $this->record;
    }
    public function setRecord($record)
    {
        $this->record = $record;
    }

    public function toArray()
    {
        $data = array();
        $recordEntityArray = $this->record;
        $data['record'] = array();
        if (!empty($this->record)) {
            foreach ($recordEntityArray as $recordEntity) {
                $recordObject = (object) $recordEntity->toArray();
                array_push($data['record'], $recordObject);
            }
        }
        return $data;
    }
}
