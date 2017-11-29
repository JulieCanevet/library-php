<?php
class Book {
	protected $_title;
	protected $_author;
	protected $_summary;
	protected $_category;
	protected $_release_date;
	protected $_availability;

	public function __construct(array $donnees){ // constructeur
		$this -> hydrate($donnees);
     	// $this -> _type = strtolower(static::class);
   }

	public function hydrate(array $donnees) { // hydratation
    	foreach ($donnees as $key => $value) {
 	 	    $method = 'set'.ucfirst($key);
			if (method_exists($this, $method)) {
		    	$this -> $method($value);
			}
    	}
	}

	// LISTE DES GETTERS
  	public function getTitle() { return $this-> _title;}    
  	public function getAuthor() { return $this-> _author;}
  	public function getRelease_date() { return $this-> _release_date;}
  	public function getCategory() { return $this-> _category;}
  	public function getSummary() { return $this-> _summary;}
  	public function getAvailability(){ return $this-> _availability;}

	// LISTE DES SETTERS
	public function setTitle($title){
			$this -> _title = $title;
	}
	public function setAuthor($author){
			$this -> _author = $author;
	}	
	public function setRelease_date($release_date){
			$this -> _release_date = $release_date;
	}	
	public function setCategory($category){
			$this -> _category = $category;
	}	
	public function setSummary($summary){
			$this -> _summary = $summary;
	}

	public function setAvailability($availability){
	 		$this -> _availability = $availability;
	}
}