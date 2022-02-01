<?php

namespace Core\Employee\Service;

use Domain\Entity\Employee\EmployeeEntity;

interface IEmployeeService
{
    public function addEmployee(EmployeeEntity $employeeEntity);
}
