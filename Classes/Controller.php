<?php
/**
 * Controller.php
 * => Simple Controller class, for a hint of MVC
 */

class Controller {
    function view($file,$data){
        $file = dirname(__FILE__) . '/../views/' . $file;
        extract($data);
        ob_start();

        if (is_file($file)) {
            include($file);
        }
        $return =  ob_get_clean();
        return $return;
    }

    function url($path){
        return $_SERVER['REQUEST_URI'] . '/' . $path;
    }
}