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
namespace App\Config;

/**
 * Class System
 * @package App\Config
 */
class System {

    // Base
    use \Oka\Traits\StaticDataObject;

    // Data
    private static $data = [

        // General app information
        'app'               => 'Oka Framework',
        'build'             => '0.1',
        'prettyBuild'       => 'Oka Framework 0.1 - Build 00001 7th December 2015',
        'author'            => 'oleaa',
        'author_name'       => 'Ole K. Aanensen',
        'author_email'      => 'ole@okastudios.com',
        'author_website'    => 'http://oleaa.com',

        // Application settings
        'debug'             => true,
        'locale'            => 'en-us'

    ];

}