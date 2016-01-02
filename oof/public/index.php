<?php
/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 1/2/16
 * Time: 9:49 AM
 */


define("DD", realpath( __DIR__ . "/.."));

require DD . "/vendor/autoload.php";


// Only one object
// Can call from everywhere
// Can use constructor
// Method Chain


$students = DB::table("students")->get();
$student = DB::table("students")->where("id", "=", 1)->get();


var_dump($students);
var_dump($student);


