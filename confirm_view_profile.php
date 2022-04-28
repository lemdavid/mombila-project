<?php
session_start();
include 'database_connection.php';

if (isset ($_COOKIE["Nacsitar"]))
{
$User_Key = $_COOKIE["Nacsitar"];

$action = $_POST['action'];
$action = htmlentities($action);

$Notification = $_POST['Notification'];
$Notification = htmlentities($Notification);



$availability_statue = '1';
$date = date("Y-m-d H:i:s");








 if ($action == 'Accept')

{


$result = $ireport->query('SELECT  User_Key
FROM Request_For_Contact
WHERE  database_id = "'.$Notification.'"  AND tourist_guide_key = "'.$User_Key.'" ');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{
   $row = $result->fetch_assoc();
   $tourist_key = htmlentities($row['User_Key']);

$availability_statue = '2';

$result = $ireport->query('UPDATE Request_For_Contact SET
Request_statue = "'.mysqli_real_escape_string($ireport, $availability_statue).'"
WHERE
database_id ="'.mysqli_real_escape_string($ireport, $Notification).'" ');






$Notification_action = 'Ignored Your Request';
$Notification_Reference = 'You Can Not View Profile Details Including Phone Number, Email, Address Etc...';
$Notification_Statue = '1';
$query = ('insert into Check_Notification
(database_id, User_Key, Sender_User_key, Notification_action, Notification_Reference, Notification_Statue, Notification_date ) values



(NULL,

"'.mysqli_real_escape_string($ireport, $tourist_key).'",
"'.mysqli_real_escape_string($ireport, $User_Key).'",
"'.mysqli_real_escape_string($ireport, $Notification_action).'",
"'.mysqli_real_escape_string($ireport, $Notification_Reference).'",
"'.mysqli_real_escape_string($ireport, $Notification_Statue).'",
"'.mysqli_real_escape_string($ireport, $date).'")'); //Insert query

$result = mysqli_query($ireport, $query) or die($ireport->error);

}








echo 'Accept';


}




 else if ($action == 'ignore')

{


$result = $ireport->query('SELECT  User_Key
FROM Request_For_Contact
WHERE  database_id = "'.$Notification.'"  AND tourist_guide_key = "'.$User_Key.'" ');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{
   $row = $result->fetch_assoc();
   $tourist_key = htmlentities($row['User_Key']);

$availability_statue = '3';

$result = $ireport->query('UPDATE Request_For_Contact SET
Request_statue = "'.mysqli_real_escape_string($ireport, $availability_statue).'"
WHERE
database_id ="'.mysqli_real_escape_string($ireport, $Notification).'" ');






$Notification_action = 'Ignored Your Request';
$Notification_Reference = 'You Can Not View Profile Details Including Phone Number, Email, Address Etc...';
$Notification_Statue = '1';
$query = ('insert into Check_Notification
(database_id, User_Key, Sender_User_key, Notification_action, Notification_Reference, Notification_Statue, Notification_date ) values



(NULL,

"'.mysqli_real_escape_string($ireport, $tourist_key).'",
"'.mysqli_real_escape_string($ireport, $User_Key).'",
"'.mysqli_real_escape_string($ireport, $Notification_action).'",
"'.mysqli_real_escape_string($ireport, $Notification_Reference).'",
"'.mysqli_real_escape_string($ireport, $Notification_Statue).'",
"'.mysqli_real_escape_string($ireport, $date).'")'); //Insert query

$result = mysqli_query($ireport, $query) or die($ireport->error);

}








echo 'Ignore';


}







}

else
{
    echo 'wrong';
}

?>
