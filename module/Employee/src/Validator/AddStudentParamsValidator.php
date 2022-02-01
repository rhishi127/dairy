<?php

namespace Student\Validator;

use Custom\Utility\String\EmailChecker;
use Custom\Utility\String\NumericChecker;
use Custom\Utility\Validator\Result\ValidationResult;
use Custom\Utility\Validator\ParameterValidator;
use Domain\Entity\Student\StudentEntity;

class AddStudentParamsValidator
{
    /**
     * @param StudentEntity $studentEntity
     * @return ValidationResult
     */
    public static function isAddStudentParamsValid(StudentEntity $studentEntity):ValidationResult
    {
        $validationResult = new ValidationResult(false);
        $requiredFields = ['first_name', 'last_name', 'pocket_money', 'email', 'password'];
        $requiredValidationResult = ParameterValidator::getValidationResult($studentEntity->toArray(), $requiredFields);

        if (! $requiredValidationResult->isValid()) {
            $message = $requiredValidationResult->getMessage();
            $validationResult->setMessage($message);
            return $validationResult;
        }

        if (! EmailChecker::isEmailValid($studentEntity->getEmail())) {
            $message = 'email address format is not valid';
            $validationResult->setMessage($message);
            return $validationResult;
        }

        if (! NumericChecker::isPositiveInteger($studentEntity->getPocketMoney())) {
            $message = 'pocket money must be a positive integer';
            $validationResult->setMessage($message);
            return $validationResult;
        }
        $validationResult->setIsValid(true);
        return $validationResult;
    }
}
