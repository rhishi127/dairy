<?php

namespace Core\Domain\Repository\Employee;

use Domain\Entity\Employee\EmployeeEntity;
use Custom\Domain\Entity\InsertIdResultEntity;
use Domain\Entity\Employee\LoginEntity;

interface IEmployeeRepository
{
    public function addEmployee(EmployeeEntity $employeeEntity):InsertIdResultEntity;

    public function login(LoginEntity $loginEntity);
}
