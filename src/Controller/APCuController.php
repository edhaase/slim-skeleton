<?php
/**
 * APCu route controller
 * @package Controllers
 */
namespace App\Controller;

use \Slim\Http\Request as Request;
use \Slim\Http\Response as Response;

/**
 * APCuController provides handlers for the APCu extension
 * @final
 */
final class APCuController extends AbstractController
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
     * Return apcu cache info
     * @param \Slim\Http\Request $req http request
     * @param \Slim\Http\Response $res http response
     */
    public function status(Request $req, Response $res)
    {
        $res
            ->withStatus(200)
            ->withHeader('Content-type', 'application/json')
            ->write(json_encode(apcu_cache_info(), JSON_PRETTY_PRINT));
    }
    
    /**
     * APCu sma info
     * @param \Slim\Http\Request $req http request
     * @param \Slim\Http\Response $res http response
     */
    public function info(Request $req, Response $res)
    {
        $res
            ->withStatus(200)
            ->withHeader('Content-type', 'application/json')
            ->write(json_encode(apcu_sma_info(), JSON_PRETTY_PRINT));
    }
    
    /**
     * APCu clear cache
     * @param \Slim\Http\Request $req http request
     * @param \Slim\Http\Response $res http response
     */
    public function clear(Request $req, Response $res)
    {
        $res
            ->withStatus(200)
            ->withHeader('Content-type', 'application/json')
            ->write(json_encode(apcu_clear_cache(), JSON_PRETTY_PRINT));
    }
}
