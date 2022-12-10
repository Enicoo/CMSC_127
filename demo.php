<?php
	include 'connect.php'
?>
<html>
	<body>

		<!-- search function-->
		<form action = "search.php" method ="POST">
			<input type="text" name = "search" placeholder="Try searching" >
			<button type ="submit" name ="submit-search">Enter</button>
		</form>



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
