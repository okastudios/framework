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

/**
 * Include autoloader
 */
require __DIR__.'/../Bootstrap/autoload.php';

/**
 * Require app
 */
require __DIR__.'/../Bootstrap/app.php';

/**
 * Initialize application
 */
\Oka\Web::Execute();