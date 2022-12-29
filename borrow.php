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
            <div class = "form-contents">
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
                            
                            echo "<option disabled selected class ='starters'> List of Courses </option> ";
                            while($row = mysqli_fetch_array($result)){
                                $value = '0';
                                switch ($row['c_course']) {
                                    case "nan":
                                    $value = 0.1;
                                    break;

                                    case "BS Math":
                                    $value = 1.1;
                                    break;
                                    
                                    case "BS Computer Science":
                                    $value = 1.2;
                                    break;

                                    case "BS Physics":
                                    $value = 1.3;
                                    break;

                                    case "BS Biologys":
                                    $value = 1.4;
                                    break;

                                    case "Master of Science in Mathematics":
                                    $value = 11.1;
                                    break;

                                    case "Master of Science in Conservation and Restoration":
                                    $value = 11.2;
                                    break;

                                    case "Master of Management":
                                    $value = 12.1;
                                    break;

                                    case "Master of Arts in Social and Development Studies":
                                    $value = 12.2;
                                    break;

                                    case "Master of Arts in Language and Literature":
                                    $value = 13.1;
                                    break;

                                    case "BS Management Economics":
                                    $value = 2.1;
                                    break;  

                                    case "BA Social Sciences (History)":
                                    $value = 2.2;
                                    break;  

                                    case "BA Social Sciences (Anthropology)":
                                    $value = 2.3;
                                    break;
                                    
                                    case "BA Social Sciences (Economics)":
                                    $value = 2.4;
                                    break;  
                                    
                                    case "BA Communication (Broadcasting)":
                                    $value = 3.1;
                                    break; 

                                    case "BA Communication (Speech Communication)":
                                    $value = 3.2;
                                    break; 

                                    case "BA Communication (Journalism)":
                                    $value = 3.3;
                                    break;
                                    
                                    case "BA Language and Literature":
                                    $value = 3.4;
                                    break;

                                    case "BA Fine Arts":
                                    $value = 3.5;
                                    break;
                                    
                                        
                                }
                                echo "<option value='$value'>". $row['c_course']. "</option>";
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
                            echo "<option disabled selected class ='starters'> List of books </option> ";
                            while($row = mysqli_fetch_array($result)){
                                $value = '0';
                                switch ($row['r_title']) {
                                    case "The Calculus 7":
                                    $value = 1;
                                    break;  
                                        
                                    case "Concepts of Programming Languages":
                                    $value = 2;
                                    break; 
        
                                    case "Sears and Zemanky`s University Physics with Modern":
                                    $value = 3;
                                    break; 
        
                                    case "Differential Equations and Linear Algebra":
                                    $value = 4;
                                    break;
                                        
                                    case "The Calculus 8":
                                    $value = 5;
                                    break;
                                }
                                

                                echo "<option value='$value'>". $row['r_title']. "</option>";
                            }

                            echo "</select><br>";
                        }
                        
                    ?>


                    
                    <button type = "submit" name="submit">Fill-up!</button>
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
</html><?php
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
            <div class = "form-contents">
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
                            
                            echo "<option disabled selected class ='starters'> List of Courses </option> ";
                            while($row = mysqli_fetch_array($result)){
                                $value = '0';
                                switch ($row['c_course']) {
                                    case "nan":
                                    $value = 0.1;
                                    break;

                                    case "BS Math":
                                    $value = 1.1;
                                    break;
                                    
                                    case "BS Computer Science":
                                    $value = 1.2;
                                    break;

                                    case "BS Physics":
                                    $value = 1.3;
                                    break;

                                    case "BS Biologys":
                                    $value = 1.4;
                                    break;

                                    case "Master of Science in Mathematics":
                                    $value = 11.1;
                                    break;

                                    case "Master of Science in Conservation and Restoration":
                                    $value = 11.2;
                                    break;

                                    case "Master of Management":
                                    $value = 12.1;
                                    break;

                                    case "Master of Arts in Social and Development Studies":
                                    $value = 12.2;
                                    break;

                                    case "Master of Arts in Language and Literature":
                                    $value = 13.1;
                                    break;

                                    case "BS Management Economics":
                                    $value = 2.1;
                                    break;  

                                    case "BA Social Sciences (History)":
                                    $value = 2.2;
                                    break;  

                                    case "BA Social Sciences (Anthropology)":
                                    $value = 2.3;
                                    break;
                                    
                                    case "BA Social Sciences (Economics)":
                                    $value = 2.4;
                                    break;  
                                    
                                    case "BA Communication (Broadcasting)":
                                    $value = 3.1;
                                    break; 

                                    case "BA Communication (Speech Communication)":
                                    $value = 3.2;
                                    break; 

                                    case "BA Communication (Journalism)":
                                    $value = 3.3;
                                    break;
                                    
                                    case "BA Language and Literature":
                                    $value = 3.4;
                                    break;

                                    case "BA Fine Arts":
                                    $value = 3.5;
                                    break;
                                    
                                        
                                }
                                echo "<option value='$value'>". $row['c_course']. "</option>";
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
                            echo "<option disabled selected class ='starters'> List of books </option> ";
                            while($row = mysqli_fetch_array($result)){
                                $value = '0';
                                switch ($row['r_title']) {
                                    case "The Calculus 7":
                                    $value = 1;
                                    break;  
                                        
                                    case "Concepts of Programming Languages":
                                    $value = 2;
                                    break; 
        
                                    case "Sears and Zemanky`s University Physics with Modern":
                                    $value = 3;
                                    break; 
        
                                    case "Differential Equations and Linear Algebra":
                                    $value = 4;
                                    break;
                                        
                                    case "The Calculus 8":
                                    $value = 5;
                                    break;
                                }
                                

                                echo "<option value='$value'>". $row['r_title']. "</option>";
                            }

                            echo "</select><br>";
                        }
                        
                    ?>


                    
                    <button type = "submit" name="submit">Fill-up!</button>
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
