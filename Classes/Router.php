<?php
/**
 * Router.php
 * => Router class for awesome framework stuff
 */

class Router {
    function route($class, $callback){

    	global $CONFIG;

        if ($class == '')
        	$class = $CONFIG['default_ctrl'];

       	$obj = new $class();


        if ($callback == '')
            $callback = 'index';

        call_user_func(array($obj, $callback));
    }
}