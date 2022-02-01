<?php

namespace Core\Domain\Repository\Employee;

use Domain\Entity\Employee\EmployeeEntity;
use Custom\Domain\Entity\InsertIdResultEntity;

interface IEmployeeRepository
{
    public function addEmployee(EmployeeEntity $employeeEntity):InsertIdResultEntity;
}
