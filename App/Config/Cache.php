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
 * Class Cache
 * @package App\Config
 */
class Cache {

    // Base
    use \Oka\Traits\StaticDataObject;

    // Data
    private static $data = [
        'engine' => 'APC'
    ];

}