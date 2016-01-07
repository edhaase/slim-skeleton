<?php

$c = new \Slim\Container(
    [
    'settings' => ['displayErrorDetails' => true ]
    ]
);
        
$c['log'] = function ($container) {
    return new \App\Service\Logger();
};

$c['cacheDriver'] = function ($container) {
    $options = array('ttl' => 3600, 'namespace' => md5(__file__));
    $driver = new Stash\Driver\Apc();
    $driver->setOptions($options);
    return $driver;
};

$c['cachePool'] = function ($container) {
    return new Stash\Pool($container['cacheDriver']);
};
