<?php 

function connectToDb(){

	try{

		return new PDO('mysql:host=127.0.0.1;dbname=mytodo' , 'root','');
	} catch(PDOException $e ){

		die('could not connect');

	}

}