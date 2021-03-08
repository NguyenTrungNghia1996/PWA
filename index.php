<?php
$time_start = microtime(true);
require 'app/lib/Helper.php';
require 'app/lib/FileCache.php';

use app\core\Router;
use app\core\DotEnv;

// Autoload
spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
});
// Start Session
session_start();
// Cache ENV
// $cacheFile = FileCache::getInstance();
// if ($cacheFile->get('ENV_CACHE_NAME') != 'cached') {
    (new DotEnv('.env'))->load();
    // $cacheFile->save('ENV_CACHE_NAME', 'cached', 3600 * 24 * 30);
// };

// if (getenv('APP_DEBUG') == true) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
// }

// Load 3rd Extension
if (file_exists('vendor/autoload.php')) {
    require  'vendor/autoload.php';
}


// Run app
$router = new Router;
$router->run();

// Calculate time
$time_end = microtime(true);
$time = $time_end - $time_start;
echo "Sever handle in $time seconds\n";