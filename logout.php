<?php
session_start();

$cookie_name = "Nacsitar";
$cookie_value = 'logout';
setcookie($cookie_name, $cookie_value, time() - (86400 * 365), "/");

  unset ($_SESSION);
?>
