
<?php
	session_start();

	@require_once("php/dbconnection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

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
<br><br>
	<!-- <div class="big-wrapper">
			<div class="content">
				<p> Gabe's Musical World </p>
				<span> Music gives a soul to the universe, wings to the mind, flight to the imagination, and life to everything. </span>
			</div>
		</div> -->

		<div class="logo-wrapper">
			<img src="storage/media/images/guitarshopguitar.png">
		</div>

		<div class="content-wrapper" id="about">
			<p>ABOUT</p>

			<div class="content">	
				<div class="left-pg" data-aos-duration="1000" data-aos="fade-left">
					<img src="storage/media/images/piano.jpg">
				</div>
				<div class="right-pg text" data-aos-duration="1000" data-aos="fade-right">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</div>
			</div>
		</div>

		<div class="content-wrapper" id="top">
			<p>TOP PROdUCTS</p>

			<div class="content">
				<div class="left-pg" data-aos="fade-right" data-aos-duration="1000">
					<div class="product-card product-card-reverse">
						<div class="product-content">
							<div class="section-title">
								<p> Jackson X Series Kelly Guitar </p>
								<p> $1399.99 </p>
							</div>

							<div class="section-description">
								<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>

							<div class="add-to-card">
								<a href=""> BUY NOW! </a>
							</div>
						</div>

						<div class="product-image">
							<img src="storage/media/images/main-page-guitar.png">
						</div>
					</div>
				</div>

				<div class="right-pg" data-aos="fade-left" data-aos-duration="1000">
					<div class="product-card">
						<div class="product-content">
							<div class="section-title">
								<p> Shruk Microphone </p>
								<p> $149.99 </p>
							</div>

							<div class="section-description">
								<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>

							<div class="add-to-card">
								<a href=""> BUY NOW! </a>
							</div>
						</div>

						<div class="product-image">
							<img src="storage/media/images/main-page-mic.png">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="content-wrapper" id="contact">
			<p>CONTACT</p>
			
			<div class="content">
				<div class="left-pg" data-aos="fade-right" data-aos-duration="1000">
					<div class="contact">
						<p style="letter-spacing: 2px;font-size: 24px;"> Balascan Gabriel Danut </p>
						<p style="letter-spacing: 2px;font-size: 18px;"> Bulevardul George Coșbuc 39-49, București 050141 </p>
						<p style="letter-spacing: 2px;font-size: 18px;"> Telefon:  0771 325 678 </p>

					</div>
				</div>


				<div class="right-pg" data-aos="fade-left" data-aos-duration="1000">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2849.729776097952!2d26.084220115795013!3d44.418190510643655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff0b54881f97%3A0xae84d2f47f65a3a7!2sAcademia%20Tehnic%C4%83%20Militar%C4%83%20Ferdinand%20I!5e0!3m2!1sro!2sro!4v1619452172571!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>

		<div class="index-side-menu">
			<ul>
				<li> <a href="#about">About</a> </li>
				<li> <a href="#top">Top Products</a> </li>
				<li> <a href="#contact">Contact</a> </li>

			</ul>
			<div class="before-toggle">
				<p id="sidebar-navigate-toggle"> NAVIGATE </p>
			</div>
		</div>


		<footer>
			<div class="content">
				<div class="description">
					<h1> Guitar Shop </h1>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
				</div>

				<div class="quick-links">
					<ul>
						<li class="nav-item"> <a href="/index.php"> Home </a> </li>
						<li class="nav-item"> <a href="/listing.php?type=chitara"> Chitare </a> </li>
						<li class="nav-item"> <a href="/listing.php?type=tobe"> Tobe </a> </li>
						<li class="nav-item"> <a href="/listing.php?type=pianesiclape"> Piane & Clape </a> </li>
						<li class="nav-item"> <a href="/listing.php?type=orchestre"> Orchestre </a> </li>
						<li class="nav-item"> <a href="/listing.php?type=microfoane"> Microfoane </a> </li>
						<li class="nav-item"> <a href="/listing.php?type=accesorii"> Accesorii </a> </li>
					</ul>
				</div>

				<div class="social-media">
					<div class="title">
						<p>Social media</p>
					</div>

					<div class="links">
						<a href="https://www.facebook.com/skate.gaby" target="_blank">
							<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m75 512h167v-182h-60v-60h60v-75c0-41.355469 33.644531-75 75-75h75v60h-60c-16.542969 0-30 13.457031-30 30v60h87.292969l-10 60h-77.292969v182h135c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-105v-122h72.707031l20-120h-92.707031v-30h90v-120h-105c-57.898438 0-105 47.101562-105 105v45h-60v120h60v122h-137c-24.8125 0-45-20.1875-45-45zm0 0"/></svg>
						</a>

						<a href="https://www.instagram.com/gabee0701/" target="_blank">

							<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m75 512h362c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-362c-24.8125 0-45-20.1875-45-45zm0 0"/><path d="m256 391c74.4375 0 135-60.5625 135-135s-60.5625-135-135-135-135 60.5625-135 135 60.5625 135 135 135zm0-240c57.898438 0 105 47.101562 105 105s-47.101562 105-105 105-105-47.101562-105-105 47.101562-105 105-105zm0 0"/><path d="m406 151c24.8125 0 45-20.1875 45-45s-20.1875-45-45-45-45 20.1875-45 45 20.1875 45 45 45zm0-60c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0"/></svg>
						</a>

						<a href="twitter">

							<svg viewBox="0 -47 512.00004 512" xmlns="http://www.w3.org/2000/svg"><path d="m512 55.964844c-32.207031 1.484375-31.503906 1.363281-35.144531 1.667968l19.074219-54.472656s-59.539063 21.902344-74.632813 25.820313c-39.640625-35.628907-98.5625-37.203125-140.6875-11.3125-34.496094 21.207031-53.011719 57.625-46.835937 100.191406-67.136719-9.316406-123.703126-41.140625-168.363282-94.789063l-14.125-16.964843-10.554687 19.382812c-13.339844 24.492188-17.769531 52.496094-12.476563 78.851563 2.171875 10.8125 5.863282 21.125 10.976563 30.78125l-12.117188-4.695313-1.4375 20.246094c-1.457031 20.566406 5.390625 44.574219 18.320313 64.214844 3.640625 5.53125 8.328125 11.605469 14.269531 17.597656l-6.261719-.960937 7.640625 23.199218c10.042969 30.480469 30.902344 54.0625 57.972657 67.171875-27.035157 11.472657-48.875 18.792969-84.773438 30.601563l-32.84375 10.796875 30.335938 16.585937c11.566406 6.324219 52.4375 27.445313 92.820312 33.78125 89.765625 14.078125 190.832031 2.613282 258.871094-58.664062 57.308594-51.613282 76.113281-125.03125 72.207031-201.433594-.589844-11.566406 2.578125-22.605469 8.921875-31.078125 12.707031-16.964844 48.765625-66.40625 48.84375-66.519531zm-72.832031 48.550781c-10.535157 14.066406-15.8125 32.03125-14.867188 50.578125 3.941407 77.066406-17.027343 136.832031-62.328125 177.628906-52.917968 47.660156-138.273437 66.367188-234.171875 51.324219-17.367187-2.722656-35.316406-8.820313-50.171875-14.910156 30.097656-10.355469 53.339844-19.585938 90.875-37.351563l52.398438-24.800781-57.851563-3.703125c-27.710937-1.773438-50.785156-15.203125-64.96875-37.007812 7.53125-.4375 14.792969-1.65625 22.023438-3.671876l55.175781-15.367187-55.636719-13.625c-27.035156-6.621094-42.445312-22.796875-50.613281-35.203125-5.363281-8.152344-8.867188-16.503906-10.96875-24.203125 5.578125 1.496094 12.082031 2.5625 22.570312 3.601563l51.496094 5.09375-40.800781-31.828126c-29.398437-22.929687-41.179687-57.378906-32.542969-90.496093 91.75 95.164062 199.476563 88.011719 210.320313 90.527343-2.386719-23.183593-2.449219-23.238281-3.074219-25.445312-13.886719-49.089844 16.546875-74.015625 30.273438-82.453125 28.671874-17.621094 74.183593-20.277344 105.707031 8.753906 6.808593 6.265625 16.015625 8.730469 24.632812 6.589844 7.734375-1.921875 14.082031-3.957031 20.296875-6.171875l-12.9375 36.945312 16.515625.011719c-3.117187 4.179688-6.855469 9.183594-11.351562 15.183594zm0 0"/></svg>

						</a>

						<a href="wapp">

							<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m123.832031 475.464844c39.558594 23.804687 84.789063 36.351562 131.261719 36.351562 140.824219 0 256.90625-114.914062 256.90625-255.910156 0-140.832031-115.917969-255.90625-256.90625-255.90625-140.558594 0-254.910156 114.800781-254.910156 255.90625 0 47.09375 12.550781 92.667969 36.351562 132.257812l-36.535156 123.835938zm-93.65625-219.558594c0-124.570312 100.898438-225.917969 224.917969-225.917969 125.121094 0 226.917969 101.347657 226.917969 225.917969 0 124.574219-101.796875 225.917969-226.917969 225.917969-43.054688 0-84.894531-12.195313-120.984375-35.273438l-5.765625-3.683593-83.988281 24.78125 24.777343-83.992188-3.683593-5.761719c-23.078125-36.097656-35.273438-78.277343-35.273438-121.988281zm0 0"/><path d="m124.628906 208.753906c4.953125 26.011719 19.65625 76.042969 62.464844 118.851563 42.808594 42.808593 92.839844 57.515625 118.855469 62.46875 29.789062 5.671875 73.503906 6.527343 94.867187-14.835938l11.910156-11.910156c6.011719-6.011719 9.324219-14.007813 9.324219-22.511719s-3.3125-16.496094-9.324219-22.507812l-47.628906-47.628906c-6.015625-6.015626-14.007812-9.324219-22.511718-9.324219-8.503907 0-16.496094 3.308593-22.511719 9.324219l-11.90625 11.90625c-7.273438 7.273437-21.003907 7.304687-28.332031.089843l-47.507813-49.5c-.070313-.074219-.140625-.148437-.214844-.21875-7.285156-7.285156-7.285156-19.140625 0-26.425781l11.90625-11.90625c12.445313-12.445312 12.445313-32.582031 0-45.023438l-47.628906-47.628906c-12.410156-12.410156-32.605469-12.410156-45.019531 0l-11.90625 11.910156v-.003906c-17.050782 17.054688-22.734375 53.40625-14.835938 94.875zm36.042969-73.664062c12.5-12.214844 11.832031-12.449219 13.210937-12.449219.472657 0 .945313.179687 1.304688.539063 50.1875 50.457031 48.171875 47.492187 48.171875 48.9375 0 .503906-.183594.945312-.539063 1.304687l-11.910156 11.90625c-18.964844 18.964844-19.039062 49.664063-.121094 68.714844l47.535157 49.53125c.074219.070312.144531.144531.21875.21875 18.960937 18.960937 51.808593 19.023437 70.832031 0l11.90625-11.90625c.71875-.71875 1.890625-.71875 2.609375 0 50.1875 50.453125 48.171875 47.488281 48.171875 48.933593 0 .507813-.183594.945313-.539062 1.304688l-11.910157 11.90625c-8.160156 8.160156-34.152343 13.042969-68.054687 6.585938-22.625-4.3125-66.128906-17.085938-103.257813-54.214844-37.128906-37.128906-49.902343-80.632813-54.210937-103.257813-6.460938-33.902343-1.578125-59.898437 6.582031-68.054687zm0 0"/></svg>
						</a>
					</div>
				</div>
			</div>
		</footer>

<script>
  		AOS.init();
</script>
<script src="js/nav.js"></script>

</body>
</html>