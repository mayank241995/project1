<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
<div id="main-wrapper">
<center>
<h2>Login Form</h2>
<img src="image/uem1.png" class="uem"/>
</center>
<form class="myform" action="index.php" method="post">
<label><b>Username:</b></label><br>
<input type="text" class="inputvalues" placeholder="type your username"/><br>
<label><b>Password:</b></label><br>
<input type="Password" class="inputvalues" placeholder="type your username"/>
<input type="submit" id="login_btn" value="login"/>
<input type="button" id="registration_btn" value="register"/>
</form>
</div>
</body>
</html>