<?php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

echo $name;
echo <br>;
echo $email;
echo <br>;
echo $major;
echo <br>;
?>
