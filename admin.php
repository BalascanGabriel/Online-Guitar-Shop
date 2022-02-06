
<?php
	session_start();

	@require_once("php/dbconnection.php");

	if(isset($_SESSION['loggedIn']) && $_SESSION['login_user'] != 'admin')
		header("Location: index.php");

	$MESSAGES_QUERY = "
		SELECT * FROM messages WHERE response IS NULL
	";

	$results = mysqli_query($conn, $MESSAGES_QUERY)or die("Couldn't find any messages");
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
	<?php @include('components/create_product_form.php'); ?>

	<div class="admin_email_sidebar">
		<div class="email_trigger">
			<a id="trigger_email">
				<svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
					<path d="M467,61H45C20.218,61,0,81.196,0,106v300c0,24.72,20.128,45,45,45h422c24.72,0,45-20.128,45-45V106    C512,81.28,491.872,61,467,61z M460.786,91L256.954,294.833L51.359,91H460.786z M30,399.788V112.069l144.479,143.24L30,399.788z     M51.213,421l144.57-144.57l50.657,50.222c5.864,5.814,15.327,5.795,21.167-0.046L317,277.213L460.787,421H51.213z M482,399.787    L338.213,256L482,112.212V399.787z"/>
				</svg>
			</a>
		</div>

		<div class="content">
			<?php 
				if($results) 
					while($row = mysqli_fetch_assoc($results)) {
						echo "
						<div class='email_card'>
				<div class='email_header'>
					<p> ".$row['title']." </p>
				</div>

				<div class='email_body'>
					<p> ".$row['description']." </p>
				</div>
			</div>
						";
					 
					}
				?>
			<!-- <div class="email_card">
				<div class="email_header">
					<p> Test Header </p>
				</div>

				<div class="email_body">
					<p> Test Body </p>
				</div>
			</div>

			<div class="email_card">
				<div class="email_header">
					<p> Test Header </p>
				</div>

				<div class="email_body">
					<p> Test Body </p>
				</div>
			 -->
			<!-- </div> -->
		</div>
	</div>
<?php endif; ?>

<script src="js/nav.js"></script>
<script>
	$("#trigger_email").click(function(){
		$(".admin_email_sidebar").toggleClass("active_email");
	});
</script>
</body>
</html>