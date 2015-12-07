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
namespace App\Http;

// Imports
use Oka\Web;

/**
 * Class Application
 * @package App\Http
 */
class Application
{

    /**
     * Initialize web application
     */
    public static function Initialize()
    {

        /**
         * Debug headers
         */
        if(\App\Application::$debug)
            register_shutdown_function([__CLASS__, 'DebugHeaders']);

    }

    /**
     * Register routes
     */
    public static function Routes()
    {

    }

    /**
     * Debug message at the end of each page
     */
    public static function DebugHeaders()
    {
        header('Oka-Execution-Time: ' . round((microtime(true) - OKA_START) * 1000));
        header('Oka-Memory-Usage: ' . round(memory_get_usage() / 1024, 2));
    }

}