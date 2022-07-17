<html>
<head>
	<title>	
	</title>
</head>
<body>

	<?php 
		$Servername = "localhost"; 
		$Username = "root"; 
		$Password = "";
		$DBname = "StudentMarks"; 
		// Create connection 
		$conn = mysqli_connect($Servername, $Username, $Password, $DBname); 
		// Check connection 
		if (!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 

		// sql to create table 
		$Tablesql = "CREATE TABLE Marks 
		( 
            StudentID int,
			StudentName varchar(30), 
			AttendanceMarks int, 
			QuizMarks int,
            FinalMarks int
		)"; 

		if (mysqli_query($conn, $Tablesql)) 
		{ 
			echo "Table person created successfully"; 
		} 
		else 
		{ 
			echo "Error creating table: " . mysqli_error($conn); 
		} 
		mysqli_close($conn); 
	?>

</body>
</html>