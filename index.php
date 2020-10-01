<?php 


// reference in the controllers 
$database = require("core/boostrap.php");


require Router::load('routes.php')
              ->direct( Request::uri() );