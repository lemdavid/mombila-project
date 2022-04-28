<?php

session_start();
include 'database_connection.php';

$_SESSION['Confirmation_code'] = rand(7,1000000);

echo $_SESSION['Confirmation_code'];

?>
