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

$sql = 'SELECT username, password FROM userteam';
$stmt = $db->prepare($sql);
// $stmt->bindValue(':book', $book, PDO::PARAM_STR);

$stmt->execute();
$rowsChanged = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

foreach ($rowsChanged as $row)
{
  echo $row['username']." ".$row['password'] . "<br>";
}

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
