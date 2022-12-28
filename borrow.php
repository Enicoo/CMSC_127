<?php
	include 'connect.php'
?>
<html lang=en>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> HMMbois - School Library (Borrow books now!) </title> 
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
					<li><a href="demo.php">Search</a></li>
					<li><a href="#">Borrow books?</a></li>	
				</ul>
			</nav>
		</div>
	</section>

	<!--- First section --->
	<section class="section1">
		<div class="sec1container">
			<h1>Enter the required data below</h1>
            <form class = "input-form" method = "POST" action="transfer.php">
                <label for="Name" class="label">Student-ID</label><br>
				<input  class="answer" type="text" class="input-bar" name="studentid" placeholder="ex. 2020*****" required><br>
            
                <label for="Name" class="label">Full Name</label><br>
				<input  class="answer" type="text" class="input-bar" name="name" placeholder="Enter your name here" required><br>

                <label for="Course" class="label">Course</label><br>
                <select required name = "course">
                <?php
                    $sql = "SELECT * FROM coursedata";
                    $result = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result) > 0) {
                        
                        echo "<option disabled selected class> List of Courses </option> ";
                        while($row = mysqli_fetch_array($result)){
                            
                            echo "<option value='$sql'>". $row['c_course']. "</option>";
                        }

                        echo "</select><br>";
                    }
                    
                ?>
    

                <label for="bday" class="label">Birthday</label><br>
                <input  class="answer" type="date" class="input-bar" name="bday" placeholder="Enter your birthday here" required><br>

                <label for="number" class="label">Contact Number</label><br>
                <input  class="answer" type="answer" class="input-bar" name="number" placeholder="ex. 09*********" required><br>

                <label for="Gender" class="label">Gender</label><br>
                <select placeholder ="" required class = "input-select" name="gender">
                    <option value="" disabled selected class="starters">Enter your gender here</option>
                    <option value = "Male">Male</option>
                    <option value = "Female">Female</option>
                    <option value = "LGBTQIA+">LGBTQIA+</option>
                </select><br>

                <label for="usergroup" class="label">User Group</label><br>
				<select placeholder ="" required class = "input-select" name="usergroup">
                    <option value="" disabled selected class="starters">What is your usergroup</option>
                    <option value = "Undergraduate">Undergraduate</option>
                    <option value = "Graduate">Graduate</option>
                    <option value = "Staff">Staff</option>
                </select><br>

                <label for="email" class="label">Email</label><br>
                <input  class="answer" type="answer" id="input-bar" name="email" placeholder="Enter your email here" required><br>


                <label for="book" class="label">What book would you like to borrow?</label><br>
                <?php
                    $sql = "SELECT r_title FROM resourcedata";
                    $result = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<select required name= 'book'>";
                        echo "<option disabled selected class> List of books </option> ";
                        while($row = mysqli_fetch_array($result)){
                            
                            echo "<option value='$r_ID'>". $row['r_title']. "</option>";
                        }

                        echo "</select><br>";
                    }
                    
                ?>


                
                <button type = "submit" name="submit">Fill-up!</button>
            </form>
			
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