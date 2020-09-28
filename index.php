<?php 

	
require 'Task.php' ;

$query = require("boostrap.php");


$tasks = $query->fetchAll("todos","Task") ; 

var_dump($tasks);

require 'index.view.php';