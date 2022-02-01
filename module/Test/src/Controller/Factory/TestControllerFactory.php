<?php

namespace Test\Controller\Factory;

use Test\Controller\PhpWordController;
use Test\Controller\TestController;
use Test\Service\TestService;

class TestControllerFactory
{
    public function __invoke(): TestController
    {
        $testController = new TestController(new TestService());
        return $testController;
    }
}
