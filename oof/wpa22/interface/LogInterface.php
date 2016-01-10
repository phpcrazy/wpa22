<?php
/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 1/9/16
 * Time: 12:03 PM
 */

interface LogInterface {

    public function write($key, $value);

    public function read($key);

    public function contain($key);

    public function remove($key);
}