<?php

return [
	'host' => getenv('DB_HOST'),
	'name' => getenv('DB_DATABASE'),
	'user' => getenv('DB_USERNAME'),
	'password' => getenv('DB_PASSWORD'),
	'port' => getenv('DB_PORT'),
];
