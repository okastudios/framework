<?php
/*
 *     ____  __
 *    / __ \/ /______ _
 *   / / / / //_/ __ `/
 *  / /_/ / ,< / /_/ /
 *  \____/_/|_|\__,_/
 *
 *  @author Ole K. Aanensen <ole@okastudios.com>
 *  @copyright Copyright (c) 2015, okastudios.com
 *
 */

// Package
namespace App;

/**
 * Class Application
 * @package App
 */
class Application {

    /**
     * @var bool
     */
    public static $debug;

    /**
     * Init Application
     */
    public static function Initialize()
    {

        /**
         * INI Values
         * ***TODO***
         * ***YOU CAN MOVE THIS TO YOUR PHP.INI FILE***
         */
        ini_set('display_errors', true);
        error_reporting(E_ALL);

        /**
         * Debug
         */
        self::$debug = Config\System::Get('debug');

    }

}