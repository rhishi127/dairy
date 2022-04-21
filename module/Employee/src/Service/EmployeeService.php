<?php


namespace Employee\Service;

use Core\Domain\Repository\Employee\IEmployeeRepository;
use Core\Employee\Service\IEmployeeService;
use Domain\Dto\AllRecordsResultDto;
use Domain\Dto\RecordResultDto;
use Domain\Entity\Employee\LoginEntity;
use Domain\Entity\ResultEntity;
use Domain\Entity\Employee\EmployeeEntity;
use Custom\Utility\Token\SaltGenerator;
use Custom\Domain\Entity\InsertIdResultEntity;

class EmployeeService implements IEmployeeService
{
    /**
     * @var IEmployeeRepository
     */
    protected $employee_repository;

    public function __construct(IEmployeeRepository $employeeRepository)
    {
        $this->employee_repository = $employeeRepository;
    }

    public function addEmployee(EmployeeEntity $employeeEntity)
    {
        $employeeEntity->setPassword(SaltGenerator::generateSalt(10));
        $employeeEntity->setUserToken(SaltGenerator::generateToken(20));
        /**
         * @var InsertIdResultEntity
         */
        $insertResult = $this->employee_repository->addEmployee($employeeEntity);
        if ($insertResult->getIsSuccess()) {
            
        }
        
        //return $insertResult;
    }

    public function login(LoginEntity $loginEntity)
    {
        return $this->employee_repository->login($loginEntity);
    }

    /*public function getAllEmployees()
    {
        $resultEntity = $this->employee_repository->getAllEmployees();
        $allRecordsResultDto = new AllRecordsResultDto();
        if ($resultEntity->getIsSuccess()) {
            $allRecordsResultDto->setNumFound(count($resultEntity->getResult()));
            $allRecordsResultDto->setRecords($resultEntity->getResult());
        }
        if (!$resultEntity->getIsSuccess()) {
            $allRecordsResultDto->is_success = false;
        }
        return $allRecordsResultDto;
    }

    */
}
