<?php
/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 1/16/16
 * Time: 9:55 AM
 */

namespace Wpa22\Core;

use Pimple\Container;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Application extends Container
{

    private static $_instance;

    public static function getInstance() {
        if(!self::$_instance instanceof Application) {
            return self::$_instance = new Application();
        }

        return self::$_instance;
    }

    public function __construct()
    {
        $this['app_version']  = "1.0"; // property injection
        $this['request']  = Request::createFromGlobals(); // static method injection
    }

    public function send() {
        $response = new Response();
        $response->setContent("Hello World");
        $response->send();
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "Application Destructot!";
    }

}