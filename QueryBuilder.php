<?php 

class QueryBuilder {

	private $pdo ;

	public function __construct(PDO $pdo){
	
		$this->pdo = $pdo ;
	}

	public function fetchAll($table,$Tclass){
		
		$statement = $this->pdo->prepare("select * from {$table}") ;

		$statement->execute() ;

		return $statement->fetchAll(PDO::FETCH_CLASS,$Tclass) ;
	}




}