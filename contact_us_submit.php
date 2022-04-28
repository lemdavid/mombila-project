<?php
session_start();
include 'database_connection.php';

if (isset ($_POST['txt_subject']))
{


if (isset ($_COOKIE["Nacsitar"]))
{
  $user = $_COOKIE["Nacsitar"];
}

else
{
    $user = $_COOKIE['site_user_id'];
}


$txt_name = $_POST['txt_name'];
$txt_name = htmlentities($txt_name);

$txt_email = $_POST['txt_email'];
$txt_email = htmlentities($txt_email);


$txt_phone = $_POST['txt_phone'];
$txt_phone = htmlentities($txt_phone);


$txt_subject = $_POST['txt_subject'];
$txt_subject = htmlentities($txt_subject);

$txt_message = $_POST['txt_message'];
$txt_message = htmlentities($txt_message);

$registration_date = date("Y-m-d H:i:s");

$query = ('insert into Contact_us
(database_id, User_Key, Your_Name, Your_Email, Your_phone, Your_subject, Your_text, Contact_date ) values



(NULL,

"' . mysqli_real_escape_string($ireport, $user) . '",
"' . mysqli_real_escape_string($ireport, $txt_name) . '",
"' . mysqli_real_escape_string($ireport, $txt_email) . '",
"' . mysqli_real_escape_string($ireport, $txt_phone) . '",
"' . mysqli_real_escape_string($ireport, $txt_subject) . '",
"' . mysqli_real_escape_string($ireport, $txt_message) . '",
"' . mysqli_real_escape_string($ireport, $registration_date) . '"




 )' ); //Insert query

$result = mysqli_query($ireport, $query) or die($ireport->error);


echo 'successful';





}

else
{
    echo 'wrong';
}

?>
