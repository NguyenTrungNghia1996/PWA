<?php

namespace app\core;

use app\core\View;

/**
 * Controller
 */
abstract class Controller {

	public $route;
	public $view;
	public $acl;
	public $domain;

	public function __construct($route) {
		$this->route = $route;
		$this->acl = require 'app/acl/'.$route['controller'].'.php';
		if (!$this->checkAcl()) {
			View::errorCode(403);
		}
		$this->view = new View($route);
		// $this->model = $this->loadModel($route['controller']);
	}

	public function getDomain($onlySubDomain = false){
		if($onlySubDomain){
			
		}
		return ;
	}

	public function loadModel($name) {
		$path = 'app\models\\'.ucfirst($name);
		if (class_exists($path)) {
			return new $path;
		}
	}
	
	/**
	 * checkAcl
	 *
	 * @return void
	 */
	public function checkAcl() {
		if ($this->isAcl('all')) {
			return true;
		}
		elseif (isset($_SESSION['authorize']['id']) and $this->isAcl('authorize')) {
			return true;
		}
		elseif (!isset($_SESSION['authorize']['id']) and $this->isAcl('guest')) {
			return true;
		}
		elseif (isset($_SESSION['admin']) and $this->isAcl('admin')) {
			return true;
		}
		return false;
	}
	
	/**
	 * isAcl
	 *
	 * @param  mixed $key
	 * @return void
	 */
	public function isAcl($key) {
		return in_array($this->route['action'], $this->acl[$key]);
	}

}