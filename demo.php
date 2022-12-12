<?php
	include 'connect.php'
?>
<html lang=en>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> HMMbois - School Library </title> 
	<link  rel="stylesheet" type="text/css" href="style.css" />

	<!-- Usage of Online Resources -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<!---- Header section ---->
	<section class="header">
		<div class="navbar">
				<div class = "logo">
					<img src="img/logo.png">
				</div>
			<nav>
				<ul>
					<li><a href="demo.php">Home</a></li>
					<li><a href="#btn">Search</a></li>
				</ul>
			</nav>
		</div>
	</section>

	<!--- First section --->
	<section class="section1">
		<div class="sec1container">
			<div class="row">
				<div class="col-2">
				<h1>Welcome to UP Baguio Library </h1>
				</div>
				<div class="col-2">
					<img src="img/sec1logo.png" class="sec1logo">
				</div>
				<div class="searchbtn" id= "btn">
					<form action = "search.php" method ="POST" >
						<input type="text" name = "search" placeholder="Do you want to find something?" class="searchbar">
						<button type ="submit" name ="submit-search" class="submitbtn"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
		</div>
	</section>

		<!-- search function-->
		<!-- Nothing special just codes to display a table [can be removed]-->
		
		<section class="footer">
			<div class="footer-logo">
				<img src="img/sec1logo.png">
			</div>
			<div class="footer-about">
				<p>© 2022 HMM School Library, All Rights Reserved</p>
			</div>
    	</section>
	</body>
</html>
