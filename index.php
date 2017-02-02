<?php

require __DIR__ . '/vendor/autoload.php';

ORM::configure('mysql:host=localhost;dbname=mon_armoire');
ORM::configure('username', 'root');
ORM::configure('password', 'simplonco');

class Armoire {

	private $db;

	public function __construct() {
		$this->db = ORM::for_table('mes_chaussettes');
	}

	public function getInstance() {
		return $this->db;
	}

	public static function all($limit = null, $offset = null) {
		return self::$db->limit($limit)->offset($offset)->find_many();
	}

}

$a = new Armoire();
var_dump($a->getInstance());
