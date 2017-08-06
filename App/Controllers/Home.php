<?php

namespace App\Controllers;

use \Core\View;

/** Home Controller **/

    class Home extends \Core\Controller{
        /**
        * Show the index of page
        *
        * @return void
        */


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



    public function indexAction(){
        // echo 'Hello from the index action in the Home controller';
        View::render('Home/index.php', [
            'name' => 'Luis',
            'colours' => ['red', 'blue', 'green', 'orange']
        ]);
    }

 


    }



?>