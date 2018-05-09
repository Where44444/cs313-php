<?php
$_SESSION[$_REQUEST["q"]] = $_SESSION[$_REQUEST["q"]] + 2;

echo $_SESSION[$_REQUEST["q"]];
?>
