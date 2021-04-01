<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="add-student-form">

		<form method="POST" action="process.php" onsubmit=" return valid();">

			<input type="text" name="name" placeholder="Enter Your Name " required> <br>
			<input type="text" name="id" placeholder="Enter Your ID " required> <br>
			<input type="date" name="dob" placeholder="Enter Your Birth Date" required> <br>
			<input type="text" name="password" placeholder="Enter Your password" required> <br>
			
			<div class="btn">
			<input type="submit" name="save" value="Add Student">
			</div>

			



		</form>
		









	</div>
	<script src="valid.js"></script> 

</body>
</html>