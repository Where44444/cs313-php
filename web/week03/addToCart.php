<?php
session_start();
$_SESSION[$_REQUEST["q"]] += 1;

echo $_SESSION[$_REQUEST["q"]] . " Added To Cart!";
?>
