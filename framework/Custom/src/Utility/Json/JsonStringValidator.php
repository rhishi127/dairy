<?php

namespace Custom\Utility\Json;

use Custom\Utility\Validator\Result\ValidationResult;

class JsonStringValidator
{
    public static function isJsonStringValid(string $jsonData):ValidationResult
    {
        $validationResult = new ValidationResult(false);
        $jobPostingData = json_decode($jsonData, true);
        if ($jobPostingData == null ||
                $jobPostingData == false ||
                empty($jobPostingData)
        ) {
            $jsonError = self::getJsonError();
            $message = "invalid json format. "
                    . "json decode error: $jsonError. "
                    . "please go here for json definition: "
                    . "http://www.json.org/";
            $validationResult->setMessage($message);
            return $validationResult;
        }
        $validationResult->setIsValid(true);
        return $validationResult;
    }

    private static function getJsonError():string
    {
        $error = '';
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                $error = '- blank json string';
                break;
            case JSON_ERROR_DEPTH:
                $error = '- maximum stack depth exceeded';
                break;
            case JSON_ERROR_STATE_MISMATCH:
                $error = '- underflow or the modes mismatch';
                break;
            case JSON_ERROR_CTRL_CHAR:
                $error = '- unexpected control character found';
                break;
            case JSON_ERROR_SYNTAX:
                $error = '- syntax error, malformed JSON';
                break;
            case JSON_ERROR_UTF8:
                $error = '- malformed UTF-8 characters, possibly incorrectly encoded';
                break;
            default:
                $error = '- unknown error';
                break;
        }
        return $error;
    }
}
