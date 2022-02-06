<?php
	session_start();

	@require_once("dbconnection.php");

	@include('controllers/ProductController.php');

	$type = $_GET['type'];

	$PRODUCT_QUERY = "
		SELECT * FROM PRODUCTS WHERE type='$type';
	";

	$result = mysqli_query($conn, $PRODUCT_QUERY)or die("There are no products");

	echo "<div class='product-container'>";
		if($result) {
			while($row = mysqli_fetch_assoc($result)) {
				(new ProductController($conn, $row))->showProduct();
			}
		}


	echo "</div>"

?>