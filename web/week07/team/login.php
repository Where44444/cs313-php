<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
<form method="post" action="checkLogin.php">
Username:<br>
<input type="text" name="username"><br><br>
Password:<br>
<input type="password" name="password"><br><br>
<input type="submit" name="loginButton">
</form>
</body>
</html>
