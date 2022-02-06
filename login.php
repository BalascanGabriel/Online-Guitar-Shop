<?php
	session_start();

	if(isset($_SESSION['loggedIn'])) {
		header("Location: /index.php");
	}

	if(isset($_SESSION['login_error'])) {
		echo "<p>".$_SESSION['login_error']."</p>";
		$_SESSION['login_error'] = null;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login/register</title>

	<link rel="stylesheet" href="style/nav.css">
	<link rel="stylesheet" href="style/login.css">
	<link rel="stylesheet" href="style/big_wrapper.css">
	<link rel="stylesheet" href="style/product.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>

	<?php 
	@include('components/navbar.php'); 
	?>
	<div class="register-container">
			<div class="tabbed-login">
				<p>
					<a onclick="$('#tab1').show();$('#tab2').hide()"> Login </a>
					<a onclick="$('#tab2').show();$('#tab1').hide()"> Register </a>
				</p>

				<div class="tab" id="tab1">
					<?php @include('components/login_form.php'); ?>
				</div>

				<div class="tab" id="tab2" style="display: none;">
					<?php @include('components/register_form.php'); ?>
				</div>
			</div>
		</div>
</body>
</html>