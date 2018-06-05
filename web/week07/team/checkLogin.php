<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$dbUrl =    getenv('DATABASE_URL');

      $dbopts =     parse_url($dbUrl);

      $dbHost =     $dbopts["host"];
      $dbPort =     $dbopts["port"];
      $dbUser =     $dbopts["user"];
      $dbPassword = $dbopts["pass"];
      $dbName =     ltrim($dbopts["path"],'/');

      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      /////////////////////////////////////////////////////////////
      $dne = false;

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

foreach ($db->query('SELECT username, password FROM userteam') as $row) {
  echo $row . "<br>";
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
