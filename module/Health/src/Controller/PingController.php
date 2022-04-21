<?php

namespace Health\Controller;

use Application\Controller\ApplicationController;
use Custom\Utility\JSend\Response\CustomJSendResponse;
use Core\Views\ViewManager;

class PingController extends ApplicationController
{
    public function __construct()
    {
    }

    /**
     * 
     * @param array<array> $data
     * @return null
     */
    public function getList(array $data = null)
    {
        return ViewManager::render(__DIR__ ."../../Views/test.html");die
    }
}
