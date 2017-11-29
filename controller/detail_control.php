<?php 
require 'model/connexion.php';
require 'model/detail_manager.php';
require 'view/header.php';

if(isset($_GET['id_book'])){ // display details of one book
	$details = new DetailsManager($db);
	//$idBook = $_GET['id_book'];
	$detail = $details -> getDetails(intval($_GET['id_book']));
}

require 'view/detail_view.php';
