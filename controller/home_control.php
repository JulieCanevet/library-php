<?php 
require 'model/connexion.php';
require 'model/book_manager.php';
require 'model/user_manager.php';
$manager = new BookManager($db);
$userManager = new UserManager($db);
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

// afficher les clients ou les livres
if(isset($_POST['ordre'])){
	if($_POST['ordre'] == 'users'){
	$users = $userManager -> getUsers();
	require 'view/home_users_display.php';
    }
	elseif($_POST['ordre'] == 'books'){
	$books = $manager -> getBooks();
	require 'view/home_books_display.php';    
	}
}
else{
	$books = $manager -> getBooks();
	require 'view/home_books_display.php';
    }