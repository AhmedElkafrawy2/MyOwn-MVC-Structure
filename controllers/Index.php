<?php

class Index extends Controller{

    function __construct(){
        

       parent::__construct();
                
        $this->view->Render("Index/Index.php" , "Home");
        $this->model->ChieldModel('Index_Model');
        //$this->model->app->Other();
         
    }

}