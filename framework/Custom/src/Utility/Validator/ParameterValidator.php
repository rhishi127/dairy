<?php

namespace Custom\Utility\Validator;

use Custom\Utility\Validator\Result\ValidationResult;

class ParameterValidator
{
    public static function getValidationResult($params, $requiredFields)
    {
        $validationResult = new ValidationResult(true);
        $messages = array();
        foreach ($requiredFields as $field) {
            if (!array_key_exists($field, $params) or empty($params[$field])) {
                array_push($messages, "$field is required;");
                $validationResult->setIsValid(false);
            }
        }
        if (!$validationResult->isValid()) {
            $validationResult->setMessage(implode(' ', $messages));
            return $validationResult;
        }
        return $validationResult;
    }
}
