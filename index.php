<?php 


// reference in the controllers 
$database = require("core/boostrap.php");


$router = new Router ;


require 'routes.php' ;

$uri =  str_replace( "learn-php/","",$_SERVER['REQUEST_URI'] )  ;

$uri = trim($uri,"/");

var_dump(  $uri );

require $router->direct($uri);


