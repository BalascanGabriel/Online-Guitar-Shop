<?php

	echo "
		<form class='create_product_form' action='php/create_product.php' method='post'>
			<p>
				<input type='text' name='title'>
				<label> Title </label>
			</p>
			<p>
			<select name='type'>
				<option value=''></option>
				<option value='CHITARA'>CHITARA</option>
				<option value='TOBE'>TOBE</option>
				<option value='PIANSICLAPA'>PIAN & CLAPA</option>
				<option value='ORCHESTRA'>ORCHESTRA</option>
				<option value='MICROFOANE'>MICROFOANE</option>
				<option value='ACCESORII'>ACCESORII</option>
			</select>
			<label> Type </label>
			</p>
			<p>
			<input type='text' name='price'>
			<label> Price </label>
			</p>
			<p>
				<input type='text' name='image_url''>
				<label> Image URL </label>
			</p>
			<p>
				<textarea name='description' rows='10' cols='10'></textarea>
				<label> Description </label>
			</p>
			<p>
			<input type='hidden' name='user_id' value='".$_SESSION['login_user_id']."'>
			</p>
			<input type='submit' value='Create this new wonderfull product'><br>
		</form>
	";

?>