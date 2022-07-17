<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css">
	</head>
		
<body>
<h1 align='center'>Students Marks</h1>
	<?php 
		$servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "StudentMarks"; 
		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
		// Check connection 
		if (!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 
		$sql = "SELECT * FROM Marks"; 
		$result = mysqli_query($conn, $sql); 
		echo "<table border='1'>"; 
		echo "<tr>"; 
		echo "<th>Student ID</th><th>Student Name</th><th>Attendance Marks</th><th>Quiz Marks</th><th>Final Marks</th>"; 
		echo "</tr>"; 

		if (mysqli_num_rows($result) > 0) 
		{ 
			 // output data of each row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
				 echo "<tr>"; 
				 echo "<td>" . $row['StudentID'] . "</td>"; 
				 echo "<td>" . $row['StudentName'] . "</td>";  
                 echo "<td>" . $row['AttendanceMarks'] . "</td>"; 
				 echo "<td>" . $row['QuizMarks'] . "</td>"; 
                 echo "<td>" . $row['FinalMarks'] . "</td>"; 
				 echo "</tr>"; 
			 } 
		} 
		else 
		{ 
			echo "0 results"; 
		} 
		echo "</table>"; 
		mysqli_close($conn); 
	?>

</body>
</html>