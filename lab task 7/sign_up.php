<?php

	$fname="";
	$err_fname="";

	$uname="";
	$err_uname="";

	$pass="";
	$err_pass="";

	$nid="";
	$err_nid="";

	$cnumber="";
	$err_cnumber="";

	$email="";
	$err_email="";

	$address="";
	$err_address="";


	$has_error=False;

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (empty($_POST["fname"]))
		{
			$err_fname="* Full name Requried";
			$has_error=True;
		}
		elseif(strlen($_POST["fname"])<6)
		{
			$err_fname="* Full name must be more than 6 letter";
			$has_error=True;
		}
		else
		{
			$fname=htmlspecialchars($_POST["fname"]);

		}
		if(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["pass"]) === 0)
		{
			$err_pass = "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
			$has_error=True;
		}
		else
		{
			$pass=htmlspecialchars($_POST["pass"]);
		}


		if (empty($_POST["uname"]))
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


		if (!ctype_digit($_POST["nid"]))
		 	{
   			 $err_nid= "* NID Only Contains Number -Check Again";
   			 $has_error=True;
			}
			elseif (strpos($_POST["nid"],"  "))
			{
				$err_nid="*space is not allowed";
				$has_error=True;
			}
			else
			{
				$nid=htmlspecialchars($_POST["nid"]);

			}



		if (!ctype_digit($_POST["cnumber"]))
		 	{
   			 $err_cnumber= "* Contact Number Only Contains Number -Check Again";
   			 $has_error=True;
			}
			elseif (strpos($_POST["cnumber"],"  "))
			{
				$err_cnumber="*space is not allowed";
				$has_error=True;
			}
			else
			{
				$cnumber=htmlspecialchars($_POST["cnumber"]);

			}



		if (empty($_POST["email"]))
			{
				$err_email="* Email Requried";
				$has_error=True;
			}

			else
			{
				$email=htmlspecialchars($_POST["email"]);

			}


		if (empty($_POST["address"]))
			{
				$err_address="* address Requried";
				$has_error=True;
			}

			else
			{
				$address=htmlspecialchars($_POST["address"]);

			}

		




	}



  ?>







<!DOCTYPE html>
<html>
<head>
	<title>Reg Form</title>
	<link rel="stylesheet" href="signupcss.css">
</head>
<body>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

		<div class="frmdesign">


		<label class="lbl">Enter Your Full Name</label> <br>
		<input type="text" name="fname" value="<?php echo $fname ; ?>" placeholder="Full Name" class="in"   > <br> 
		<spna style="color: red;"><?php echo $err_fname;?></span> <br>


		<label class="lbl">Enter Your Usename</label> <br>
		<input type="text" name="uname" value="<?php echo $uname ; ?>" placeholder="Username" class="in"> <br> 
		<span style="color: red;"><?php echo $err_uname;?></span> <br>


		<label class="lbl">Enter Your Password</label> <br>
		<input type="password" name="pass" placeholder="password" class="in" required="required"> <br> 
		<span style="color: red;"><?php echo $err_pass;  ?> </span> <br>


		<label class="lbl">Enter Your NID</label> <br>
		<input type="text" name="nid" value="<?php echo $nid ; ?>" placeholder="NID Number " class="in" > <br>
		<span style="color: red;"><?php echo $err_nid;?></span> <br>


		<label class="lbl">Enter Your Contact Number</label> <br>
		<input type="text" name="cnumber"  value="<?php echo $cnumber ; ?>" placeholder="Contact Number" class="in" > <br>
		<span style="color: red;"><?php echo $err_cnumber;?></span> <br>


		<label class="lbl">Enter Your Full Email</label> <br>
		<input type="email" name="email" value="<?php echo $email ; ?>" placeholder="Email" class="in" r> <br><br>
		<span style="color: red;"><?php echo $err_email;?></span> <br>

		<label class="lbl"> Enter Your Address </label> <br>
		<textarea class="txtarea" rows="4" cols="50" name="address"> </textarea> <br> 
		<span style="color: red;"><?php echo $err_address;?></span> <br>


		


		<input type="submit" name="" value="Submit" class="btn">
		<a href="login.php" target="_blank" style="color: black;">Already Register- Sign In  </a>

		</div>
		





	</form>


<span style="color: black;">
	<?php
echo "<h2>Your Input:</h2>";

echo $fname;
echo "<br>";

echo $uname;
echo "<br>";

echo $pass;
echo "<br>";

echo $nid;
echo "<br>";

echo $cnumber;
echo "<br>";

echo $email;
echo "<br>";

echo $address;
echo "<br>";


?>
</span>


</body>
</html>

