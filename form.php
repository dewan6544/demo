<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css">
	</head>
<body>
	

    <h1 align='center'>Students Info</h1>
    <form action="insert.php" method="post">
	<span class="label"> Student Name: </span><input class="input_field" type="text" name="Student_Name"><br> <br>
	<span class="label"> Student ID: </span><input class="input_field" type="number" name="Student_ID"><br> <br>
	<span class="label"> Attendance Marks: </span>	<input class="input_field" type="number" name="Attendance_Marks" /> <br><br>
	<span class="label">Quiz Marks: </span>	 <input class="input_field" type="number" name="Quiz_Marks" /> <br><br>
	<span class="label">Final Examination Marks: </span> <input class="input_field" type="number" name="Final_Marks" /><br><br>
		<input class="btn" name="submit" type="submit" /> 
	</form> 


</body>
</html>