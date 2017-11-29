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


	// public function getTypeBook($ordre){ //sort the book listing in home page
	// 	$sql = 'SELECT * FROM books WHERE category = ';
	// 	if ($ordre == 'novel') {
	// 		$sql .= 'novel';
	// 	} elseif ($ordre == 'poetry') {
	// 		$sql .= 'poetry';
	// 	} elseif ($ordre == 'adventure') {
	// 		$sql .= 'adventure';
	// 	} elseif ($ordre == 'scienceFiction') {
	// 		$sql .= 'scienceFiction';
	// 	}
	// 	$req = $this->_db->query($sql);
	// 	$books = $req -> fetchAll();
	// 	return $books;
	// }

		public function getTypeBook($ordre){ // Select only one account
		$req = $this -> _db -> prepare('SELECT * FROM books
			WHERE category = :category');
		$req -> execute(array(
			'category' => $ordre
		));
		$bookType = $req -> fetchAll();
		return $bookType;
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
