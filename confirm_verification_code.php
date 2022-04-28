<?php
session_start();
include 'database_connection.php';


$verification_code = $_POST['verification_code'];
$verification_code = preg_replace('/\s\s+/', '', $verification_code);
$verification_code = htmlentities($verification_code);
$code = $_SESSION['Confirmation_code'];


if ($verification_code == $code)
{
$Registration_Email_Phone = $_SESSION['Registration_Email_Phone'];
$country = $_SESSION['country'];


include 'generate_key.php';
$registration_statue = '1';
$registration_date = date("Y-m-d H:i:s");

$query = ('insert into phone_number
(database_id, phone_number, Country, User_Key, registration_statue, registration_date ) values



(NULL,

"' . mysqli_real_escape_string($ireport, $Registration_Email_Phone) . '",
"' . mysqli_real_escape_string($ireport, $country) . '",
"' . mysqli_real_escape_string($ireport, $Api_key) . '",
"' . mysqli_real_escape_string($ireport, $registration_statue) . '",
"' . mysqli_real_escape_string($ireport, $registration_date) . '"




 )' ); //Insert query

$result = mysqli_query($ireport, $query) or die($ireport->error);



$cookie_name = "Nacsitar";
$cookie_value = $Api_key;
setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");



echo 'successful';





}

else
{
    echo 'wrong';
}

?>
