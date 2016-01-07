<?php
/**
 * PhpInfo route controller
 *
 * @package Controllers
 */
namespace App\Controller;

/**
 * InfoController is an example of statically calling a route handler without
 * instaniating or passing in the container object. Typically you wouldn't
 * do this, but this controller doesn't need anything.
 *
 * @final
 */
final class InfoController
{
     /**
     * Display phpinfo
     * @param \Slim\Http\Request $req http request
     * @param \Slim\Http\Response $res http response
     */
    public static function info($req, $res)
    {
        phpinfo();
    }
}
