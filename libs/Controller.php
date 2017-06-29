<?php

class Controller {

    function __construct() {
        
        //require constants file
        require_once "Config/Constants.php";
        // require view section
        require_once "libs/View.php";
        $this->view = new View();

        require_once 'libs/Model.php';
        
        $this->model = new Model();
        
        
        

        
        
    }

}

