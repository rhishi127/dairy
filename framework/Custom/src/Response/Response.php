<?php

namespace Custom\Response;

class Response
{
    // error code resource not  found
    public $_RES_NOT_FOUND = array(
        'status' => 'error',
        'code' => 404, 'message' => 'resource not found',
        'data'=> null
    );

    // error code method not allowed
    public $_RES_METHOD_NOT_ALLOWED = array(
        'status' => 'error',
        'code' => 405,
        'message' => 'method not allowed'
    );

    //success response code
    public $_RES_OK = array(
        'status' => 'success',
        'code' => 200,
        'message' => 'OK',
        'data'=> null
    );

    //internal server response code
    public $_RES_INTERNAL_SERVER_ERROR = array(
        'status' => 'error',
        'code' => 500,
        'message' => 'internal server error',
        'data'=> null
    );

    //service unavailable response code
    public $_RES_SERVICE_UNAVAILABLE = array(
        'status' => 'error',
        'code' => 503,
        'message' => 'service unavailable',
        'data'=> null
    );

    // error code method not allowed
    public $_RES_METHOD_BAD_REQUEST = array(
        'status' => 'error',
        'code' => 403,
        'message' => 'bad request, please check the http request method and parameters',
        'data'=> null
    );

    public function sendResponse(array $response = null)
    {
        echo json_encode($response);
        exit();
    }

    public function sendBadRequestResponse()
    {
        http_response_code($this->_RES_METHOD_BAD_REQUEST['code']);
        $this->sendResponse($this->_RES_METHOD_BAD_REQUEST);
    }

    public function sendResourceNotFound()
    {
        http_response_code($this->_RES_NOT_FOUND['code']);
        $this->sendResponse($this->_RES_NOT_FOUND);
    }
}
