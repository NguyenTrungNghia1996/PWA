<?php

namespace app\core;

class View
{

	public $view;
	public $route;
	public $layout = 'default';

	public function __construct($route)
	{
		$this->route = $route;
		// $this->view = $route['controller'] . '/' . $route['action'];
	}

	/**
	 * render
	 *
	 * @param  mixed $view
	 * @param  mixed $vars
	 * @return void
	 */
	public function render($view, $vars = [])
	{
		extract($vars);
		$this->pathView = 'app/views/' . $this->route['controller'] .'/'. $view . '.php';
		if (file_exists($this->pathView)) {
			ob_start();
			require $this->pathView;
			$content = ob_get_clean();
			if($this->layout !== null){
				require 'app/views/layouts/' . $this->layout . '.php';
			}else{
				echo $content;
			}
		}else{
			echo $this->pathView . 'does not exits';
		}
	}

	public function setLayout($layout)
	{
		$this->layout = $layout;
	}

    public function renderClean($title,$vars =[]){
        extract($vars);
        $path = 'app/views/'.$this->path.'.php';
        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'app/views/layouts/clean.php';
        }
    }

	public function redirect($url) {
		header('location: /'.$url);
		exit;
	}

	public static function errorCode($code)
	{
		http_response_code($code);
		$path = 'app/views/errors/' . $code . '.php';
		if (file_exists($path)) {
			require $path;
		}
		exit;
	}

	public function message($status, $message)
	{
		exit(json_encode(['status' => $status, 'message' => $message]));
	}

	public function location($url)
	{
		exit(json_encode(['url' => $url]));
	}
}
