<?php
/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 1/9/16
 * Time: 12:03 PM
 */

interface LogInterface {

    public function write();

    public function read();

    public function contain();

    public function remove();
}