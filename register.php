<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>Registration page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
<div id="main-wrapper">
<center>
<h2>Registration Form</h2>
<img src="image/uem1.png" class="uem"/>
</center>
<form class="myform" action="index.php" method="post">
<label><b>Username:</b></label><br>
<input type="text" class="inputvalues" placeholder="type your username"/><br>
<label><b>Password:</b></label><br>
<input type="Password" class="inputvalues" placeholder="your password"/>
<label><b>Confirm Password:</b></label><br>
<input type="Password" class="inputvalues" placeholder="confirm passward"/>
<input type="submit" id="signup_btn" value="Sign Up"/>
<input type="button" id="back_btn" value="Back"/>
</form>
</div>
</body>
</html>