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
require('Lib/container.php');
// Old pre-Slim 3.1 syntax (check your dependencies if you need this)
// $app = new \Slim\App($c);
$app = new \Slim\App(new \App\Lib\AppContainer());

$app->add(Middleware::responseTime());
$app->add(Middleware::TrailingSlash());
$app->add(Middleware::BasicAuthentication()->users([
    'test' => '1234',
    ]));


require_once 'routes.php';

$app->run();
