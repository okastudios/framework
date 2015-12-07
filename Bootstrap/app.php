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
 * Required contants
 */
define('OKA_ROOT', dirname(__DIR__));

/**
 * Exceptions
 */
register_shutdown_function(['\Oka\Exceptions', 'ShutdownHandler']);
set_exception_handler(['\Oka\Exceptions', 'ExceptionHandler']);
set_error_handler(['\Oka\Exceptions', 'ErrorHandler']);

/**
 * Initialize Application
 */
\App\Application::Initialize();