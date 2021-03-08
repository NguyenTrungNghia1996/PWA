<?php

namespace app\lib;

use mysqli;
use PDO;

class Db
{
	private static $singletonObj = null;
	protected $db;

	private function __construct()
	{
		$config = require 'app/config/db.php';
		// $this->db  = new mysqli('localhost','username','password','database');
		// $this->db = new mysqli($config['host'] ,$config['user'] ,$config['password'],$config['name']);
		$this->db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['name'] . '', $config['user'], $config['password'],[PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	}

	public static function getInstance() {
        if (self::$singletonObj !== null) {
            return self::$singletonObj;
        }

        self::$singletonObj = new self();
        return self::$singletonObj;
    }

	public function query($sql, $params = [])
	{
		$stmt = $this->db->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $val) {
				if (is_int($val)) {
					$type = PDO::PARAM_INT;
				} else {
					$type = PDO::PARAM_STR;
				}
				$stmt->bindValue(':' . $key, $val, $type);
			}
		}
		$stmt->execute();
		return $stmt;
	}

	public function row($sql, $params = [])
	{
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function column($sql, $params = [])
	{
		$result = $this->query($sql, $params);
		return $result->fetchColumn();
	}

	public function lastInsertId()
	{
		return $this->db->lastInsertId();
	}
}
