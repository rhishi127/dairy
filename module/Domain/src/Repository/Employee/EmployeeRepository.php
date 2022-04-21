<?php

namespace Domain\Repository\Employee;

use Core\Domain\Repository\Employee\IEmployeeRepository;
use Domain\Command\Employee\EmployeeCommandMapper;
use Domain\Entity\Employee\EmployeeEntity;
use Custom\Domain\Entity\InsertIdResultEntity;
use Domain\Entity\Employee\LoginEntity;
use Domain\Query\Employee\EmployeeQueryMapper;

class EmployeeRepository implements IEmployeeRepository
{
    /**
     * @var EmployeeCommandMapper
     */
    protected $employee_command_mapper;

    /**
     * @var EmployeeQueryMapper
     */
    protected $employee_query_mapper;

    public function __construct(
        EmployeeCommandMapper $employeeCommandMapper,
        EmployeeQueryMapper $employeeQueryMapper
    ) {
        $this->employee_command_mapper = $employeeCommandMapper;
        $this->employee_query_mapper = $employeeQueryMapper;
    }

    public function addEmployee(EmployeeEntity $employeeEntity): InsertIdResultEntity
    {
       return $this->employee_command_mapper->addEmployee(
            $employeeEntity->toArray()
        );
    }

    public function login(LoginEntity $loginEntity)
    {
        return $this->employee_query_mapper->login(
            $loginEntity->getUserName(),
            $loginEntity->getPassword()
        );
    }
}
