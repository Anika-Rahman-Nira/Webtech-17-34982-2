<?php


	$fname="";
	$err_fname="";

	$email="";
	$err_email="";


	$address="";
	$err_address="";


	$has_error=False;


	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{


		if (empty($_POST["fname"]))
		{
			$err_fname="*  Name Requried";
			$has_error=True;
		}
		elseif(strlen($_POST["fname"])<6)
		{
			$err_fname="* Name Should be more than than 6 letter";
			$has_error=True;
		}
		else
		{
			$fname=htmlspecialchars($_POST["fname"]);

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


  <style>


 .frmdesign
{
    position: fixed; 
    border-style: solid;
    height: 350px;
    width: 450px;
    text-align: center;
    padding-top: 10px;
    padding-bottom: 60px;
    top: 20%;
    left: 35%;
    border-radius: 10px;
    background-color: white;
    font-size: 16px;
    margin: 0 auto;

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
.btn
{
    background-color: white;
    width: 40%;
    border-radius: 5px;
    height: 25px;
}
.btn:hover
{
    background-color:gray;
    cursor: pointer;
}



  </style>


  <!DOCTYPE html>
  <html>
  <head>
  	<title>Contact us</title>
  </head>

  <body>

  	<form method="post"  >
  		
  		<div class="frmdesign">

  		<label>Name</label> <br>
  		<input type="text" name="fname" value="<?php echo $fname ; ?>" placeholder="Enter Your Name" class="in"> <br><br>
  		<spna style="color: red;"><?php echo $err_fname;?></span> <br>


  		<label style="color: black;">Email</label> <br>
  		<input type="email" name="email" value="<?php echo $email ; ?>" placeholder="Enter Your Email" class="in"> <br><br>
  		<spna style="color: red;"><?php echo $err_email;?></span> <br>

  		<label style="color: black;">Write Your Message</label>
  		<textarea class="txtarea" rows="4" cols="50" required="required" name="address" > </textarea> <br> <br>
  		<spna style="color: red;"><?php echo $err_address;?></span> <br>


  		<input type="submit" name="" value="Connect With Us" class="btn">

  		</div>

  	</form>


  	<span style=" color: black;">

  		<span><b>Our Input</b></span> <br> <br>

  		<?php
  		echo "Name- ". $fname;
  		echo "<br>";

  		echo "Email- ".$email;
  		echo "<br>";

  		echo "Address- " .$address;
  		echo "<br>";















  		  ?>
  		




  	</span>


  </body>
  </html>