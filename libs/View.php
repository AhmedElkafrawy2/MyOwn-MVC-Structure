<?php

class View{

    function __construct() {
        
        
    }
    
    public function Render($name,$title){
        
        require "views/Header/Header.php";
        require "views/" . $name ;
        require "views/Footer/Footer.php";
        
    }

}