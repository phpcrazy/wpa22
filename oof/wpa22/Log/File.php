<?php
/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 1/9/16
 * Time: 11:38 AM
 */

class Log_File implements LogInterface{
    public function setPath($location) {
        echo $location . "<br />";
    }

    public function __construct()
    {
        echo "Log file Construct! <br/>";
    }

    public function __destruct()
    {
        echo "Log file destruct! <br />";
    }

    public function write()
    {
        // TODO: Implement write() method.
        echo "Write";
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