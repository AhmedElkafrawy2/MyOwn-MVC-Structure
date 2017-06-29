<?php

class Model {
    
    public $app;

    function __construct() {

     


    }
    
    public function ChieldModel($name){
        
        $path = "models/".$name . ".php";
        
        require_once $path ;
        
        $this->app = new $name();
    }

}