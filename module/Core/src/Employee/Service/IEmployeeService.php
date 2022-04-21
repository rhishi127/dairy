<?php

namespace Core\Employee\Service;

use Domain\Entity\Employee\EmployeeEntity;
use Domain\Entity\Employee\LoginEntity;

interface IEmployeeService
{
    public function addEmployee(EmployeeEntity $employeeEntity);

    public function login(LoginEntity $loginEntity);
}
