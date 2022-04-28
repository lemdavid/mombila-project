<?php
session_start();
include 'database_connection.php';

if (!isset ($_COOKIE["Nacsitar"]))
{
$User_Key = $_COOKIE["Nacsitar"];

$Notification = $_POST['Notification'];
$Notification = htmlentities($Notification);

$result = $ireport->query('SELECT  User_Key
FROM phone_number
WHERE  phone_number = "'.$Notification.'"  ');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{
   $row = $result->fetch_assoc();
   $User_Key = htmlentities($row['User_Key']);

   $cookie_name = "Nacsitar";
                $cookie_value = $User_Key;
               setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");
   echo 'successfully Done';
}



}

else
{
    echo 'wrong';
}

?>
