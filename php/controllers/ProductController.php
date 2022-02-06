<?php

class ProductController
{

	public $id;
	public $title;
	public $type;
	public $price;
	public $image_url;
	public $description;
	public $user_id;
	public $user_data;

	protected $conn;

	public function __construct($conn, $args)
	{
		$this->conn = $conn;

		$this->id          = $args['id'];
		$this->title       = $args['title'];
		$this->type        = $args['type'];
		$this->price       = $args['price'];
		$this->image_url   = $args['image_url'];
		$this->description = $args['description'];
		$this->user_id     = $args['user_id'];

		$this->user_data = $this->matchUserName($this->user_id);
	}

	public function matchUserName($id)
	{
		if(!$id) return false;

		$MATCH_USER_QUERY = "
			SELECT * FROM USERS WHERE 'id' = $id
		";

		$result = mysqli_query($this->conn, $MATCH_USER_QUERY);

		$count = mysqli_num_rows($result);

		if ($count == 0) {
			$_SESSION['product_error'] = "The user that added this product no longer exists :(";
			return 'error';
		} else {
			return [ "userData" => mysqli_fetch_assoc($table) ];

		}
	}

	public function showProduct() {
		echo "
					<div class='card'>
						<span></span>
						<div class='content'>
							<div class='image-content'>
								<img class='card-image' src=".$this->image_url."></img>
							</div>
							<div class='text-content'>
								<h4>".$this->title."</h4>
								<p class='card-price'>".$this->price."</p>
								<p class='card-description'>".$this->description."</p>
								<form action='php/add_to_cart.php' method='post'>
									<input type='hidden' name='title' value=".$this->title.">
									<input type='hidden' name='price' value=".$this->price.">
									<input type='submit' value='Add to cart'>
								</form>
							</div>
						</div>
					</div>
				";
	}

}


?>