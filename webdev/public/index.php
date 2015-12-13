<?php 

define("DD" , __DIR__ . "/..");

require DD . "/wpa22/functions.php";
require DD . "/app/controller/controllers.php";


$request_uri = $_SERVER["REQUEST_URI"];
$script_name = $_SERVER["SCRIPT_NAME"];

$request_uri = explode("/", $request_uri);
$script_name = explode("/", $script_name);

$request = array_diff($request_uri, $script_name);

$request = array_values($request);


$routes = include DD . "/app/routes.php";

if(array_key_exists($request[0], $routes)) {
	$controller = $request[0];
	array_shift($request);
	var_dump($request);
	call_user_func_array($routes[$controller], $request);
} else {
	echo "404!";
}








?>