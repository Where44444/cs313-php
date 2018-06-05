<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
</head>
<body>
    <h1>WELCOME</h1>
    <?php
echo $_SESSION['currentUser'];
     ?>
</body>
</html>
