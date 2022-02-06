<?php
	@require_once("dbconnection.php");

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$REGISTER_QUERRY = "
		INSERT INTO USERS(username, password, email) VALUES(
			'$username', '$password', '$email'
		)
	";

	mysqli_query($conn, $REGISTER_QUERRY)or die("Data is incorect");

	header("Location: /index.php");
?>
