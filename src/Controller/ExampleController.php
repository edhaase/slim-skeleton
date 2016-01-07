<?php
/**
 * ExampleController
 * @package Controllers
 */
namespace App\Controller;

use \Slim\Http\Request as Request;
use \Slim\Http\Response as Response;

/**
 * ExampleController demonstrates a simple controller using an object from the
 * DI container.
 * @final
 */
final class ExampleController extends AbstractController
{
    /**
     * Called for routes of type class:method.
     * Routes of type class::method are called statically.
     */
    public function __construct($container)
    {
        parent::__construct($container);
    }
   
    /**
     * action is route handler, and in this example $this->log uses the getter
     * from AbstractController to locate 'log' in our DI container.
     * @param \Slim\Http\Request $req http request
     * @param \Slim\Http\Response $res http response
     */
    public function action(Request $req, Response $res, $args)
    {
        $this->log->debug('ExampleController#action: Method entry');

        $res
            ->withStatus(200)
            ->withHeader('Content-type', 'application/json')
            ->write(json_encode($args, JSON_PRETTY_PRINT));
    }
}
