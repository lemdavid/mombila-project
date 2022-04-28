<?php
session_start();
include 'database_connection.php';


$phone_number = $_POST['phone'];
$phone_number = preg_replace('/\s\s+/', '', $phone_number);
$phone_number = htmlentities($phone_number);

$country = $_POST['country'];
$country = htmlentities($country);




$result = $ireport->query('SELECT phone_number
FROM Phone_number
WHERE phone_number = "'.$phone_number.'" ');

if (mysqli_num_rows($result) > 0)
{
echo 'Phone Already Exist';
}

else{


$_SESSION['Registration_Email_Phone'] = $phone_number;
$_SESSION['country'] = $country;
$_SESSION['country_code'] = '+234';
$_SESSION['Confirmation_code'] = rand(7,1000000);
include 'send_verification.php';

$_SESSION['verification_sent'] = '1';








}

?>
