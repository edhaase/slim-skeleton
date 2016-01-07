<?php
/**
 * Logger
 * @package Services
 */
namespace App\Service;
 
/**
 * Extends and customizes the monolog service.
 * @final
 */
final class Logger extends \Monolog\Logger
{
    public function __construct()
    {
        parent::__construct(APP_NAME_SHORT);
        $path = '../logs/' . APP_NAME_SHORT.'log.log';
        $this->pushHandler(new \Monolog\Handler\StreamHandler($path, Logger::DEBUG));
    }
}
