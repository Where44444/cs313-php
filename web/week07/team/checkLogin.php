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
echo "Loaded";
foreach ($db->query('SELECT username, password FROM userteam') as $row) {
if ($row['username'] == $username) {
    echo "User verified<br>";
if(password_verify($password, $row['password'])) {
  echo "Password verified<br>";
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
