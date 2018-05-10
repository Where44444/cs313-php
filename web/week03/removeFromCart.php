<?php
session_start();
if ($_SESSION[$_REQUEST["q"]] > 0)
{
$_SESSION[$_REQUEST["q"]] -= 1;
}

echo $_SESSION[$_REQUEST["q"]];
?>
