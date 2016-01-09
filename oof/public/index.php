<?php
/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 1/2/16
 * Time: 9:49 AM
 */

define("DD", realpath( __DIR__ . "/.."));
require DD . "/vendor/autoload.php";


use Wpa22\Core\Application as CoreApp;

$log = new CoreApp();

$mysqllog = $log->getLog('mysql', ["root", "", "another"]);

$mysqllog->write();

$filelog = $log->getLog("file", ['test']);
$filelog->write();





die();

use Wpa22\App\Application;



class Dog {
    public function __construct()
    {
        echo "Dog class created";
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "Dog Destructor!";
    }

    public function bark() {
        echo "Woof!";
        echo "Woof!";
    }
}

$dog = new Dog();

Application::add($dog, "puppy");

try {
    Application::add($dog, "puppy");
} catch(Exception $e) {
    trigger_error("Object can't added", E_USER_ERROR);
}

$another = Application::get("puppy");
$another->bark();

$next = Application::get("puppy");
$next->bark();


// Only one object
// Can call from everywhere
// Can use constructor
// Method Chain


// $students = DBR::table("students")->get();

// var_dump($students);


// $usePattern = new UsePattern();

// $usePattern->testAnother();
// $usePattern->test();
// $usePattern->seeder();


// $students = DB::table("students")->get();
// $student = DB::table("students")->where("id", "=", 1)->get();


// var_dump($students);
// var_dump($student);


