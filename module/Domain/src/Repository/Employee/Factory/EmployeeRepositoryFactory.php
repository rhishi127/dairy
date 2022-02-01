<?php

namespace Domain\Repository\Employee\Factory;

use Domain\Command\Employee\EmployeeCommandMapper;
use Domain\Repository\Employee\EmployeeRepository;

class EmployeeRepositoryFactory
{
    public function __invoke()
    {
        return new EmployeeRepository(
            new EmployeeCommandMapper()
        );
    }
}
