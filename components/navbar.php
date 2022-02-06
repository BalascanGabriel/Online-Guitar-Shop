<?php

	echo "
		<nav class='custom-navigation'>
			<h2> Guitar Shop </h2>
			<ul class='nav-list'>
				<li class='nav-item " . ($_SERVER['REQUEST_URI'] == '/index.php' ? 'active' : '') . "'> <a href='/index.php'> Home </a> </li>
				<li class='nav-item " . ($_SERVER['REQUEST_URI'] == '/listing.php?type=chitara' ? 'active' : '') . "'> <a href='/listing.php?type=chitara'> CHITARE </a> </li>
				<li class='nav-item " . ($_SERVER['REQUEST_URI'] == '/listing.php?type=tobe' ? 'active' : '') . "'> <a href='/listing.php?type=tobe'> TOBE </a> </li>
				<li class='nav-item " . ($_SERVER['REQUEST_URI'] == '/listing.php?type=pianesiclape' ? 'active' : '') . "'> <a href='/listing.php?type=piansiclapa'> PIANE & CLAPE </a> </li>
				<li class='nav-item " . ($_SERVER['REQUEST_URI'] == '/listing.php?type=orchestre' ? 'active' : '') . "'> <a href='/listing.php?type=orchestra'> ORCHESTRE </a> </li>
				<li class='nav-item " . ($_SERVER['REQUEST_URI'] == '/listing.php?type=microfoane' ? 'active' : '') . "'> <a href='/listing.php?type=microfoane'> MICROFOANE </a> </li>
				<li class='nav-item " . ($_SERVER['REQUEST_URI'] == '/listing.php?type=accesorii' ? 'active' : '') . "'> <a href='/listing.php?type=accesorii'> ACCESORII </a> </li>
				<li class='nav-item " . ($_SERVER['REQUEST_URI'] == '/contact.php' ? 'active' : '') . "'> <a href='/contact.php'> Contact </a> </li>
		";
				if(isset($_SESSION['loggedIn']) && $_SESSION['login_user'] == 'admin')
					echo	"<li class='nav-item " . ($_SERVER['REQUEST_URI'] == '/admin.php' ? 'active' : '') . "'> <a href='/admin.php'> Admin </a> </li>";
	echo "</ul>
	";


		 	echo "<ul class='nav-admin'>
		 		<li class='nav-item'>
		 			<input type='checkbox' class='enable-shopping-cart' id='enable-shopping-cart' style='display: none;'>
		 			<label for='enable-shopping-cart'>	<img src='storage/media/images/shopping-cart.png' class='shopping-cart'> </label>

		 			<div class='shopping-cart-body'>
		 			";
		 				if(isset($_SESSION['shopping-cart'])) {
		 					$total = 0;
		 					foreach($_SESSION['shopping-cart'] as $s) {
		 						$total+=$s;
		 					}
		 					foreach($_SESSION['shopping-cart'] as $title => $price) {
		 						echo "
		 							<p> Item: ". $title ."  </p>
		 							<p> Price: ". $price ."  </p>
		 							<p> <form action='/php/delete_from_cart.php' method='post'> <input type='hidden' name='title' value='".$title."'> <input type='submit' value='Delete' style='margin-left: 15px; color: #fff;'> </form> </p>
		 						";
		 					}
		 					echo "
		 						<span> Total: " . $total ."  </span>
		 					";
		 				}
		 			echo "
		 			</div>
		 		</li>

		 	";
	if (isset($_SESSION['loggedIn'])) {
		echo "
		 		<li class='nav-item " . ($_SERVER['REQUEST_URI'] == '/profile.php' ? 'active' : '') . "'> <a href='/profile.php'> Welcome, ".$_SESSION['login_user']." </a> </li>
		";

		@include('components/logout_form.php');
		echo "</ul>";
	} else {
		echo "
			<ul class='nav-admin'>
				<li class='nav-item " . ($_SERVER['REQUEST_URI'] == '/login.php' ? 'active' : '') . "'> <a href='/login.php'> Login / Register </a> </li>
			</ul>
		";
	}	

	echo "
		</nav>
	";


?>