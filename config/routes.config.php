<?php
use Custom\Routes\Enum\RouteHttpVerbEnum;

return [
    '/add-employee' => [
        'factory' => 'Employee\Controller\Factory\EmployeeControllerFactory',
        'http_method' => RouteHttpVerbEnum::POST_VERB
    ]
];
