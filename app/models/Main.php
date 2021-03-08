<?php

namespace app\models;

use app\core\Model;

class Main extends Model {

    private static $singletonObj = null;
	public $error;

	public static function getInstance() {
        if (self::$singletonObj !== null) {
            return self::$singletonObj;
        }

        self::$singletonObj = new self();
        return self::$singletonObj;
    }

	public function contactValidate($post) {
		$nameLen = iconv_strlen($post['name']);
		$textLen = iconv_strlen($post['text']);
		if ($nameLen < 3 or $nameLen > 20) {
			$this->error = 'Tên phải có từ 3 đến 20 ký tự';
			return false;
		} elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
			$this->error = 'Email không chính xác';
			return false;
		} elseif ($textLen < 10 or $textLen > 500) {
			$this->error = 'Tin nhắn phải chứa từ 10 đến 500 ký tự';
			return false;
		}
		return true;
	}

	public function postsCount() {
		return $this->db->column('SELECT COUNT(id) FROM posts');
	}

	public function postsList($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM posts ORDER BY id DESC LIMIT :start, :max', $params);
	}

}