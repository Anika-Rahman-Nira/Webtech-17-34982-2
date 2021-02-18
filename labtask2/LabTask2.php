<html>
	<head>

  </head>
	<body>
	<?php
	$nameErr = $passErr = $genderErr = $hobbiesErr = $professionErr="";
    $uname = $pass = $gender = $profession = $hobbies = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
   {

      if (empty($_POST["uname"]))
      {
  		$nameErr = "Name is required";
  	}
     else if(strlen($_POST["uname"])<6)
  	 {
  	  $nameErr="Enter more than 6 character ";
  	 }
  	 else
     {
  		 $uname=$_POST["uname"];
  	 }
  	     if (empty($_POST["pass"]))
      {
  		$passErr = "password is required to submit";
  	   }
     else if(strlen($_POST["pass"])<8)
  	 {
  	  $passErr="password must be Atleast 6 charecter";
  	 }
  	 else
     {
  		 $pass=$_POST["pass"];
  	 }
  	  if (empty($_POST["gender"]))
      {
      $genderErr = "Gender is required";
      } else
       {
       $gender =$_POST["gender"];
      }

  	  if (empty($_POST["hobbies"]))
       {
      $hobbiesErr = "select your hobbies";
      } else
       {
       $hobbies =$_POST["hobbies"];
      }
  	  if (empty($_POST["profession"])) {
      $professionErr = "select  your profession";
      } else
       {
       $profession =$_POST["profession"];
      }

    }
		?>

		<form action="" method="post">
			<table>
				<tr>
						<td rowspan="2"><span>User access </span></td>
						<td>:<input type="text" placeholder="Username" name="uname" value="<?php echo $uname?>"<span><?php echo $nameErr?></span></td>

				</tr>
				<tr>
					<td>:<input type="password" placeholder="Password" name="pass" value="<?php echo $pass?>"<span><?php echo $passErr	?></span></td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" value="Male" name="gender" >Male<input type="radio" value="Female" name="gender" >Female  <br><span><?php echo $genderErr
					?></span></td>
				</tr>
				<tr>
					<td><span>Hobbies</span> </td>
					<td>:<input type="checkbox" value="Movies" name="hobbies[]">Movies
					     <input type="checkbox" value="Music" name="hobbies[]">Music
						 <input type="checkbox" value="Games" name="hobbies[]">Games<br>

						 <span> <?php echo $hobbiesErr?> </span>
				    </td>
				</tr>
				<tr>
					<td><span>Profession </span></td>
					<td>:
						<select name="profession">
							<option>Teaching</option>
							<option>Business</option>
							<option>Service</option>
						</select> <span><?php echo $professionErr	?></span>
					</td>
				</tr>
				<tr>
					<td><span>Bio </span></td>
					<td>:<textarea name="bio"></textarea></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit"></td>
				</tr>

			</table>


		</form>
	</body>
</html>