<?php declare(strict_types=1);

use Slim\App;

if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../bootstrap/constants.php';

require ROOT_PATH . '/vendor/autoload.php';

/** @var App $app */
$app = require ROOT_PATH . '/bootstrap/web.php';

$app->run();
