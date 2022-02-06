<?php
	session_start();

	@require_once("php/dbconnection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>LISTING</title>

	<link rel="stylesheet" href="style/nav.css">
	<link rel="stylesheet" href="style/product_card.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

	<?php 
		@include('components/navbar.php'); 
	?>
		<div class="wrapper">
			<h1 style="text-transform: uppercase; color: #fff;"> <?php
			if($_GET['type'] == 'chitara' ) echo 'CHITARE' ;
			elseif($_GET['type'] == 'pianesiclape') echo 'PIANE & CLAPE';
			else 
			 echo $_GET['type'] 

			 ?> </h1>
		 </div>
	<div class="container">
		<div class="product-container">
			<?php @include('php/show_products.php'); ?>
		</div>
	</div>

<script src="js/nav.js"></script>

</body>
</html>