<?php
/**
 * AppContainer.php
 */
namespace App\Lib;

// Can't extend Slim Container yet.
// Left here as a placeholder for how this will work.
class AppContainer extends \Slim\Container
{
    public function __construct($settings = [])
    {
        parent::__construct(
            $settings || [
                'settings' => [
                    'displayErrorDetails' => true,
                ]
            ]
        );
        
        $this['foundHandler'] = function () {
            return new \Slim\Handlers\Strategies\RequestResponseArgs();
        };
        
        $this['log'] = function ($container) {
            return new \App\Service\Logger();
        };
        
        $this['cacheDriver'] = function ($container) {
            $options = [
                'ttl' => 3600,
                'namespace' => md5(__file__),
                ];
            $driver = new Stash\Driver\Apc();
            $driver->setOptions($options);
            return $driver;
        };
        
        $this['cachePool'] = function ($container) {
            return new Stash\Pool($container['cacheDriver']);
        };
    }
}
