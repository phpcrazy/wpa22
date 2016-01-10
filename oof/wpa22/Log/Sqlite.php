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

    public function write($key, $value)
    {
        // TODO: Implement write() method.
    }

    public function read($key)
    {
        // TODO: Implement read() method.
    }

    public function contain($key)
    {
        // TODO: Implement contain() method.
    }

    public function remove($key)
    {
        // TODO: Implement remove() method.
    }


}