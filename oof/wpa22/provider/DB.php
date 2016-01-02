<?php

/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 1/2/16
 * Time: 10:06 AM
 *
 * Singaleton Pattern for DB Object
 *
 */
class DB extends PDO{

    // SELECT * FROM <table_name>

    private static $_instance = null;

    private $table_name;
    private $first_value = null;
    private $sign = null;
    private $second_value = null;


    public function __construct()
    {
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'wpa22oo';
        $this->user = 'root';
        $this->pass = '';
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
        parent::__construct( $dns, $this->user, $this->pass );
    }

    public static function table($table_name) {
        if(!self::$_instance instanceof  DB) {
            self::$_instance = new DB();
        }
        self::$_instance->table_name = $table_name;
        return self::$_instance;
    }

    public function where($first_value, $sign, $second_value) {
        $this->first_value = $first_value;
        $this->sign = $sign;
        $this->second_value = $second_value;
        return $this;
    }


    public function get() {

        if($this->first_value != null) {
            $sql = "SELECT * FROM "
                . $this->table_name
                . " WHERE " . $this->first_value . $this->sign . $this->second_value;
            $this->first_value = null;
            $this->second_value = null;
            $this->sign = null;
        } else {
            $sql = "SELECT * FROM "
                . $this->table_name;
        }


        $query = $this->query($sql);

        return $query->fetchAll();

    }

}