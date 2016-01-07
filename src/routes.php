<?php

/* use :: for static call */
$app->get('/info', '\App\Controller\InfoController::info');
$app->get('/opcache/clear', '\App\Controller\OpcacheController:clear');
$app->get('/opcache/status', '\App\Controller\OpcacheController:status');
$app->get('/testctrl[/{id}]', '\App\Controller\ExampleController:action');

$app->group(
    '/apcu',
    function () {
        $this->get('/status', '\App\Controller\APCuController:status');
        $this->get('/info', '\App\Controller\APCuController:info');
        $this->get('/clear', '\App\Controller\APCuController:clear');
    }
);
