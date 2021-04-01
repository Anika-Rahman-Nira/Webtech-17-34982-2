<? php

	mysql_connect("localhost","root","");
	mysql_select_db("admin");

	if (isset($_REQUEST["submit"]))
	{
		$user=$_REQUEST ["username"];
		$pass=$_REQUEST ["password"];
		$query =mysql_query("select * from login where username='$user' && password='$pass'");
		$rowcount=mysql_num_rows($query);
		if($rowcount==true)
		{
			echo "Welcome Ro Dashboard"
		}
		else
		{
			echo "Check user name and password";
		}

	}

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div style="border-style: solid ;">
	<header style="text-align: center;"><h1> Log In Form </h1></header> <br>

	<form method="post" action="dashboard.php">

		<div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit" name="submit">Login</button>   

		



	</form>
</div>
</body>
</html>