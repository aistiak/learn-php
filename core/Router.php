<?php 

class Router {

    protected $routes = [] ;


    public static function load($file)
    {
        $router = new static ; // creates a new instace 
    
        require $file ;
    
        return $router ;
    }

    public function define($routes)
    {
    
        $this->routes = $routes ;
    
    }


    public function direct($uri)
    {
        
        if (array_key_exists($uri,$this->routes)) {
           
            return $this->routes[$uri] ;
        
        }

        throw new Exception("no routes defined ");

    }
}