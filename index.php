<?php
/**
 * index.php
 * => Awesome, lets load stuff and go nuts.
 */

/*----DEPENDENCIES----*/
//Controller class
require_once(dirname(__FILE__) . '/Classes/Controller.php');
//Router class
require_once(dirname(__FILE__) . '/Classes/Router.php');
//Controllers
foreach (glob("controllers/*.php") as $filename){
    include $filename;
}

/*----CONFIG----*/
$CONFIG = array('default_ctrl' => 'Hello_controller');

/*----ROUTER----*/
$router = new Router();

/*----WHOOP WHOOP ROUTING (Should be moved...) ----*/
$url = $_SERVER['PATH_INFO'];

$url = explode('/', $url);

$controller = $url[1];
$action = $url[2];

//Routing works!
echo $router->route($controller, $action);