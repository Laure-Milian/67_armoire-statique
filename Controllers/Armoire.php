<?php

class Armoire {

	private $db;

	public function __construct() {
		ORM::configure('mysql:host=localhost;dbname=mon_armoire');
		ORM::configure('username', 'root');
		ORM::configure('password', 'simplonco');
		$this->db = ORM::for_table('mes_chaussettes');
	}

	public function getInstance() {
		return $this->db;
	}

	public static function all($limit = null, $offset = null) {
		$a = new self;
		return $a->db->limit($limit)->offset($offset)->find_many();
	}

	public static function get($id) {
		$a = new self;
		return $a->db->where('id', $id)->find_one();
	}

}
