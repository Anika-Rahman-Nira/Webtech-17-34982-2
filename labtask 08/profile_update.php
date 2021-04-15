<script>

  function validate(){
  var uname = document.getElementById("uname").value;
  var pass = document.getElementById("pass").value;
  var repass = document.getElementById("repass").value;
  var cnumber = document.getElementById("cnumber").value;
  var email = document.getElementById("email").value;
  var address = document.getElementById("address").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;

  if(uname.length < 5)
  {
    text = "Please Enter valid Username";
    error_message.innerHTML = text;
    return false;
  }
   if(pass.length < 5)
  {
    text = "Password must be more than 5 charcter";
    error_message.innerHTML = text;
    return false;
  }
   if(pass != repass)
  {
    text = "password and retype pass word must be same";
    error_message.innerHTML = text;
    return false;
  }
   if (isNaN(cnumber) || cnumber.length<= 10)
  {
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
  
  if(email.indexOf("@") == -1 || email.length < 6)
  {
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
  
  if(address.length <= 10)
  {
    text = "write more than 10 chacrter in Adress box";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}

</script>








 <style>

body
{
  background-image: url('image/pupdate.jpg');
  background-repeat: no-repeat;
   background-size: cover;
}







 </style>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile Update</title>
        <link rel="stylesheet"
 href="profile_updatecss.css">

 </head>
 <body>
 
 <div class="frmdesign">

 	<form   method="post" onsubmit="return validate();">
 		<div id="error_message"></div>
 		<h5>Update Your Profile</h5>

 		<label>Enter Your Username</label><br>
 		<input type="text" id="uname"  placeholder="username" class="in"  > <br>
 		


 		<label>Enter Your Password</label><br>
 		<input type="password" id="pass" placeholder="Password" class="in"  > <br>
 		
 		


 		<label>Re-type Your Password</label><br>
 		<input type="password" id="repass" placeholder="Re-type password" class="in"   > <br>
 		

 		<label>Enter Contact Number</label><br>
 		<input type="text" id="cnumber"  placeholder="Contact Number" class="in"   > <br>
 		
 		


 		<label>Enter Your Email</label> <br>
 		<input type="email" id="email" placeholder="Enter Your Email" class="in"   > <br>
 		


 		<label>Enter Your Address</label>
 		<textarea class="txtarea" rows="4" cols="50" id="address"  > </textarea> <br> <br>
 		 

 		<input type="submit" name="submit" value="Update" class="btn"> 
 		<input type="button" name="" value="Cancel" class="btn" style="background-color: red; color: white;">

 		

 		
 </div>





 	</form>



 </body>
 </html>