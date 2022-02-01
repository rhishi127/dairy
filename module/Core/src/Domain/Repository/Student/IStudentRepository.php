<?php

namespace Core\Domain\Repository\Student;

use Domain\Entity\Student\StudentEntity;

interface IStudentRepository
{
    public function addStudent(StudentEntity $studentEntity):bool;
}
