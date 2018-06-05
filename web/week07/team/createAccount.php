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

$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

$statement = $db->prepare('INSERT INTO userteam (username, password) VALUES (:username, :hashedPwd)');
$statement->bindValue(':username', $username, PDO::PARAM_STR);
$statement->bindValue(':hashedPwd', $hashedPwd, PDO::PARAM_STR);
$statement->execute();

$done = true;

if($done) {
header("Location: login.php");
}
      ?>
</body>
</html>
