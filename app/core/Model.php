<?php

namespace app\core;

use app\lib\Db;

abstract class Model
{
	public $db;
	public $limit = 10;

	public function __construct()
	{
		$this->db = Db::getInstance();
	}
}
