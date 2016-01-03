<?php

/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 1/3/16
 * Time: 9:54 AM
 */
class Config
{

    public static function get($value) {
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

}