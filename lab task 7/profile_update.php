<?php 



	$uname="";
	$err_uname="";

	$pass="";
	$err_pass="";

	$repass="";
	$err_repass="";

	$cnumber="";
	$err_cnumber="";

	$email="";
	$err_email="";

	$address="";
	$err_address="";

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


			if (empty($_POST["email"]))
			{
				$err_email="* Email Requried";
				$has_error=True;
			}

			else
			{
				$email=htmlspecialchars($_POST["email"]);

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




			if (empty($_POST["repass"]))
			{
				$err_repass="* Re-Type Your password ";
				$has_error=True;
			}

			elseif(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["repass"]) === 0)
			{
				$err_repass = "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
				$has_error=True;
			}
			elseif ($_POST['pass']!= $_POST['repass'])
			{
				$err_repass=" Password is not matching";
				$has_error=True;
			}

			else
			{
				$repass=htmlspecialchars($_POST["repass"]);
			}



			if (empty($_POST["cnumber"]))
			{
				$err_cnumber="* Contact Number Requried";
				$has_error=True;
			}

			
			elseif (!ctype_digit($_POST["cnumber"]))
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


			if (empty($_POST["address"]))
			{
				$err_address="* Address Requried";
				$has_error=True;
			}
			else
			{
				$address=htmlspecialchars($_POST["address"]);

			}













	}



 ?>

 <style>

body
{
	background-image: url('p_update.jpg');
}
 
  .frmdesign
{
    position: fixed; 
    border-style: solid;
    height: 600px;
    width: 450px;
    text-align: center;
    padding-top: 10px;
    padding-bottom: 60px;
    top: 5%;
    left: 35%;
    border-radius: 10px;
    background-color: white;
    font-size: 16px;
    margin: 0 auto;
}
.btn
{
    background-color: white;
    width: 40%;
    border-radius: 10px;
    height: 25px;
}
.btn:hover
{
    background-color:gray;
    cursor: pointer;
}
.in
{
  padding: 5px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  width: 70%;
}







 </style>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile Update</title>

 </head>
 <body>
 
 <div class="frmdesign">

 	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
 		<h5>Update Your Profile</h5>

 		<label>Enter Your Username</label><br>
 		<input type="text" name="uname" placeholder="username" class="in"  value="<?php echo $uname ; ?>"> <br>
 		<span style="color: red;"><?php echo $err_uname;?></span> <br>


 		<label>Enter Your Password</label><br>
 		<input type="password" name="pass" placeholder="Password" class="in" value="<?php echo $pass ; ?>" > <br>
 		<span style="color: red;"><?php echo $err_pass;?></span> <br>
 		


 		<label>Re-type Your Password</label><br>
 		<input type="password" name="repass" placeholder="Re-type password" class="in"  value="<?php echo $repass ; ?>" > <br>
 		<span style="color: red;"><?php echo $err_repass;?></span> <br>


 		<label>Enter Contact Number</label><br>
 		<input type="text" name="cnumber"  placeholder="Contact Number" class="in"  value="<?php echo $cnumber ; ?>" > <br>
 		<span style="color: red;"><?php echo $err_cnumber;?></span> <br>
 		


 		<label>Enter Your Email</label> <br>
 		<input type="email" name="email" placeholder="Enter Your Email" class="in"   value="<?php echo $email ; ?>"> <br>
 		<span style="color: red;"><?php echo $err_email;?></span> <br>


 		<label>Enter Your Address</label>
 		<textarea class="txtarea" rows="4" cols="50" required="required" name="address"  > </textarea> <br>
 		 


 		<input type="submit" name="" value="Save" class="btn"> 
 		<input type="button" name="" value="Cancel" class="btn" style="background-color: red; color: white;">
 		
 </div>





 	</form>



 	<span style="color: black">
 	<?php

 		echo "<h4> Out Input </h4>";

 		echo $uname;
 		echo "<br>";

 		echo $pass;
 		echo "<br>";

 		echo $repass;
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