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

// Imports
use Oka\Web;
use Oka\Web\Router;

/**
 * Regex syntax
 * Wildcards:
 * (.*)  mixed
 * (\w+) string
 * (\d+) int
 */

// Landing page
//Router::Get('/', 'PagesController@Landing');
//Router::Get('/', ['PagesController', 'Landing']);
Router::Get('/', function()
{

    $page = new Web\View('Default/200');
    $page->render();

});