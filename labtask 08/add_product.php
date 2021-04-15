<script>

  function validate(){
  var pid = document.getElementById("pid").value;
  var pname = document.getElementById("pname").value;
  var pquantity = document.getElementById("pquantity").value;
  var pcost = document.getElementById("pcost").value;
  
  var pdesc = document.getElementById("pdesc").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;

  if (isNaN(pid) || pid.length<= 2)
  {
    text = "Please Enter valid Product ID";
    error_message.innerHTML = text;
    return false;
  }

  if(pname.length < 3)
  {
    text = "Please Enter valid product Name";
    error_message.innerHTML = text;
    return false;
  }
   if (isNaN(pquantity) || pquantity.length<= 2)
  {
    text = "Please Enter valid Product Qunatity";
    error_message.innerHTML = text;
    return false;
  }

  if (isNaN(pcost) || pcost.length<= 2)
  {
    text = "Please Enter Cost";
    error_message.innerHTML = text;
    return false;
  }
  if(pdesc.length <= 10)
  {
    text = "write more than 10 chacrter in Description box";
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
	<title>Add Product</title>
<link rel="stylesheet"
 href="add_productcss.css">
</head>
<body>




	<div class="frmdesign">

 	<form   method="post" onsubmit="return validate();">
 		<div id="error_message"></div>
 		<h5>ADD Product</h5>

 		<label>Enter Product ID</label><br>
 		<input type="text" id="pid"  placeholder="Product ID" class="in"  > <br>
 		


 		<label>Enter Product Name</label><br>
 		<input type="text" id="pname" placeholder="Product Name" class="in"  > <br>



 		<label>Enter Product Quantity</label><br>
 		<input type="text" id="pquantity"  placeholder="Product Quantity" class="in"   > <br>
 		
 		
 		<label>Product Cost(per Unit)</label><br>
 		<input type="text" id="pcost" placeholder="Product cost" class="in"   > <br>
 		
 		
 		<label>Enter Product Description</label>
 		<textarea class="txtarea" rows="4" cols="50" id="pdesc"  > </textarea> <br> <br>
 		 

 		<input type="submit" name="submit" value="ADD" class="btn"> 
 		

 		
 </div>


 	</form>

</body>
</html>