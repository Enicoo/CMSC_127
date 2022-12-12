<?php
include 'connect.php'
?>

<html>
<head>
        <link  rel="stylesheet" type="text/css" href="style.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="header">
		<div class="navbar">
				<div class = "logo">
					<img src="img/logo.png">
				</div>
			<nav>
				<ul>
					<li><a href="demo.php">Home</a></li>
					<li><a href="demo.php">Search</a></li>
				</ul>
			</nav>
		</div>
	</section>
    <section class="body">
        <div class="lalagyan">
            <div class="search-result">    
                <?php
                    //Borrow Query
                    if (isset($_POST['submit-search']) && ($_POST['filterbutton'] == 'borrow')) {
                        $search = mysqli_real_escape_string($conn, $_POST['search']);
                        $sql = "SELECT personaldata.p_name, c_course, r_title, r_releaseDate 
                        FROM borrowerrecords 
                        INNER JOIN personaldata ON borrowerrecords.p_ID = personaldata.p_ID 
                        INNER JOIN coursedata ON personaldata.c_ID = coursedata.c_ID 
                        INNER JOIN resourcedata ON resourcedata.r_ID = borrowerrecords.r_ID 
                        WHERE personaldata.p_name LIKE '%$search%' 
                        OR c_course LIKE '%$search%' 
                        OR r_title LIKE '%$search%' 
                        OR r_releaseDate LIKE '$search'";
                        
                        $result = mysqli_query($conn, $sql);
                        $queryResult = mysqli_num_rows($result);
                        if ($queryResult == 1) {
                            echo "<p class =\"par\">There query returned " .$queryResult. " result! <br><br></p>";
                        } elseif ($queryResult > 1) {
                            echo "<p class =\"par\">There query returned " .$queryResult. " results! <br><br></p>";
                        } else {
                            echo "<p class =\"par\">The query is neither invalid or empty.   <br><br></p>";
                        }   
                    }

                    //Book Query
                    else if (isset($_POST['submit-search']) && ($_POST['filterbutton'] == 'book')) {
                        $search = mysqli_real_escape_string($conn, $_POST['search']);
                        $sql = "SELECT r_title, r_author, r_publisher, r_year, r_subject
                        FROM resourcedata 
                        WHERE r_title LIKE '%$search%'"; 
                        
                        $result = mysqli_query($conn, $sql);
                        $queryResult = mysqli_num_rows($result);
                        if ($queryResult == 1) {
                            echo "<p class =\"par\">There query returned " .$queryResult. " result! <br><br></p>";
                        } elseif ($queryResult > 1) {
                            echo "<p class =\"par\">There query returned " .$queryResult. " results! <br><br></p>";
                        } else {
                            echo "<p class =\"par\">The query is neither invalid or empty.   <br><br></p>";
                        }   
                    }
                ?>
            </div>
            <?php
                //Borrow Query
                if (isset($_POST['submit-search']) && ($_POST['filterbutton'] == 'borrow')) {
                    echo "<table class=please>
                    <tr>
                        <th>Personal ID</th>
                        <th>Name</th>
                        <th>Book</th>
                        <th>Date of Release</th>
                    </tr>";
                    $search = mysqli_real_escape_string($conn, $_POST['search']);
                    $sql = "SELECT personaldata.p_name, c_course, r_title, r_releaseDate 
                    FROM borrowerrecords 
                    INNER JOIN personaldata ON borrowerrecords.p_ID = personaldata.p_ID 
                    INNER JOIN coursedata ON personaldata.c_ID = coursedata.c_ID 
                    INNER JOIN resourcedata ON resourcedata.r_ID = borrowerrecords.r_ID 
                    WHERE personaldata.p_name LIKE '%$search%' 
                    OR c_course LIKE '%$search%' 
                    OR r_title LIKE '%$search%' 
                    OR r_releaseDate LIKE '$search'";
                    if ($queryResult > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><td>"
                            .$row['p_name']  ."</td><td>"
                            .$row['c_course'] ."</td><td>"
                            .$row['r_title'] ."</td><td>"
                            .$row['r_releaseDate'] ."</td></tr>";
                        }
                    }
                    echo "</table>";
                }
                

                //Book Query
                else if (isset($_POST['submit-search']) && ($_POST['filterbutton'] == 'book')) {
                    echo "<table class=please>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>Subject</th>
                    </tr>";
                    $search = mysqli_real_escape_string($conn, $_POST['search']);
                    $sql = "SELECT r_title, r_author, r_publisher, r_year, r_subject
                    FROM resourcedata 
                    WHERE r_title LIKE '%$search%'"; 
                    if ($queryResult > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><td>"
                            .$row['r_title']  ."</td><td>"
                            .$row['r_author'] ."</td><td>"
                            .$row['r_publisher'] ."</td><td>"
                            .$row['r_year'] ."</td><td>"
                            .$row['r_subject'] ."</td></tr>";
                        }
                    }
                    echo "</table>";
                }
            ?>
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
