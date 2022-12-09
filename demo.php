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
							<th>Course Number</th>
						</tr>
						
						<?php

							$sql1 = "SELECT * from personaldata2";
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
