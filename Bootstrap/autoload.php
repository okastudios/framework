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

define('OKA_START', microtime(true));

/**
 * Register composer autoloader
 * This will load all the classes you need on your journey
 * automatically on-the-go whenever you should be in need for them
 */
require __DIR__.'/../Libraries/autoload.php';


/**
 * Include compiled class file
 * To increase performance you may include a compiled class file
 * which contains all the the classes commonly used on your journey
 */
$compiledPath = __DIR__.'/cache/compiled.php';
if(file_exists($compiledPath))
{

    require $compiledPath;

}