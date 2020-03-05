<?php 
define('PATH', realpath('.'));
define('_controller',PATH.'/Controller/');
define('_routers',PATH.'/Router/');
define('_views',PATH.'/Views/');
define('_functions',PATH.'/Functions/');
define('_models',PATH.'/Models/');
define('_core',PATH.'/Core/');


$Url = $_GET['_url'];
$Router = explode('/',$Url);
// print_r($Router);
require _routers.'Router.php';



?>