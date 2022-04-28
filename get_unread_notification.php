<?php
session_start();
include 'database_connection.php';

if (isset ($_COOKIE["Nacsitar"]))
{
$User_Key = $_COOKIE["Nacsitar"];


$result = $ireport->query('SELECT  count(User_Key) as User_Key
FROM Check_Notification
WHERE  User_Key = "'.$User_Key.'" AND Notification_Statue = "1" ');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{
   $row = $result->fetch_assoc();
   $User_Key = htmlentities($row['User_Key']);
   echo $User_Key;
}


}

else
{
    echo 'wrong';
}

?>
