<script>

  function validate(){
  var fname = document.getElementById("fname").value;
  var email = document.getElementById("email").value;
  var subject = document.getElementById("subject").value;
  var address = document.getElementById("address").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;

  if(fname.length < 5)
  {
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6)
  {
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
  if(subject.length < 10)
  {
    text = "Please Enter Correct Subject";
    error_message.innerHTML = text;
    return false;
  }
  
  if(address.length <= 10)
  {
    text = "write more than 10 chacrter in complain box";
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
   background-image: url("image/cmp.jpg");
   background-repeat: no-repeat;
   background-size: cover;
}

 

</style>



  <!DOCTYPE html>
  <html>
  <head>
  	<title>Complain</title>
<link rel="stylesheet"
 href="complaincss.css">
  </head>

  <body>


  	<form method="post" onsubmit="return validate();" >
  		
  		<div class="frmdesign">

        
      <div id="error_message"></div>

      <h2>Complain Form</h2>

  		<label>Name</label> <br>
  		<input type="text" id="fname"  placeholder="Enter Your Name" class="in"> <br><br>
  		


  		<label style="color: black;">Email</label> <br>
  		<input type="email" id="email"  placeholder="Enter Your Email" class="in"> <br><br>


      <label style="color: black;">Subject</label> <br>
      <input type="text" id="subject"  placeholder="Write Your Complain Subject" class="in"> <br><br>


  		

  		<label style="color: black;">Write Your Complain</label>
  		<textarea class="txtarea" rows="4" cols="50"  id="address"> </textarea> <br> <br>
  		


  		<input type="submit" name="submit" value="Complain" class="btn">

  		</div>

  	</form>



  </body>
  </html>