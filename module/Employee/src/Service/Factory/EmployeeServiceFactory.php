<?php

namespace Employee\Service\Factory;

use Employee\Service\EmployeeService;
use Domain\Repository\Employee\Factory\EmployeeRepositoryFactory;

class EmployeeServiceFactory
{
    public function __invoke():EmployeeService
    {
        $employeeRepositoryFactory = new EmployeeRepositoryFactory();
        $employeeRepository = new $employeeRepositoryFactory();
        return new EmployeeService($employeeRepository());
    }
}
