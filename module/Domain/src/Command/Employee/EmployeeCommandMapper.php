<?php

namespace Domain\Command\Employee;

use \Domain\Common\DefaultMapper;
use Domain\Entity\Employee\EmployeeEntity;
use Custom\Domain\Entity\InsertIdResultEntity;

class EmployeeCommandMapper extends DefaultMapper
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $mobileNumber
     * @param int $branchId
     * @param string $password
     * @return object|null
     */
    public function addEmployee(
        array $test
    ):InsertIdResultEntity {
        $insertIdEntity = new InsertIdResultEntity();
        /*$firstName = ''; 
        $lastName = ''; 
        $email = ''; 
        $mobileNumber = ''; 
        $password = ''; 
        $branchId = '';   
        $userTypeId = ''; 
        $userToken = ''; 
        $createdBy = '';*/
        $camelCaseArray = $this->convertKeysToCamelCase($test);
        extract($camelCaseArray);
        try {
            $sql = "CALL uspAddEmployee("
                        . ":first_name,"
                        . ":last_name,"
                        . ":email,"
                        . ":mobile_number,"
                        . ":u_password,"
                        . ":branch_id,"
                        . ":user_type_id,"
                        . ":user_token,"
                        . ":created_by"
                    . ")";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":first_name", $firstNames);
            $stmt->bindParam(":last_name", $lastName);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":mobile_number", $mobileNumber);
            $stmt->bindParam(":u_password", $password);
            $stmt->bindParam(":branch_id", $branchId);
            $stmt->bindParam(":user_type_id", $userTypeId);
            $stmt->bindParam(":user_token", $userToken);
            $stmt->bindParam(":created_by", $createdBy);
            if ($stmt->execute()) {
                $stmt = $this->conn->query("SELECT LAST_INSERT_ID()");
                $lastId = $stmt->fetchColumn();
                $insertIdEntity->setId($lastId);
                $insertIdEntity->setIsSuccess(true);                  
            }
        } catch (\Exception $ex) {
            var_dump($ex->getMessage());die;
            return $insertIdEntity;
        }
        return $insertIdEntity;
    }
}
