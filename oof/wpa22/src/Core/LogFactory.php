<?php
/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 1/9/16
 * Time: 11:05 AM
 */

namespace Wpa22\Core;


class LogFactory
{
    public function getLog($type = 'file', array $options) {
        $type = strtolower($type);

        $class = "Log_".ucfirst($type);

        // Log_Mysql
        // Log/Mysql

        require_once DD . "/wpa22/" . str_replace("_", DIRECTORY_SEPARATOR, $class) . ".php";

        $log = new $class();

        switch($type) {
            case 'file':
                $log->setPath($options[0]);
                break;
            case 'mysql':
                $log->setUser($options[0]);
                $log->setPassword($options[1]);
                $log->setDBName($options[2]);
                break;
            case 'sqlite':
                $log->setDBPath($options[0]);
                break;
            case 'redis':
                $log->setPath($options[0]);
        }
        return $log;
    }

}