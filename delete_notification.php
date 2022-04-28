<?php
session_start();
include 'database_connection.php';

if (isset ($_COOKIE["Nacsitar"]))
{
$User_Key = $_COOKIE["Nacsitar"];

$Notification = $_POST['Notification'];
$Notification = htmlentities($Notification);


    $sql = 'DELETE FROM  Check_Notification

WHERE
database_id = "' . mysqli_real_escape_string($ireport, $Notification) . '" AND
Sender_User_key = "' . mysqli_real_escape_string($ireport, $User_Key) . '"';
$result = mysqli_query($ireport, $sql) or die ($ireport->error);


echo 'Deleted';



}

else
{
    echo 'wrong';
}

?>
