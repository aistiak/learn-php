<?php 

	
require 'Task.php' ;
require 'functions.php' ;


$pdo = connectToDb() ;

$statement = $pdo->prepare('select * from todos');

$statement->execute();

// var_dump($statement->fetchAll(PDO::FETCH_OBJ));

// $tasks = $statement->fetchAll(PDO::FETCH_OBJ);

$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');


require 'index.view.php';