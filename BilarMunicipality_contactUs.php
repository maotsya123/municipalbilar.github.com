<html>
<head>
	
</head>

<body style="background-color:#ffffe6; font-family:Gabriola; ">
	
<center>	
<h1>How can we help you?</h1>
	
<div style="width:12%; height:20%; position:absolute; top:100px; left:400px; z-index:1">
		<img style="position:absolute; width:100%; height:100%; top:10px; right:20px;" src="images/contactUs/MessageUs2.png">
</div>

<div style="width:12%; height:20%; position:absolute; top:100px; left:600px;">
	<img style="position:absolute; width:100%; height:100%; top:0px; left:10px;" src="images/contactUs/ContactUs.png">
</div>

<div style="width:12%; height:20%; position:absolute; top:100px; left:800px;">
	<img style="position:absolute;  width:100%; height:100%; top:0px; left:0px;" src="images/contactUs/FollowUs.png">
</div>

<button class="btnHover" style="background-color:#ffe6ff; font-family:Gabriola; font-size:20px; font-weight:bold; cursor:pointer; border-style:solid; border-width:3px; width:10%; height:5%; position:absolute; top:250px; left:400px; z-index:1;"  onclick="showMessageUs()">
	Send a Request
</button>

<button style="background-color:#ffe6ff; font-family:Gabriola; font-size:20px; font-weight:bold; cursor:pointer; border-style:solid; border-width:3px; width:10%; height:5%; position:absolute; top:250px; left:600px; z-index:1;"  onclick="showContactNumber()">
	Contact Us
</button>

<button style="background-color:#ffe6ff; font-family:Gabriola; font-size:20px; font-weight:bold; cursor:pointer; border-style:solid; border-width:3px; width:10%; height:5%; position:absolute; top:250px; left:800px; z-index:1;"  onclick="showFollowUs()">
	Follow Us 
</button>

<div id="id01" style=" display:none; width:60%; height:50%; font-family:Gabriola; position:relative; top:230px;">

<center><fieldset style="width:80%; height:140%; text-align:left">
<legend><span style="font-size:20px; font-weight:bold; ">Have something to say?</span></legend>
<center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<fieldset style="width:80%;"><legend><h3>Email:</h3></legend>
		<input style="font-family:Gabriola; font-size:20px;" type="email" id="email" name="email" size="50" placeholder="someone@example.com" style="float:right"/>
	</fieldset>
	
	<fieldset style="width:80%;"><legend><h3>Message:</h3></legend>
	<textarea style="font-family:Gabriola; font-size:20px;" name="comments" id="comments" cols="60" rows="5" maxlength="2000" style="float:right"  placeholder="write your message here..."></textarea>
	</fieldset>
	
	<p><input style="font-family:Gabriola; font-size:18px; font-weight:bold;" type="submit" onclick="return submitSuccess();" value="Submit Request" />
	<a style="float:right" href="http://localhost/BilarMunicipality_webpage/BilarMunicipality_viewRequest.php" target="_blank">view request</a>
	</p>
	
</form>
</center>
</fieldset>	</center>

</div>

<?php
  include 'BilarMunicipality_sendRequest.php';
 ?> 

<div id="contactUs" style="background-color:#ffe6ff; display:none; border-style:solid; width:60%; height:25%; font-family:Gabriola; position:relative; top:230px;">
	<h1>Contact us in these number:</h1>
	<img style="position:absolute; width:6%; height:18%; top:110px; left:265px;" src="images/contactUs/MobilePhone2.png">
	<h1>0963 645 8361</h1>
</div>

<div id="followUs" style="background-color:#ffe6ff; display:none; border-style:solid; width:40%; height:35%; font-family:Gabriola; position:relative; top:230px;">
	<h1>Follow us, </h1>
	
	<img style="position:absolute; width:7%; height:15%; top:170px; left:180px;" src="images/contactUs/Facebook.png">
	<h1>(visit the official page of the Municipality of Bilar)</h1>
	<h2><a href="https://web.facebook.com/LGUBilarBoholofficial" target="_blank"> @Facebook </a></h2>
	
</div>

</center>

<script>
function showMessageUs() {
	document.getElementById("followUs").style.display = "none";
	document.getElementById("contactUs").style.display = "none";
    document.getElementById("id01").style.display = "block";
}
</script>

<script>
function showContactNumber() {
    document.getElementById("id01").style.display = "none";
	document.getElementById("contactUs").style.display = "block";
	document.getElementById("followUs").style.display = "none";
}
</script>

<script>
function showFollowUs() {
	document.getElementById("id01").style.display = "none";
    document.getElementById("followUs").style.display = "block";
	document.getElementById("contactUs").style.display = "none";
}
</script>

<script>
function submitSuccess() {
	var email = document.getElementById('email').value;
	var comments = document.getElementById("comments").value;
	var emailReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
   
	if (email === '' || comments === '') // Calling validation function
	{
		alert("Please fill-in all fields!");
		return false;
	}
	else if (!(email==='')&&(!(email).match(emailReg))) {
		alert("Invalid Email...!!!!!!");
		return false;
	}
	else {
	alert("We'll review the following message: \n" + comments + "\n\nINFORMATION SUBMITTED SUCCESSFULY!!! \nThank you " + email + ", have a nice day!");
	return true;}
}

</script>

</body>
</html>
