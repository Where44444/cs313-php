<?php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$major = $_POST['major'];
echo $name;
echo <br>;
echo $email;
echo <br>;
echo $major;
echo <br>;
?>
