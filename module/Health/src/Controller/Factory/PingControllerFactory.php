<?php

namespace Health\Controller\Factory;

use Health\Controller\PingController;

class PingControllerFactory
{
    public function __invoke(): PingController
    {
        $pingController = new PingController();
        return $pingController;
    }
}
