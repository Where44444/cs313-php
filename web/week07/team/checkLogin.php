<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

foreach ($db->query('SELECT username, password FROM users') as $row) {
if ($row['username'] == $username) {
if(password_verify($password, $row['password'])) {
$_SESSION['loggedIn'] = true;
$_SESSION['currentUser'] = $username;
header("Location: welcome.php");
exit;
}
}
}
?>
</body>
</html>
