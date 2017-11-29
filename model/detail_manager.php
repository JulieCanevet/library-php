<?php
class DetailsManager {
	// Instance de PDO
	private $_db; 
	  
	public function __construct($db) {
	  $this->setDb($db);
	}	
	
	public function setDb($db) 
	{
		$this->_db = $db;
	}

	// Select le vehicule cliqué
	public function getDetails($id_book){
		$req = $this -> _db -> prepare('SELECT * FROM books
			WHERE id_book= :id_book');
		$req -> execute(array(
			'id_book' => $id_book
		));

		$details = $req -> fetch();
		return $details;
	}

	public function getUserDetail($customer){
		$req = $this -> _db -> prepare('SELECT * FROM customers
			WHERE id_customer = :id_customer');
		$req -> execute(array(
			'id_customer' => $customer
		));
		$detailsUser = $req -> fetch();
		return $detailsUser;
	}
}