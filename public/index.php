<?php
session_start();

use Core\Session;
use Core\App;
require dirname(__DIR__)."/vendor/autoload.php";

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . 'Core/functions.php';




// spl_autoload_register(function ($class){

//     $class = str_replace("\\",DIRECTORY_SEPARATOR, $class);
   
//     require base_path("$class.php");
// });


require base_path("bootstrap.php"); 

$router = new Core\Router();

require base_path("routes.php");
// handling the request for the pod
cached_pod();
// GETTING THE TYPE OF REQUEST IN ORDER TO FOLLOW THE PRINCIPLE OF RESTAPI
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri,$method);

Session::unflash();