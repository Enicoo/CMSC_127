<?php
	include 'connect.php'
?>
<html>
	<head>
		<link  rel="stylesheet" type="text/css" href="style.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<div class="navbar">
				<div class = "logo">
					<a href="#">Library Database</a>
				</div>
		
			</div>
		

	</head>
	<body>

	<div class="searchbtn">
			<form action = "search.php" method ="POST" >
				<input type="text" name = "search" placeholder="Do you want to find something?" class="searchbar">
				<button type ="submit" name ="submit-search" class="submitbtn"><i class="fa fa-search"></i></button>
			</form>
	</div>
			<!-- search function-->
			



		<!-- Nothing special just codes to display a table [can be removed]-->
		<div class="table">
				<table border="1">
						<tr>
							<th>Personal ID</th>
							<th>Name</th>
							<th>Course Number</th>
						</tr>
						
						<?php

							$sql1 = "SELECT * from personaldata";
							$result = $conn->query($sql1);

							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
								echo "<tr><td>" . 
								$row["p_ID"]. "</td><td>" . 
								$row["p_name"]. "</td><td>" . 
								$row["c_ID"]. "</td></tr>";

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

	</body>
</html>
