<?php

	echo "
		<form class='create_product_form' action='php/modify_profile.php' method='post'>
			<p>
				<input type='text' name='username'>
				<label> Username </label>
			</p>
			<p>
				<input type='password' name='password1'>
				<label> Old Password </label>
			</p>
			<p>
				<input type='password' name='password1'>
				<label> New Password </label>
			</p>
			<p>
				<input type='password' name='password1'>
				<label> New Password Confirmation </label>
			</p>
			<p>
			<input type='hidden' name='user_id' value='".$_SESSION['login_user_id']."'>
			</p>
			<input type='submit' value='Update Information'><br>
		</form>
	";

?>