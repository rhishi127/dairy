<?php

namespace Domain\Dto;

use Custom\Domain\Entity\DefaultEntity;

class AllRecordsResultDto
{
    /**
     * total number of records found
     * @var int
     */
    public $num_found;

    /**
     * offset
     * @var int
     */
    public $start;

    /**
     * number of records requested to return
     * @var int
     */
    public $rows;

    /**
     * array of records entity
     * @var array
     */
    public $records;

    /**
     * @var bool
     */
    public $is_success;

    public function __construct()
    {
        $this->is_success = true;
        $this->start = 0;
        $this->rows = 10;
        $this->records = array();
        $this->num_found = 0;
    }

    /**
     * @return bool
     */
    public function getIsSuccess(): bool
    {
        return $this->is_success;
    }

    /**
     * @param bool $is_success
     */
    public function setIsSuccess(bool $is_success): void
    {
        $this->is_success = $is_success;
    }

    public function getNumFound()
    {
        return $this->num_found;
    }

    public function getRecords()
    {
        return $this->records;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function setNumFound($numFound)
    {
        $this->num_found = $numFound;
    }

    public function setRecords($records)
    {
        $this->records = $records;
    }

    public function setStart($start)
    {
        $this->start = $start;
    }

    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    public function addRecordEntity(DefaultEntity $recordEntity)
    {
        array_push($this->records, $recordEntity);
    }

    public function toArray()
    {
        $data = array();
        $data['total_records'] = $this->num_found;
        $data['start'] = $this->start;
        $data['rows'] = $this->rows;
        $data['records'] = array();
        $recordEntityArray = $this->records;
        if (!empty($this->records)) {
            foreach ($recordEntityArray as $recordEntity) {
                $recordObject = (object) $recordEntity->toArray();
                array_push($data['records'], $recordObject);
            }
        }
        return $data;
    }
}
