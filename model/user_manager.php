<?php 

class UserManager {
	// PDO instance
  private $_db; 
  
  public function __construct($db) {
    $this->setDb($db);
  }
	public function setDb($db) 
	{
		$this->_db = $db;
	}

	public function getUsers(){ //sort the listing in home page
		$sql = 'SELECT * FROM customers';
		$req = $this->_db->query($sql);
		$users = $req -> fetchAll();
		return $users;
	}
}

// :availability, :id_customer
//    'summary' => $book -> getSummary(),
//    'availability' => $book -> getAvailability()
