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
 * Class Database
 * @package App\Config
 */
class Database {

    // Base
    use \Oka\Traits\StaticDataObject;

    // Data
    private static $data = [

        'dsn'       => 'mysql:host=192.168.10.10;dbname=oka;port=3306',
        'username'  => 'homestead',
        'password'  => 'secret'

    ];

}