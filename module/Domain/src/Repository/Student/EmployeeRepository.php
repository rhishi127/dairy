<?php

namespace Domain\Repository\Student;

use Core\Domain\Repository\Student\IEmployeeRepository;
use Domain\Command\Student\EmployeeCommandMapper;
use Domain\Entity\Student\EmployeeEntity;
use Domain\Query\Student\StudentQueryMapper;

class EmployeeRepository implements IEmployeeRepository
{
    /**
     * @var EmployeeCommandMapper
     */
    protected $student_command_mapper;

    /**
     * @var StudentQueryMapper
     */
    protected $student_query_mapper;

    public function __construct(
        EmployeeCommandMapper $studentCommandMapper,
        StudentQueryMapper $studentQueryMapper
    ) {
        $this->student_command_mapper = $studentCommandMapper;
        $this->student_query_mapper = $studentQueryMapper;
    }

    public function addStudent(EmployeeEntity $studentEntity): bool
    {
        return $this->student_command_mapper->addStudent(
            $studentEntity->getFirstName(),
            $studentEntity->getLastName(),
            $studentEntity->getEmail(),
            $studentEntity->getPocketMoney(),
            $studentEntity->getPassword()
        );
    }

    public function getAllStudents()
    {
        return $this->student_query_mapper->getAllStudents();
    }

    public function getSecondHighestPocketMoney(int $offset = 1)
    {
        return $this->student_query_mapper->getHighestPocketMoney($offset);
    }
}
