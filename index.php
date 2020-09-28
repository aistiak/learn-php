<?php 

	$greeting = "hello " . htmlspecialchars($_GET['name'] );


	require 'index.view.php';