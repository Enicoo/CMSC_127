<?php
	include 'connect.php'
?>
<html lang=en>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> HMMbois - School Library (Borrow books now!) </title> 
	<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
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
					<li><a href="demo.php">Search</a></li>
					<li><a href="#">Borrow books?</a></li>	
				</ul>
			</nav>
		</div>
	</section>

	<!--- First section --->
	<section class="section1">
		<div class="sec1container">
            <div class="thankyou">
                <h1> You have successfully borrowed a book! </h1>
                <h1> Thank you for using our Library website! </h1>
                <form action="demo.php">
                    <button class = "press">Return to main menu</button>
                </form>
                
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