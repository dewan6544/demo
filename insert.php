<!DOCTYPE html>
<html>
<body>
	<?php 
		$Servername = "localhost"; 
		$Username = "root"; 
		$Password = "";
		$Databasename = "StudentMarks"; 
		
		// Create connection 
		$conn = mysqli_connect($Servername, $Username, $Password, $Databasename); 
		// Check connection 
		if(!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 

		$sql = "INSERT INTO marks (StudentID, StudentName, AttendanceMarks, QuizMarks, FinalMarks) 
        VALUES ('$_POST[Student_ID]', '$_POST[Student_Name]', '$_POST[Attendance_Marks]', '$_POST[Quiz_Marks]', '$_POST[Final_Marks]')"; 
		
        if (mysqli_query($conn, $sql)) 
		{ 
			echo "New record created successfully"; 
		} 
		else 
		{ 
			echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
		} 
		mysqli_close($conn); 
	?>
</body>
</html>