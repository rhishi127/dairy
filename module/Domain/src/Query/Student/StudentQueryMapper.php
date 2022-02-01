<?php

namespace Domain\Query\Student;

use Custom\Utility\Hydrate\GenericEntityHydrator;
use Domain\Common\DefaultMapper;
use Domain\Entity\ResultEntity;
use Domain\Entity\Student\EmployeeEntity;

class StudentQueryMapper extends DefaultMapper
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllStudents()
    {
        $resultEntity = new ResultEntity();
        try {
            $resultEntity->setIsSuccess(false);
            $allStudentsEntityArray = [];
            $sql = "CALL uspGetAllStudents()";
            $rowPrototype = new EmployeeEntity();
            $stmt = $this->conn->prepare($sql);
            if ($stmt->execute()) {
                $resultEntity->setIsSuccess(true);
                $stmt->setFetchMode($this->conn::FETCH_ASSOC);
                while ($student = $stmt->fetch()) {
                    $hydrator = new GenericEntityHydrator();
                    $resultItem = $hydrator->hydrate($student, $rowPrototype);
                    if ($resultItem instanceof EmployeeEntity) {
                        array_push($allStudentsEntityArray, $resultItem);
                    }
                }
                $resultEntity->setResult($allStudentsEntityArray);
            }
            return $resultEntity;
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
        return $resultEntity;
    }

    public function getHighestPocketMoney($offset = 1)
    {
        $resultEntity = new ResultEntity();
        try {
            $sql = "CALL uspGetHighestPocketMoney(:limitValue)";
            $rowPrototype = new EmployeeEntity();
            $stmt = $this->conn->prepare($sql);
            $resultEntity->setIsSuccess(false);
            $studentEntityArray = [];
            $stmt->bindParam(":limitValue", $offset);
            if ($stmt->execute()) {
                $stmt->setFetchMode($this->conn::FETCH_ASSOC);
                $resultEntity->setIsSuccess(true);
                while ($student = $stmt->fetch()) {
                    $hydrator = new GenericEntityHydrator();
                    $resultItem = $hydrator->hydrate($student, $rowPrototype);
                    if ($resultItem instanceof EmployeeEntity) {
                        array_push($studentEntityArray, $resultItem);
                    }
                }
                $resultEntity->setResult($studentEntityArray);
            }
            return $resultEntity;
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
        return $resultEntity;
    }
}
