<?php
$_SESSION[$_REQUEST["q"]] += 1;

echo $_SESSION[$_REQUEST["q"]];
?>
