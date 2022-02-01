<?php

namespace Custom\Restful;

use Custom\Response\Response;
use Custom\Restful\Abs\AbstractRestfulController;
use Custom\Utility\JSend\Response\CustomJSendResponse;

class RestfulController extends AbstractRestfulController
{
    public function get(int $id)
    {
        return null;
    }
    
   /**
    * 
    * @param array<array> $data
    * @return null
    */
    public function getList(array $data = null)
    {
        return null;
    }

    /**
     * Create a new resource
     *
     * @param  mixed $data
     * @return mixed
     */
    public function create(array $data)
    {
        return null;
    }

    public function update(int $id, $data)
    {
        return null;
    }

    public function delete(int $id)
    {
        return null;
    }

    public function sendResponse(array $responseArray)
    {
        $response = new Response();
        $response->sendResponse($responseArray);
    }
}
