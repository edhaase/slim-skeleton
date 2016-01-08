<?php
/**
 * OpcacheController
 * @package Controllers
 */
namespace App\Controller;

use \Slim\Http\Request as Request;
use \Slim\Http\Response as Response;

/**
 * OpcacheController provides handlers for Zend Opcache.
 * @final
 */
final class OpcacheController extends AbstractController
{
    /**
     * APCuController Constructor
     * @param \Slim\Container $container Slim framework container
     */
    public function __construct($container)
    {
        parent::__construct($container);
    }
   
    /**
     * Return opcache status
     * @param \Slim\Http\Request $req http request
     * @param \Slim\Http\Response $res http response
     */
    public function status(Request $req, Response $res)
    {
        return $res
            ->withStatus(200)
            ->withHeader('Content-type', 'application/json')
            ->write(json_encode(opcache_get_status(), JSON_PRETTY_PRINT));
    }
    
    /**
     *
     */
    public function clear(Request $req, Response $res)
    {
        return $res
            ->withStatus(200)
            ->withHeader('Content-type', 'application/json')
            ->write(json_encode(opcache_reset(), JSON_PRETTY_PRINT));
    }
}
