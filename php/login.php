<?php
	session_start();

	@require_once("dbconnection.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	$LOGIN_QUERRY = "
		SELECT id, username, password FROM USERS WHERE
		username = '$username' AND
		password = '$password'
	";

	$result = mysqli_query($conn, $LOGIN_QUERRY)or die("Couldn't find this username");

	$table = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$count = mysqli_num_rows($result);

	if($count == 1) {
		$_SESSION['login_user'] = $table['username'];
		$_SESSION['login_user_id'] = $table['id'];
		$_SESSION['loggedIn'] = true;
	} else {
		$error = "Username of password incorrect";
		$_SESSION['login_error'] = $error;
	}

	header("Location: /index.php");
?>
