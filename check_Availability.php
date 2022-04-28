<?php
session_start();
include 'database_connection.php';

if (isset ($_COOKIE["Nacsitar"]))
{
$User_Key = $_COOKIE["Nacsitar"];

$action = $_POST['action'];
$action = htmlentities($action);

$location = $_POST['location'];
$location = htmlentities($location);

$from = $_POST['from'];
$from = htmlentities($from);

$to = $_POST['to'];
$to = htmlentities($to);
$gust = $_POST['gust'];
$gust = htmlentities($gust);


$availability_statue = '1';
$date = date("Y-m-d H:i:s");


$result = $ireport->query('SELECT  User_Key
FROM Your_location
WHERE  database_ids = "'.$location.'"  ');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{
   $row = $result->fetch_assoc();
   $tourist_guide_key = htmlentities($row['User_Key']);
}

if ($action == 'Cancel Request')
{
    $sql = 'DELETE FROM  Check_Availability

WHERE
location = "' . mysqli_real_escape_string($ireport, $location) . '" AND
User_Key = "' . mysqli_real_escape_string($ireport, $User_Key) . '"';
$result = mysqli_query($ireport, $sql) or die ($ireport->error);




$sql = 'DELETE FROM  Check_Notification

WHERE
User_Key = "' . mysqli_real_escape_string($ireport, $tourist_guide_key) . '" AND
Sender_User_key = "' . mysqli_real_escape_string($ireport, $User_Key) . '" ORDER BY database_id DESC LIMIT 1';
$result = mysqli_query($ireport, $sql) or die ($ireport->error);

echo 'Check Availability';

}

else if ($action == 'Check Availability')

{

$result = $ireport->query('SELECT  User_Key
FROM Your_location
WHERE  database_ids = "'.$location.'"  ');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{
   $row = $result->fetch_assoc();
   $tourist_guide_key = htmlentities($row['User_Key']);
}

$query = ('insert into Check_Availability
(database_id, User_Key, tourist_guide_key, location, from_date, to_date, number_of_guest, availability_statue,
Request_date ) values



(NULL,

"'.mysqli_real_escape_string($ireport, $User_Key).'",
"'.mysqli_real_escape_string($ireport, $tourist_guide_key).'",
"'.mysqli_real_escape_string($ireport, $location).'",
"'.mysqli_real_escape_string($ireport, $from).'",
"'.mysqli_real_escape_string($ireport, $to).'",
"'.mysqli_real_escape_string($ireport, $gust).'",
"'.mysqli_real_escape_string($ireport, $availability_statue).'",
"'.mysqli_real_escape_string($ireport, $date).'")'); //Insert query

$result = mysqli_query($ireport, $query) or die($ireport->error);

 $Notification_from = new DateTime($from);
 $Notification_from = date_format($Notification_from, '   jS F Y  ');

$Notification_to = new DateTime($to);
$Notification_to = date_format($Notification_to, '   jS F Y  ');


$Notification_action = 'Checking Avalibility';
$Notification_Reference = 'From'.$Notification_from.' To '.$Notification_to.' ';
$Notification_Statue = '1';
$query = ('insert into Check_Notification
(database_id, User_Key, Sender_User_key, Notification_action, Notification_Reference, Notification_Statue, Notification_date ) values



(NULL,

"'.mysqli_real_escape_string($ireport, $tourist_guide_key).'",
"'.mysqli_real_escape_string($ireport, $User_Key).'",
"'.mysqli_real_escape_string($ireport, $Notification_action).'",
"'.mysqli_real_escape_string($ireport, $Notification_Reference).'",
"'.mysqli_real_escape_string($ireport, $Notification_Statue).'",
"'.mysqli_real_escape_string($ireport, $date).'")'); //Insert query

$result = mysqli_query($ireport, $query) or die($ireport->error);



echo 'Cancel Request';


}





else if ($action == 'I`Am Available')

{

$tourist_key = $_POST['tourist_key'];
$tourist_key = htmlentities($tourist_key);


$availability_statue = '2';

$result = $ireport->query('UPDATE Check_Availability SET
availability_statue = "'.mysqli_real_escape_string($ireport, $availability_statue).'"
WHERE
tourist_guide_key ="'.mysqli_real_escape_string($ireport, $User_Key).'" AND
User_Key ="'.mysqli_real_escape_string($ireport, $tourist_key).'" AND
from_date ="'.mysqli_real_escape_string($ireport, $from).'" AND
location ="'.mysqli_real_escape_string($ireport, $location).'"

');

 $Notification_from = new DateTime($from);
 $Notification_from = date_format($Notification_from, '   jS F Y  ');

$Notification_to = new DateTime($to);
$Notification_to = date_format($Notification_to, '   jS F Y  ');


$Notification_action = 'Confirmed Avalibility';
$Notification_Reference = 'From'.$Notification_from.' To '.$Notification_to.' ';
$Notification_Statue = '1';
$query = ('insert into Check_Notification
(database_id, User_Key, Sender_User_key, Notification_action, Notification_Reference, Notification_Statue, Notification_date ) values



(NULL,

"'.mysqli_real_escape_string($ireport, $tourist_guide_key).'",
"'.mysqli_real_escape_string($ireport, $User_Key).'",
"'.mysqli_real_escape_string($ireport, $Notification_action).'",
"'.mysqli_real_escape_string($ireport, $Notification_Reference).'",
"'.mysqli_real_escape_string($ireport, $Notification_Statue).'",
"'.mysqli_real_escape_string($ireport, $date).'")'); //Insert query

$result = mysqli_query($ireport, $query) or die($ireport->error);



echo 'Cancel edit';


}







else if ($action == 'Not Available')

{

$tourist_key = $_POST['tourist_key'];
$tourist_key = htmlentities($tourist_key);



    $sql = 'DELETE FROM  Check_Availability

WHERE
tourist_guide_key ="'.mysqli_real_escape_string($ireport, $User_Key).'" AND
User_Key ="'.mysqli_real_escape_string($ireport, $tourist_key).'" AND
from_date ="'.mysqli_real_escape_string($ireport, $from).'" AND
location ="'.mysqli_real_escape_string($ireport, $location).'"';
$result = mysqli_query($ireport, $sql) or die ($ireport->error);




 $Notification_from = new DateTime($from);
 $Notification_from = date_format($Notification_from, '   jS F Y  ');

$Notification_to = new DateTime($to);
$Notification_to = date_format($Notification_to, '   jS F Y  ');


$Notification_action = 'Not Available';
$Notification_Reference = 'From'.$Notification_from.' To '.$Notification_to.' ';
$Notification_Statue = '1';
$query = ('insert into Check_Notification
(database_id, User_Key, Sender_User_key, Notification_action, Notification_Reference, Notification_Statue, Notification_date ) values



(NULL,

"'.mysqli_real_escape_string($ireport, $tourist_guide_key).'",
"'.mysqli_real_escape_string($ireport, $User_Key).'",
"'.mysqli_real_escape_string($ireport, $Notification_action).'",
"'.mysqli_real_escape_string($ireport, $Notification_Reference).'",
"'.mysqli_real_escape_string($ireport, $Notification_Statue).'",
"'.mysqli_real_escape_string($ireport, $date).'")'); //Insert query

$result = mysqli_query($ireport, $query) or die($ireport->error);



echo 'Cancel edit';


}


}

else
{
    echo 'wrong';
}

?>
