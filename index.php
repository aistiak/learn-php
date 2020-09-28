<?php 

	class Task {
		public $description ;

		public $completed = false ;
		
		public function __construct($description){
			$this->description = $description ;
		}

		public function complete(){
			$this->completed = true ;
		}

		public function isComplete(){
			return $this->completed ;
		}

	}

	$tasks = [

		new Task("eat") ,
		new Task("sleep") ,
		new Task("code") ,

	] ;

	$tasks[0]->complete();
	require 'index.view.php';