<?php
	include 'connect.php'
?>
<html>
	<head>
		<link  rel="stylesheet" type="text/css" href="style.CSS" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

	<div class="searchbtn">
			<form action = "search.php" method ="POST" >
				<input type="text" name = "search" placeholder="Try searching" class="searchbar">
				<button type ="submit" name ="submit-search" class="submitbtn"><i class="fa fa-search"></i></button>
			</form>
	</div>



		<!-- Nothing special just codes to display a table [can be removed]-->
		<div id="table">
				<table border="1">
						<tr>
							<th>Personal ID</th>
							<th>Name</th>
							<th>Book</th>
							<th>Date of Release</th>
						</tr>
						
						<?php

							$sql1 = "SELECT personaldata.p_name, c_course, r_title, r_releaseDate FROM borrowerrecords INNER JOIN personaldata ON borrowerrecords.p_ID = personaldata.p_ID INNER JOIN coursedata ON personaldata.c_ID = coursedata.c_ID INNER JOIN resourcedata ON resourcedata.r_ID = borrowerrecords.r_ID";
							$result = $conn->query($sql1);

							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
								echo "<tr><td>" . 
								$row["p_name"]. "</td><td>" . 
								$row["c_course"]. "</td><td>" . 
								$row["r_title"]. "</td><td>" . 
								$row["r_releaseDate"]. "</td></tr>";
								}
								echo "</table>";
							} else {
								echo "0 results";
							}
							$conn->close();
						?>


		</div>
				


	</body>
</html>
