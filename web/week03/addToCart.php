<?php
if ("q" != 1)
{
$_SESSION[$_REQUEST["q"]] = $_SESSION[$_REQUEST["q"]] + 1;
}

echo $_SESSION[$_REQUEST["q"]];
?>
