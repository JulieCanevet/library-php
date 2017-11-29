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
	    ));
	}

		public function getTypeBook($ordre){ // Select only one category
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

	public function editAvailability($idBook, $idUser){
		$req = $this -> _db -> prepare('UPDATE books SET availability = :availability WHERE id_book = :id_book');
		$req -> execute(array(
			'availability' => $idUser,
			'id_book' => $idBook
		));
	}
}