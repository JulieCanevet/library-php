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

	public function add($book){ // Add new book
	    $req = $this -> _db ->prepare('INSERT INTO books (title, author, release_date, category, summary) VALUES(:title, :author, :release_date, :category, :summary)');
	    $req -> execute(array(
	    'title' => $book -> getTitle(),
	    'author' => $book -> getAuthor(),
	    'release_date' => $book -> getRelease_date(),
	    'category' => $book -> getCategory(),
	    'summary' => $book -> getSummary(),
	    // 'availability' => $book -> getAvailability()
	    ));
	}


	public function getBooks(){ //sort the listing in home page
		$sql = 'SELECT * FROM books';
		$req = $this->_db->query($sql);
		$books = $req -> fetchAll();
		return $books;
	}
}

// :availability, :id_customer
//    'summary' => $book -> getSummary(),
//    'availability' => $book -> getAvailability()
