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

$router = new Core\Router();





// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']); 
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']); 

$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'admin']);

$router->dispatch($_SERVER['QUERY_STRING']);

?>