<?php
/**
 * AbstractController
 *
 * @package Controllers
 */
namespace App\Controller;

/**
 * AbstractController is the basis for other route controllers, storing and
 * presenting the container to the handlers.
 * <code>class RouteController extends AbstractController</code>
 */
abstract class AbstractController
{
    /** @var \Slim\Container Stores slim container */
    protected $container;

    /**
     * AbstractController Constructor
     * @param \Slim\Container $container Slim framework container
     */
    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }
    
    /**
     * Magic getter for access to Slim container.
     * <code>$this->Logger->info('hello world!');</code>
     * <code>$this->CachePool->getItem('a');</code>
     * @See http://php.net/manual/en/language.oop5.overloading.php#object.get
     * @param String $name Name of parameter to lookup
     */
    public function __get($name)
    {
        return $this->container->get($name);
    }
}
