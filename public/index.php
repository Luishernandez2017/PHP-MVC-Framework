<?php 
  /**
  * Front Controller
  *
  * PHP version 5.4
  **/

/*** Routing ***/
// require '../Core/Router.php';
// require '../App/Controllers/Posts.php';

spl_autoload_register(function ($class){
    $root = dirname(__DIR__); //get the parent directory using namespaces
    $file = $root . '/' . str_replace('\\', '/', $class). '.php';
    if(is_readable($file)){
        require $root . '/' . str_replace('\\', '/', $class) . '.php';
    }

});


/**
* Error and Exception handling
*
*/
error_reporting(E_ALL);//php error settings
set_error_handler("Core\Error::errorHandler");
set_exception_handler("Core\Error::exceptionHandler");


$router = new Core\Router();





// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']); 
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']); 

$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'admin']);

$router->dispatch($_SERVER['QUERY_STRING']);

?>