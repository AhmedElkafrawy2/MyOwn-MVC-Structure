<?php


class Bootstrap {

    function __construct() {
        
        if(isset($_GET['url'])){
               
              $url = $_GET['url'];
              
              $url = rtrim($url,"/");

              $url = explode("/" , $url);
              
              $file = "controllers/" . $url[0] .".php " ;
              if(file_exists($file)){
                  
                require_once "controllers/" . $url[0] .".php";

              }else{

                require "controllers/Error.php";
                
                $error  = new Error();
                
                return false;

                }
                $controller = new $url[0]();


              if(isset($url[2])){

                       $controller->$url[1]($url[2]);
              }
               elseif(isset($url[1])){

               $controller->$url[1]();
               }
        }else{
            
            require "controllers/Index.php";
            $index = new Index();
        }
    }

}
