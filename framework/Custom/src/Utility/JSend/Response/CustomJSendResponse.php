<?php

namespace Custom\Utility\JSend\Response;

use Custom\Utility\JSend\Exception\InvalidJSendException;


class CustomJSendResponse extends JSendResponse
{

    /**
     * @return mixed|null
     *  Description: only responses with fail or error get an error message or fail message
     */
    public function getErrorMessage()
    {
        if ($this->isError() || $this->isFail()) {
            return $this->errorMessage;
        }

        throw new \BadMethodCallException('Only responses with a status of error may have an error message.');
    }

    /**
     * CustomJSendResponse constructor.
     *
     * @param string      $status       one of static::SUCCESS, static::FAIL, static::ERROR
     * @param array<string,string>|null  $data
     * @param string|null $errorMessage mandatory for errors
     * @param string|null $errorCode
     *
     * @throws InvalidJSendException if status is not valid or status is error and empty($errorMessage) is true
     */
    public function __construct($status, array $data = null, $errorMessage = null, $errorCode = null)
    {
        parent::__construct($status, $data, $errorMessage, $errorCode);
        if (!$this->isStatusValid($status)) {
            throw new InvalidJSendException('Status does not conform to JSend spec.');
        }
        $this->status = $status;

        if ($status === static::ERROR) {
            if (empty($errorMessage)) {
                throw new InvalidJSendException('Errors must contain a message.');
            }
            $this->errorMessage = $errorMessage;
            $this->errorCode = $errorCode;
        }

        // when it is failed add fail message
        // this is the big difference between CustomJSendResponse and JSendResponse
        if ($status === static::FAIL) {
            $this->errorMessage = $errorMessage;
        }
        $this->data = $data;
    }

    /**
     * From the spec:
     * Description: There was a problem with the data submitted, or some pre-condition of the API call wasn't satisfied
     * Required   : data
     *
     * @param array<mixed,mixed>|null $data
     * @param string $message
     * @return self
     * @throws InvalidJSendException
     */
    public static function fail(array $data = null, string $message = '')
    {
        /**
         * @var CustomJSendResponse
         */
        return new self(static::FAIL, $data, $message);
    }

    /**
     * Serializes the class into an array
     *
     * @return array<mixed,mixed> the serialized array
     */
    public function asArray():array
    {
        $theArray = array(
            'status' => $this->status,
        );

        if ($this->data) {
            $theArray['data'] = $this->data;
        }
        if (!$this->data && !$this->isError()) {
            // Data is optional for errors, so it should not be set
            // rather than be null.
            $theArray['data'] = null;
        }

        // When resquest is successful inclue code 200 in response
        // for its array representation
        if ($this->status === JSendResponse::SUCCESS) {
            $theArray['message'] = '';
            $theArray['code'] = 200;
            return $theArray;
        }

        if ($this->status === JSendResponse::FAIL) {
            $theArray['message'] = (string) $this->errorMessage;
            $theArray['code'] = 200;
            return $theArray;
        }

        if ($this->isError()) {
            $theArray['message'] = (string) $this->errorMessage;

            if (!empty($this->errorCode)) {
                $theArray['code'] = (int) $this->errorCode;
                $theArray['data'] = null;
            }
        }

        return $theArray;
    }
}
