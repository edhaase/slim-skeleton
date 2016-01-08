<?php
/**
 * app.php
 */
require_once __DIR__ . "/../config.php";
require_once __DIR__ . '/../vendor/autoload.php';

use Psr7Middlewares\Middleware;

$app = new \Slim\App(new \App\Lib\AppContainer([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]));

$app->add(Middleware::responseTime());
$app->add(Middleware::TrailingSlash());
$app->add(Middleware::BasicAuthentication()->users([
    'test' => '1234',
    ]));


require_once 'routes.php';

$app->run();
