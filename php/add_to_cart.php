<?php
	@require_once("dbconnection.php");
	session_start();

	$title = $_POST['title'];
	$price = $_POST['price'];

	if(!isset($_SESSION['shopping-cart'])) {
		$_SESSION['shopping-cart'] = array();
	}

	$_SESSION['shopping-cart'][$title] = $price;

	header("Location: ".$_SERVER['HTTP_REFERER']."");
?>
