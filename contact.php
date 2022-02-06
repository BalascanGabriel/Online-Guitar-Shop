
<?php
	session_start();

	@require_once("php/dbconnection.php");

	if(isset($_SESSION['loggedIn']) && $_SESSION['login_user'] != 'admin')
		header("Location: index.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" href="style/nav.css">
	<link rel="stylesheet" href="style/login.css">
	<link rel="stylesheet" href="style/admin.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>



<?php 
	@include('components/navbar.php'); 

	if(!isset($_SESSION['loggedIn'])):?>
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

	<?php endif; ?>

<?php
	if(isset($_SESSION['login_error'])) {
		echo "<p>".$_SESSION['login_error']."</p>";
		$_SESSION['login_error'] = null;
	}
?>
<br><br>
<?php if(isset($_SESSION['loggedIn']) && $_SESSION['login_user'] == 'admin') : ?>
	<?php @include('components/create_contact_form.php'); ?>
<?php endif; ?>

<script src="js/nav.js"/>

</body>
</html>