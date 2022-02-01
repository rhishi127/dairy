<?php

namespace Custom;

use Custom\Connections\DBConnectionAdapter;
use Custom\Routes\Route;

class ApplicationMain
{
    /**
     * 
     * @var array<array> $project_conf
     */ 
    public static $project_conf = [];

    /**
     * 
     * @param array $configuration
     * @param bool $connectionOnly
     */
    public static function init(array $configuration = [], bool $connectionOnly = false)
    {
        $connConfig = $configuration['config_glob_paths'];
        self::setConnectionConfig($connConfig);
        if (!$connectionOnly) {
            $routes = $configuration['routes'];
            self::addRoutes($routes);
            self::$project_conf = $configuration;
        }
    }

    private static function setConnectionConfig($connConfig)
    {
        $globalConfig = file_exists($connConfig['global']) ? require_once $connConfig['global'] : [] ;
        $localConfig = file_exists($connConfig['local']) ? require_once $connConfig['local'] : [] ;
        $result = array_replace($globalConfig, $localConfig);
        DBConnectionAdapter::getInstance($result)->getConnection();
    }

    private static function addRoutes($routes)
    {
        Route::addRoutes($routes);
        Route::sendRequest();
    }
}
