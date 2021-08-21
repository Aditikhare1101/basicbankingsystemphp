<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home_Page</title>
	<link rel="stylesheet" type="text/css" href="navbar_styling.css">
	<!-- <link rel="stylesheet" type="text/css" href="home_page.css"> -->
	<meta name="viewport" content="width=device-width, intial_scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script type="text/javascript">
		function searchit() {
			// body...
			<?php
			echo "<script>alert('searching')</script>"; 
			?>
		}
	</script>
	<style type="text/css">

p{
	font-size: 20px;
	color: whitesmoke;
	background-color: black;
	text-align: center;
	margin-bottom: 10px;
	margin-top: 140px;
	height: 25px;
	width: 100%;
	padding: 10px;

}

	</style>
</head>
<body>

		<nav>
			<img class = "logo" src="logo.png">
			<input type="checkbox" id="check">
			<label for="check">
				<i class="fas fa-bars" id="btn"></i>
				<i class="fas fa-times" id="cancel"></i>
			</label>
				<ul class="navbar">
					<li class="home"><a href="#" class="navigationbar"><i class="fa fa-university" aria-hidden="true" id="icon"></i></i>Home</a></li>
					<li><a href="https://www.thesparksfoundationsingapore.org/contact-us/" class="navigationbar"><i class="fa fa-phone-square" aria-hidden="true" id="icon"></i>Contact</a></li>
					<li><a href="https://www.thesparksfoundationsingapore.org/" class="navigationbar"><i class="fa fa-comments" aria-hidden="true" id="icon"></i>About</a></li>
					<li style="float: right;">
						
					  <div class="search-container">
					    <form method="post" action="sample.php">
					      <input id="ip1" name="ip1" type="text" placeholder="SEARCH CUSTOMER.." name="search">
					      <button id="ip2" type="submit" >SEARCH</button>

					    </form>
					  </div>

					</li>
				</ul>
		</nav>

		<div class="cards">
			<div class="image">
				<img src="images\view_customer.webp">
			</div>

			<div class="des">
				<a href="viewCustomer.php"><button>VIEW CUSTOMER</button></a>
			</div>
		</div>

		<div class="cards">
			<div class="image1">
				<img src="images\transcation.webp">
			</div>

			<div class="des">
				<a href="transaction.php"><button>TRANSACTION</button></a>
			</div>
		</div>
		

		<div class="cards">
			<div class="image2">
				<img src="images\history.webp">
			</div>

			<div class="des">
				<a href="transaction_history.php"><button>TRANSACTION HISTORY</button></a>
			</div>
		</div>

		  		<p >@2021 The Sparks Foundation Task "Basic Banking System" has been completed by ADITI KHARE.</p> 
</body>
</html>