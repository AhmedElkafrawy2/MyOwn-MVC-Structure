<?php

class Model {
    
    public $app;

    function __construct() {
     
       require_once 'Config/DatabaseVar.php';
        
        try{
            
        $conn = new PDO("mysql:host=localhost;dbname=".DBNAME,USERNAME,PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
        }

       catch (Exception $ex) {
            echo "Error in Connection " . $ex.getMessage();
        }

    }
    
    public function ChieldModel($name){
        
        $path = "models/".$name . ".php";
        
        require_once $path ;
        
        $this->app = new $name();
    }

}