<?php

namespace Domain\Repository\Employee;

use Core\Domain\Repository\Employee\IEmployeeRepository;
use Domain\Command\Employee\EmployeeCommandMapper;
use Domain\Entity\Employee\EmployeeEntity;
use Custom\Domain\Entity\InsertIdResultEntity;

class EmployeeRepository implements IEmployeeRepository
{
    /**
     * @var EmployeeCommandMapper
     */
    protected $employee_command_mapper;

    public function __construct(
        EmployeeCommandMapper $employeeCommandMapper
    ) {
        $this->employee_command_mapper = $employeeCommandMapper;
    }

    public function addEmployee(EmployeeEntity $employeeEntity): InsertIdResultEntity
    {
       return $this->employee_command_mapper->addEmployee(
            $employeeEntity->toArray()
        );
    }
}
