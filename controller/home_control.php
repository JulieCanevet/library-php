<?php 
require 'model/connexion.php';
require 'model/book_manager.php';

$manager = new BookManager($db);

require 'view/header.php';

require 'view/new_book_form.php';

// je m' occupe de l'ajout
if(isset($_POST['add']) && isset($_POST['title']) && isset($_POST['author']) && isset($_POST['summary']) && isset($_POST['release_date']) && isset($_POST['category']) && !empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['summary']) && !empty($_POST['release_date']) && !empty($_POST['category'])){ // if form is completed and send
	
	require 'model/entities/book.php';

echo 'bonjour';
  	
  	$book = new Book(array(
  		'title' => $_POST['title'], 
  		'author' => $_POST['author'], 
  		'summary' => $_POST['summary'], 
  		'category' => $_POST['category'], 
  		'release_date' => $_POST['release_date']));
  		// 'availability' => 'oui', 
  		// 'id_custommer' => ));
 
  $manager -> add($book);
}