<?php 

function load_view($page) {
	$file = load_config("app.view_folder") . $page . ".php";

	if(file_exists($file)) {
		require $file;
	} else {
		echo "404 Not Found!";
	}	
}

function load_config($value) {
	$split_value = explode(".", $value);
	$config_file = DD . "/app/config/" . $split_value[0] . ".php";
	if(file_exists($config_file)) {
		$value = include $config_file;
		if(array_key_exists($split_value[1], $value)) {
			return $value[$split_value[1]];
		} else {
			trigger_error("You need create a key in config file, Dump!", E_USER_ERROR);
		}
	} else {
		trigger_error("You need to create $split_value[0] file in config folder, Idiot!", E_USER_ERROR);
	}
	
}


 ?>