<?php
$_SESSION[$_REQUEST["q"]] = $_SESSION[$_REQUEST["q"]] + 3;

echo $_REQUEST[$_REQUEST["q"]];
?>
