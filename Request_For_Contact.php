<?php
session_start();
include 'database_connection.php';

if (isset ($_COOKIE["Nacsitar"]))
{
$User_Key = $_COOKIE["Nacsitar"];

$Tourist = $_POST['Tourist'];
$Tourist = htmlentities($Tourist);

$action = $_POST['Action'];
$action = htmlentities($action);


$date = date("Y-m-d H:i:s");




if ($action == 'Cancel Request')
{
    $sql = 'DELETE FROM  Request_For_Contact

WHERE
User_Key = "' . mysqli_real_escape_string($ireport, $User_Key) . '" AND
User_Key = "' . mysqli_real_escape_string($ireport, $User_Key) . '" AND
tourist_guide_key = "' . mysqli_real_escape_string($ireport, $Tourist) . '"';
$result = mysqli_query($ireport, $sql) or die ($ireport->error);




$sql = 'DELETE FROM  Check_Notification

WHERE
User_Key = "' . mysqli_real_escape_string($ireport, $Tourist) . '" AND
Notification_action = "Requesting For Profile Details" AND
Sender_User_key = "' . mysqli_real_escape_string($ireport, $User_Key) . '"';
$result = mysqli_query($ireport, $sql) or die ($ireport->error);

echo 'Request For Contact';

}

else if ($action == 'Request For Contact')

{
$Request_statue = '1';

$query = ('insert into Request_For_Contact
(database_id, User_Key, tourist_guide_key, Request_statue, Request_date ) values



(NULL,

"'.mysqli_real_escape_string($ireport, $User_Key).'",
"'.mysqli_real_escape_string($ireport, $Tourist).'",
"'.mysqli_real_escape_string($ireport, $Request_statue).'",
"'.mysqli_real_escape_string($ireport, $date).'")'); //Insert query

$result = mysqli_query($ireport, $query) or die($ireport->error);


$Notification_action = 'Requesting For Profile Details';
$Notification_Reference = 'Profile Details Including Phone Number, Email, Address Etc...';
$Notification_Statue = '1';
$query = ('insert into Check_Notification
(database_id, User_Key, Sender_User_key, Notification_action, Notification_Reference, Notification_Statue, Notification_date ) values



(NULL,

"'.mysqli_real_escape_string($ireport, $Tourist).'",
"'.mysqli_real_escape_string($ireport, $User_Key).'",
"'.mysqli_real_escape_string($ireport, $Notification_action).'",
"'.mysqli_real_escape_string($ireport, $Notification_Reference).'",
"'.mysqli_real_escape_string($ireport, $Notification_Statue).'",
"'.mysqli_real_escape_string($ireport, $date).'")'); //Insert query

$result = mysqli_query($ireport, $query) or die($ireport->error);



echo 'Cancel Request';


}


}

else
{
    echo 'wrong';
}

?>
