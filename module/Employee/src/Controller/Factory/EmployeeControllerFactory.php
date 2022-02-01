<?php

namespace Employee\Controller\Factory;

use Employee\Controller\EmployeeController;
use Employee\Data\Hydrator\EmployeeHydratorFactory;
use Employee\Service\Factory\EmployeeServiceFactory;

class EmployeeControllerFactory
{
    public function __invoke():EmployeeController
    {
        $employeeHydratorFactory = new EmployeeHydratorFactory();
        $employeeHydrator = new $employeeHydratorFactory();
        $employeeServiceFactory = new EmployeeServiceFactory();
        $employeeService = new $employeeServiceFactory();
        return new EmployeeController($employeeHydrator(), $employeeService());
    }
}
