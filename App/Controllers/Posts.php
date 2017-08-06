<?php

namespace App\Controllers;
use \Core\View;
/** Post Controller **/

    class Posts extends \Core\Controller{


    /**
    * Before filter - called before an action method
    *
    * @return void 
    */
    protected function before(){ 
    }

    /**
    * after filter - called after an action method
    *
    * @return void 
    */
    protected function after(){
    
    }

        /**
        * Show the index of page
        *
        * @return void
        */

    public function indexAction(){
        // echo 'Hello from the index action in the Posts controller';
        // echo '<p> Query string parameters: <pre> '.htmlspecialchars(print_r($_GET, true)). '</pre></p>';
     View::render('Posts/index.php');
    }

    /**
    * Show the add new page
    *
    * @return void
    */

    public function addNewAction(){
        echo 'Hello from the addNew action in the Posts controller';
    }

       /**
     * Show the edit page
     *
     * @return void
     */
    public function editAction()
    {
        echo 'Hello from the edit action in the Posts controller!';
        echo '<p>Route parameters: <pre>' .
             htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }

   

    }



?>