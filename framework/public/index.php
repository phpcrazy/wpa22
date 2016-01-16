<?php
/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 1/16/16
 * Time: 9:51 AM
 */

define("DD", realpath(__DIR__ . "/.."));

require DD . "/vendor/autoload.php";

use Wpa22\Core\Application;

$app = Application::getInstance();

$app->send();

unset($app);