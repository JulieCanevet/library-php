<?php 
require 'model/connexion.php';
require 'model/book_manager.php';
require 'model/user_manager.php';
$manager = new BookManager($db);
$userManager = new UserManager($db);
require 'view/header.php';
require 'view/header_home.php';
require 'view/new_book_form.php';

// je m' occupe de l'ajout
if(isset($_POST['add']) && isset($_POST['title']) && isset($_POST['author']) && isset($_POST['summary']) && isset($_POST['release_date']) && isset($_POST['category']) && !empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['summary']) && !empty($_POST['release_date']) && !empty($_POST['category'])){ // if form is completed and send
    
  if(preg_match("#^[1-2][0-9]{3}$#", $_POST['release_date'])){ // check date
    require 'model/entities/book.php';
  	$book = new Book(array(
  		'title' => $_POST['title'], 
  		'author' => $_POST['author'], 
  		'summary' => $_POST['summary'], 
  		'category' => $_POST['category'], 
  		'release_date' => $_POST['release_date']));

	   $manager -> add($book);
  }
  else{
    echo 'verifiez bien le format de la date';
  }
}

// edit book availability
if (isset($_POST['edit'])){ // if "edit" has been clicked
  $users = $userManager -> getUsers(); // displaying users list
}

if(isset($_POST['edition'])){ // change value 
  $idBook = intval($_POST['id_book']);
  $idUser = intval($_POST['edition']);

  $available = $manager -> editAvailability($idBook, $idUser);
}
if(isset($_POST['returned'])){
  $idBook = intval($_POST['id_book']);
  $available = $manager -> editAvailability($idBook, 1);
}

// afficher les clients ou les livres
if(isset($_POST['ordre'])){
	if($_POST['ordre'] == 'users'){
	$users = $userManager -> getUsers();
	require 'view/home_users_display.php';
    }
	elseif($_POST['ordre'] == 'books' && !isset($_POST['type'])){
	$books = $manager -> getBooks();
	require 'view/home_books_display.php';    
	}
}
// display listing in home page (suivant le type de catégorie)
elseif(isset($_POST['type'])){
    if($_POST['type'] == 'novel'){
      	$bookType = $manager -> getTypeBook('novel'); 
      	require 'view/home_books_type_display.php';
  	}
    elseif($_POST['type'] == 'poetry'){
      	$bookType = $manager -> getTypeBook('poetry'); 
    	require 'view/home_books_type_display.php';
    }
    elseif($_POST['type'] == 'adventure'){
      	$bookType = $manager -> getTypeBook('adventure');
    	require 'view/home_books_type_display.php';
    }
    elseif($_POST['type'] == 'scienceFiction'){
      	$bookType = $manager -> getTypeBook('scienceFiction'); 
   		require 'view/home_books_type_display.php';
    }
}
else{ // par défaut, affiche tous les livres
	$books = $manager -> getBooks();
	require 'view/home_books_display.php';
}


require 'view/footer.php';








