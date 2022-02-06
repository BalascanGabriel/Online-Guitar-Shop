<?php
	
	session_start();

	$title = $_POST['title'];

	unset($_SESSION['shopping-cart'][$title]);

	if(empty($_SESSION['shopping-cart']))
		unset($_SESSION['shopping-cart']);

	header("Location: ".$_SERVER['HTTP_REFERER']."");

?>