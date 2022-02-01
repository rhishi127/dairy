<?php

namespace Domain\Repository\Student\Factory;

use Domain\Command\Student\EmployeeCommandMapper;
use Domain\Query\Student\StudentQueryMapper;
use Domain\Repository\Student\EmployeeRepository;

class StudentRepositoryFactory
{
    public function __invoke()
    {
        return new EmployeeRepository(
            new EmployeeCommandMapper(),
            new StudentQueryMapper()
        );
    }
}
