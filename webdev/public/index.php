<?php 

define("DD" , __DIR__ . "/..");

require DD . "/wpa22/functions.php";

if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = "home";
}


load_view($page);





?>