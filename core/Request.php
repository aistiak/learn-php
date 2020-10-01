<?php 


class  Request {

    public static function uri()
    {

        $uri =  str_replace( "learn-php/","",$_SERVER['REQUEST_URI'] )  ;

        $uri = trim($uri,"/");        
    
        return $uri ;
    }
}