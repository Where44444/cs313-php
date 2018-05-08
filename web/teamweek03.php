<?php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
echo $name;
?>
