<?php

return [
    // Retrieve list of modules used in this application.
    'modules' => require __DIR__ . '/modules.config.php',
    'routes' => require __DIR__ . '/routes.config.php',
    'config_glob_paths' => [
        'global' =>realpath(__DIR__) . '/autoload/global.php',
        'local' => realpath(__DIR__) . '/autoload/local.php'
    ],
];