<?php
class User {
	protected $_name;
	protected $_city;


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
  	public function getName() { return $this-> _name;}    
  	public function getCity() { return $this-> _city;}

	// LISTE DES SETTERS
	public function setName($name){
			$this -> _title = $name;
	}
	public function setCity($city){
			$this -> _author = $city;
	}
}