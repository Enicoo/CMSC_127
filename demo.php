<html>
	<body>

		<table border="1">
		<tr>
			<th>Personal ID</th>
			<th>Name</th>
			<th>Course Number</th>
		</tr>
	

	</body>

</html>





<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database127";
	

	//Ths is the connection
	$conn = new mysqli($servername, $username, $password, $dbname);



	//Check Connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		
	}
	echo "The db is connected successfully";

	$sql = "SELECT * from personaldata2";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
		  echo "<tr><td>" . $row["p_ID"]. "</td><td>" . $row["p_name"]. "</td><td>" . $row["c_ID"]. "</td></tr>";

		}
		echo "</table>";
	  } else {
		echo "0 results";
	  }
	  $conn->close();

?>

