<?php

/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 1/9/16
 * Time: 11:57 AM
 */
class Log_Sqlite implements LogInterface
{
    public function setDBPath($location) {
        echo $location;
    }

    public function write()
    {
        // TODO: Implement write() method.
        echo "Wtite!";
    }

    public function read()
    {
        // TODO: Implement read() method.
    }

    public function contain()
    {
        // TODO: Implement contain() method.
    }

    public function remove()
    {
        // TODO: Implement remove() method.
    }
}