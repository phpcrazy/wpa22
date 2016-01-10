<?php
/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 1/9/16
 * Time: 11:38 AM
 */

class Log_File implements LogInterface{

    private $log_file_location = DD . "/storage/log";
    private $log_file;

    public function setPath($location) {
        echo $location . "<br />";
    }

    public function __construct()
    {
        if(!file_exists($this->log_file_location . "/access.log")) {
            $this->log_file = fopen($this->log_file_location . "/access.log", "w");
        } else {
            $this->log_file = fopen($this->log_file_location . "/access.log", "a");
        }

    }

    public function __destruct()
    {

    }

    public function write($key, $value)
    {
        $txt = $key . "," . $value . "\n";
        fwrite($this->log_file, $txt);
        fclose($this->log_file);

    }

    public function read($key)
    {
        throw new Exception("File Log cannot read with key");

    }

    public function contain($key)
    {
        throw new Exception("File Log cannot read with key");
    }

    public function remove($key)
    {
        throw new Exception("File Log cannot read with key");
    }


}