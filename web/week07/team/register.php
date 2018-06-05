<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>
<body>
<form name="register" method="post" action="createAccount.php">
Username:<br>
<input type="text" name="username"><br><br>
Password:<br>
<input type="password" name="password">
<input type="submit" name="registerButton">
</form>
</body>
</html>
