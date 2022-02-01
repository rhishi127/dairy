<?php

namespace Core\Student\Service;

use Domain\Entity\Student\EmployeeEntity;

interface IStudentService
{
    public function addStudent(EmployeeEntity $studentEntity);

    public function getAllStudents();

    public function getSecondHighestPocketMoney();
}
