<?php 

class BookManager {
	// PDO instance
  private $_db; 
  
  public function __construct($db) {
    $this->setDb($db);
  }
	public function setDb($db) 
	{
		$this->_db = $db;
	}


}