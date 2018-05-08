<?php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$major = $_POST['major'];
echo "$name <br> $email <br> $major <br>";

?>
