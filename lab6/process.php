<?php 
	
	require_once ('connection.php');

	if (isset($_POST['save']))
	{
		$name = mysqli_real_escape_string($con,$_POST['name']);
		$id = mysqli_real_escape_string($con,$_POST['id']);
		$dob = mysqli_real_escape_string($con,$_POST['dob']);
	        $password= mysqli_real_escape_string($con,$_POST['password']);

		

		if (empty($name) || empty($id) || empty($dob) || empty($password) )
		{
			echo "Fill Those empty Blanks";
		}
		else
		{
			$sql= "INSERT INTO `registration`(username, id, dob,password) VALUES ('$name','$id','$dob','$password')";
			$result = mysqli_query($con,$sql);

			if ($result)
			{
				echo "Save sucesfully into database";
			}
			else
			{
				echo "There is a problem";
			}
		}
	}


 ?>