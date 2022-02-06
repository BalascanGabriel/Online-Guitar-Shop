<?php
	@require_once("dbconnection.php");

	$title = $_POST['title'];
	$type = $_POST['type'];
	$price = $_POST['price'];
	$image_url = $_POST['image_url'];
	$description = $_POST['description'];
	$user_id = $_POST['user_id'];

	$CREATE_PRODUCT_QUERRY = "
		INSERT INTO PRODUCTS(title, type, price, image_url, description, user_id) VALUES(
			'$title',
			'$type',
			$price,
			'$image_url',
			'$description',
			$user_id
		)
		
	";

	mysqli_query($conn, $CREATE_PRODUCT_QUERRY)or die("Data is incorect");

	header("Location: /index.php");
?>
