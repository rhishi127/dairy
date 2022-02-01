<?php

namespace Custom\Routes;

use Custom\Requests\RequestHandler;
use Custom\Response\Response;

class Route
{
    private static $urls = array();
    
    private static $methods = array();
    
    public static function addRoutes($routes)
    {
        foreach ($routes as $url => $method) {
            $trimmedUrl = '/'.trim($url, '/');
            self::$urls[] = $trimmedUrl;
            if ($method != null) {
                self::$methods[] = $method;
            }
        }
    }

    public static function sendRequest()
    {
        $uriGetParam = isset($_GET['uri']) ? '/'.($_GET['uri']) : '/' ;
        foreach (self::$urls as $key => $value) {
            if (preg_match("#^$value$#", $uriGetParam)) {
                $methodArray = self::$methods[$key];
                $userMethod = $methodArray['factory'];
                $httpVerb = $methodArray['http_method'];
                $requestHandler = new RequestHandler();
                $requestHandler->processFactoryRequest(new $userMethod(), $httpVerb);
            }
        }
        $response  = new Response();
        $response->sendResourceNotFound();
    }
}
