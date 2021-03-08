<?php

namespace app\controllers;

use app\core\Controller;
use app\lib\Pagination;
use app\models\Admin;
use app\lib\Manifest;
use app\models\Main;

class MainController extends Controller {


    public static function ListDomain(){
        return [
            'hanoi',
            'nghean',
        ];
    }

	public function __construct($route) {
        parent::__construct($route);
        $this->model = Main::getInstance();

        // $subDomain = explode('.',$_SERVER['HTTP_HOST'][0]);
        if(in_array(getSubDomain(), self::ListDomain())){
            // $subDomain;
        }
	}

	public function indexAction() {
		$pagination = new Pagination($this->route, $this->model->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->postsList($this->route),
		];
		$this->view->render('index', $vars);
	}

	public function postAction() {
		$adminModel = new Admin;
		if (!$adminModel->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$vars = [
			'data' => $adminModel->postData($this->route['id'])[0],
		];
		$this->view->render('Пост', $vars);
	}

    public function manifestAction(){
        $params = file_get_contents('app/config/config.php');
        $json = json_decode($params, JSON_UNESCAPED_SLASHES);
        header('Content-Type: application/json;charset=utf-8');
        foreach ($json as $key => $value) {
            $name = $json[$key][0]["name"];
            $fileName = $key."_manifest.json";
            $short_name = $json[$key][0]["short_name"];
            $description = $json[$key][0]["description"];
            $scope = $json[$key][0]["scope"];
            $icon_192 = $json[$key][0]["icons"][0]["src"];
            $icon_512 = $json[$key][0]["icons"][1]["src"];
            $start_url = $json[$key][0]["start_url"];
            $background_color = $json[$key][0]["background_color"];
            $theme_color = $json[$key][0]["theme_color"];
            $display = $json[$key][0]["display"];
            $orientation = $json[$key][0]["orientation"];
            $s =$this->manifest($name,$short_name,$description,$scope,$icon_192,$icon_512,$start_url,$background_color,$theme_color,$display,$orientation);
            $c =json_encode($s,JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
            $fp = fopen('public/manifest/'.$fileName, 'w');
            fwrite($fp, $c);
            fclose($fp);
            echo($name);
        }
    }

    function manifest($name, $short_name, $description, $scope, $icon_192, $icon_512, $start_url, $background_color, $theme_color, $display, $orientation): array
        {

            $icon = array(
                array(
                    "src" => $icon_192,
                    "sizes" => "192x192",
                    "type" => "image/png",
                    "purpose" => "maskable any"
                ),
                array(
                    "src" => $icon_512,
                    "sizes" => "512x512",
                    "type" => "image/png",
                    "purpose" => "maskable any"
                )
            );
            return array(
                "short_name" => $short_name,
                "name" => $name,
                "description" => $description,
                "scope" => $scope,
                "icons" => $icon,
                "background_color" => $background_color,
                "theme_color" => $theme_color,
                "start_url" => $start_url,
                "display" => $display,
                "orientation" => $orientation,
            );
        }
        public function installAction(){
             //$l = explode(".", $_SERVER['HTTP_HOST']);
//            $filename = $l[0] . "_manifest.json";
//            if (file_exists("./manifest/" . $filename)) {
//                $filename = "./manifest/" . $filename;
//            } else {
//                $filename = "./manifest/default_manifest.json";
//            };
//            $vars = [
//                'manifest'=> $filename
//            ];
            $this->view->setLayout(null);
            $this->view->render("install");
        }

}
