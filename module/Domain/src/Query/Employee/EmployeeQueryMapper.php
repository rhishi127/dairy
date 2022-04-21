<?php

namespace Domain\Query\Employee;

use Custom\Utility\Hydrate\GenericEntityHydrator;
use Domain\Common\DefaultMapper;
use Domain\Entity\ResultEntity;
use Domain\Entity\Employee\EmployeeEntity;

class EmployeeQueryMapper extends DefaultMapper
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login(string $userName, $password)
    {
        $resultEntity = new ResultEntity();
        try {
            $resultEntity->setIsSuccess(false);
            $allStudentsEntityArray = [];
            $sql = "CALL uspEmployeeLogin("
                . ":user_name,"
                . ":u_password"
                 . ")";
            $rowPrototype = new EmployeeEntity();
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":user_name", $userName);
            $stmt->bindParam(":u_password", $password);
            if ($stmt->execute()) {
                $resultEntity->setIsSuccess(true);
                $stmt->setFetchMode($this->conn::FETCH_ASSOC);
                $employee = $stmt->fetch();
                $hydrator = new GenericEntityHydrator();
                $resultItem = $hydrator->hydrate($employee, $rowPrototype);
                $resultEntity->setResult([$resultItem]);
            }
            return $resultEntity;
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
        return $resultEntity;
    }
}
