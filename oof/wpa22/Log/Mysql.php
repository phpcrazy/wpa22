<?php

/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 1/9/16
 * Time: 11:39 AM
 */
class Log_Mysql implements LogInterface
{
    public function setUser($username) {
        echo $username;
    }

    public function setPassword($password) {
        echo $password;
    }

    public function setDBName($dbname) {
        echo $dbname;
    }

    public function __construct()
    {
        echo "Construct MySQL. <br />";
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "Destruct MySQL <br/>";
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