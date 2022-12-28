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
					<li><a href="borrow.php">Borrow books?</a></li>	
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
						<div class="searchbarcontainer">
							<input type="text" name = "search" placeholder="Do you want to find something?" class="searchbar">
							<button type ="submit" name ="submit-search" class="submitbtn"><i class="fa fa-search"></i></button>
						</div>
						<div class="searchfilter">
							<div class="col-2-filter">
								<label class="filter-button-container">Borrower Records
  									<input type="radio" checked="checked" name="filterbutton" value="borrow">
  									<span class="checkmark"></span>
								</label>
							</div>
							<div class="col-2-filter">
							<label class="filter-button-container">Book Records
  									<input type="radio" name="filterbutton" value="book">
  									<span class="checkmark"></span>
								</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
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
