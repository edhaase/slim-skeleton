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
$app = new \Slim\App(new \App\Lib\AppContainer());
/*
 * For Slim < 3.1, (check dependencies if you have problems) uncomment
 * require('Lib/container.php');
 * $app = new \Slim\App($c);
 */

$app->add(Middleware::responseTime());
$app->add(Middleware::TrailingSlash());
$app->add(Middleware::BasicAuthentication()->users([
    'test' => '1234',
    ]));


require_once 'routes.php';

$app->run();
