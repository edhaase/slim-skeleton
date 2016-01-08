<?php
/**
 * app.php
 */
require_once __DIR__ . "/../config.php";
require_once __DIR__ . '/../vendor/autoload.php';

use Psr7Middlewares\Middleware;

/**
 * Create Slim 3.* application, with container
 */
// Can't extend AppContainer just yet. Have to wait for release 3.1
// require('Lib/container.php');
// $app = new \Slim\App(new \App\Lib\AppContainer());

$app = new \Slim\App($c);

$app->add(Middleware::responseTime());
$app->add(Middleware::TrailingSlash());
$app->add(Middleware::BasicAuthentication()->users([
    'test' => '1234',
    ]));


require_once 'routes.php';

$app->run();
