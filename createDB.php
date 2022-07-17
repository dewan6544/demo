<!DOCTYPE html>
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
		
        // Create connection 
		$DBconnection = mysqli_connect($Servername, $Username, $Password); 
		// Check connection 
		if (!$DBconnection) { 
			die("Connection failed: " . mysqli_connect_error()); 
		} 
		
        // Create database 
		$SQL = "CREATE DATABASE StudentMarks"; 
		if (mysqli_query($DBconnection, $SQL)) 
		{ 
			echo "Database created successfully"; 
		} 
		else 
		{ 
			echo "Error creating database: " . mysqli_error($DBconnection); 
		} 
		mysqli_close($DBconnection); 
        
	?>
</body>
</html>