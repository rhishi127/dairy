<?php

namespace Test\Controller;

use Application\Controller\ApplicationController;
use Core\Test\Service\ITestService;
use Custom\Utility\JSend\Response\CustomJSendResponse;

class TestController extends ApplicationController
{
    /**
     * @var ITestService
     */
    protected $test_service;

    public function __construct(ITestService $testService)
    {
        $this->test_service = $testService;
    }

    /**
     * 
     * @param array<array> $data
     * @return null
     */
    public function getList(array $data = null)
    {
        $response = new CustomJSendResponse('success');
        return $this->sendResponse($response->asArray());
        /*$customJSendResponse = new CustomJSendResponse('success');
        return $customJSendResponse;*/
    }
}
