<?php
	@require_once("dbconnection.php");

	$title = $_POST['title'];
	$issue = $_POST['issue'];
	$description = $_POST['description'];
	$user_id = $_POST['user_id'];

	$CREATE_PRODUCT_QUERRY = "
		INSERT INTO MESSAGES(title, issue, description, user_id) VALUES(
			'$title',
			'$issue',
			'$description',
			 $user_id
		)
		
	";

	mysqli_query($conn, $CREATE_PRODUCT_QUERRY)or die("Data is incorect");

	header("Location: /contact.php");
?>
