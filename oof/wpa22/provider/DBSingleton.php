<?php 


trait DBSingleton {

	private static $_instance = null;
	private $table_name = null;

	public static function table($table_name) {

		$class = __CLASS__;

		if(!self::$_instance instanceof $class) {
			self::$_instance = new $class();
		}
		self::$_instance->table_name = $table_name;
		return self::$_instance;
	}

	public function get() {
		$sql = "SELECT * FROM " . $this->table_name;

		$query = $this->query($sql);
		return $query->fetchAll();
	}
}

 ?>