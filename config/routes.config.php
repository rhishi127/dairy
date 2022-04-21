<?php
use Custom\Routes\Enum\RouteHttpVerbEnum;

return [
    '/add-employee' => [
        'factory' => 'Employee\Controller\Factory\EmployeeControllerFactory',
        'http_method' => RouteHttpVerbEnum::POST_VERB
    ],
    '/ping' => [
        'factory' => 'Health\Controller\Factory\PingControllerFactory',
        'http_method' => RouteHttpVerbEnum::GET_VERB
    ],
    '/login' => [
        'factory' => 'Employee\Controller\Factory\LoginControllerFactory',
        'http_method' => RouteHttpVerbEnum::POST_VERB
    ]
];
