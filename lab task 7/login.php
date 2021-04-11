<?php 
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$has_error=False;

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		If (empty($_POST["uname"]))
		{
				$err_uname="*Username Required";
				$has_error=True;

			}
			elseif (strlen($_POST["uname"])<6)
			{
				$err_uname="*Username must contain at least 6 characters ";
				$has_error=True;
			}
			elseif (strpos($_POST["uname"],"  "))
			{
				$err_uname="*space is not allowed";
				$has_error=True;
			}
			
			else
			{
				$uname=htmlspecialchars($_POST["uname"]);

			}
			if(empty($_POST["pass"]))
			 {
				 $err_pass="*Password is Required";
				 $has_error=True;
			 }
			 elseif (strlen($_POST["pass"])<8) 
			 {
				$err_pass=["*Password should be more than 8 character"];
				$has_error=True;
			 }
			 
			 elseif(!!strpos($_POST["pass"],"[0-9]"))
			 {
				 $err_pass="*Password must contain Numeric values";
				 $has_error=True;
			 }
			 elseif(!!ctype_upper($_POST["pass"]))
			 {
				 $err_pass="*Password must contain UpperCase values";
				 $has_error=True;
			 }
			 elseif(!!ctype_lower($_POST["pass"]))
			 {
				 $err_pass="*Password must contain LowerCase values";
				 $has_error=True;
			 }

			 elseif(strpos($_POST["pass"]," "))
			 {
				 $err_pass="*Password must not contain spaces";
				 $has_error=True;
			 }
			 else
			 {
				 $pass=htmlspecialchars($_POST["pass"]);
			}

	}

 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		

		<div class="frmdesign">
		<label style="color: white;">Username</label> <br>
		<input type="text" name="uname" value="<?php echo $uname ; ?>" placeholder="Enter Your Username" class="inputf" > <br> <br>
		<span style="color: red;"><?php echo $err_uname;?></span>

		<label style="color: white;">Password</label> <br>
		<input type="password" name="pass" placeholder="Enter Your Password" class="inputf"> <br>
		<span style="color: red;"><?php echo $err_pass;  ?> </span>
		

		<input type="submit" value="Log in" class="btn"> <br> <br>
		<a href="sign_up.php" target="_blank" style="color: white;">Not Register Yet- Click Here </a>
		</div>


	</form>

<span style="color: white;">
	<?php
echo "<h2>Your Input:</h2>";
echo $uname;
echo "<br>";
echo $pass;
echo "<br>";
?>
</span>

</body>
</html>