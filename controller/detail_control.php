<?php 
require 'model/connexion.php';
require 'model/detail_manager.php';
require 'view/header.php';

if(isset($_GET['id_book'])){ // display details of one book
	$details = new DetailsManager($db);
	$detail = $details -> getDetails(intval($_GET['id_book']));
}

if(isset($_GET['available'])){
	$detailUser = new DetailsManager($db);
		$userDetail = $detailUser -> getUserDetail($_GET['available']);
	}


require 'view/detail_view.php';

require 'view/footer.php';