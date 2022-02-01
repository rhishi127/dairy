<?php

namespace Custom\Requests;

use Custom\Response\Response;
use Custom\Restful\Abs\AbstractRestfulController;

class RequestHandler
{
    public function processFactoryRequest($requestObject, $httpVerb)
    {
        //to call invoke from factory
        $requestController = $requestObject();
        $this->processRequest($requestController, $httpVerb);
    }
    public function processRequest(AbstractRestfulController $requestObject, string $httpVerb)
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        unset($_GET['uri']);
        if ($httpVerb != $requestMethod) {
            $this->badRequest();
        }
        switch ($requestMethod) {
            case 'GET':
                $this->processGetRequest($requestObject);
                break;
            case 'POST':
                $this->processPostRequest($requestObject);
                break;
            case 'PUT':
                $this->processPutRequest($requestObject);
                break;
            case 'DELETE':
                $this->processDeleteRequest($requestObject);
                break;
        }
    }

    private function processGetRequest(AbstractRestfulController $requestObject)
    {
        if (empty($_GET) || sizeof($_GET) > 1) {
            $requestObject->getList(empty($_GET) ? null : $_GET);
        }
        if (sizeof($_GET) == 1 && in_array('id', array_keys($_GET))) {
            $requestObject->get($_GET['id']);
        }
    }

    private function processPostRequest(AbstractRestfulController $requestObject)
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json, 1);
        if (empty($data)) {
            $this->badRequest();
        }
        $requestObject->create($data);
    }

    private function processDeleteRequest(AbstractRestfulController $requestObject)
    {
        if (empty($_GET) && ! in_array('id', array_keys($_GET))) {
            $this->badRequest();
        }
        if (sizeof($_GET) == 1 && in_array('id', array_keys($_GET))) {
            $id = (int) $_GET['id'];
            $requestObject->delete($id);
        }
    }

    private function processPutRequest(AbstractRestfulController $requestObject)
    {
        /**
         * @var string|null
         */
        $inputData = file_get_contents("php://input");
        parse_str($inputData, $_PUT);
        $id = (sizeof($_GET) == 1 &&
        in_array('id', array_keys($_GET)) ? $_GET['id'] : '');
        if (empty($_PUT) || empty($id)) {
            $this->badRequest();
        }
        $id = (int)$id;
        $requestObject->update($id, $_PUT);
    }
    private function badRequest()
    {
        $response = new Response();
        $response->sendBadRequestResponse();
    }
}
