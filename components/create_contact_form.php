<?php

	echo "
		<form class='create_product_form' action='php/receive_contact.php' method='post'>
			<p>
				<input type='text' name='title'>
				<label> Title </label>
			</p>
			<p>
				<input type='text' name='issue'>
				<label> Issue </label>
			</p>
			<p>
				<textarea name='description' rows='10' cols='10'></textarea>
				<label> Description </label>
			</p>
			<p>
			<input type='hidden' name='user_id' value='".$_SESSION['login_user_id']."'>
			</p>
			<input type='submit' value='Send Email'><br>
		</form>
	";

?>