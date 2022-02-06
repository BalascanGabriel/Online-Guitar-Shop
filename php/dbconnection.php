<?php
	define("DB_USERNAME", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "guitarshop");
	define("DB_HOST", "localhost");

	$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME)or die("couldn't connect");	
?>