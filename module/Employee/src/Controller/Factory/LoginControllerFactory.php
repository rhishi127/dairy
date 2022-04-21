<?php

namespace Employee\Controller\Factory;

use Employee\Controller\LoginController;
use Employee\Data\Hydrator\EmployeeHydratorFactory;
use Employee\Service\Factory\EmployeeServiceFactory;

class LoginControllerFactory
{
    public function __invoke():LoginController
    {
        $employeeHydratorFactory = new EmployeeHydratorFactory();
        $employeeHydrator = new $employeeHydratorFactory();
        $employeeServiceFactory = new EmployeeServiceFactory();
        $employeeService = new $employeeServiceFactory();
        return new LoginController($employeeHydrator(), $employeeService());
    }
}
