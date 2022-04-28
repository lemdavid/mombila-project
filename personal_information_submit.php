<?php
session_start();
include 'database_connection.php';

if (isset ($_COOKIE["Nacsitar"]))
{


$first_name = $_POST['first_name'];
$first_name = htmlentities($first_name);

$last_name = $_POST['last_name'];
$last_name = htmlentities($last_name);


$date_of_birth = $_POST['date_of_birth'];
$date_of_birth = htmlentities($date_of_birth);


$gender = $_POST['gender'];
$gender = htmlentities($gender);

$email = $_POST['email'];
$email = htmlentities($email);


$password = $_POST['password'];
$password = htmlentities($password);



$login_user = $_COOKIE["Nacsitar"];

$registration_date = date("Y-m-d H:i:s");

$query = ('insert into Personal_Information
(database_id, First_name, Last_name, Date_Of_Birth, Gender, Email, password, User_Key, registration_date ) values



(NULL,

"' . mysqli_real_escape_string($ireport, $first_name) . '",
"' . mysqli_real_escape_string($ireport, $last_name) . '",
"' . mysqli_real_escape_string($ireport, $date_of_birth) . '",
"' . mysqli_real_escape_string($ireport, $gender) . '",
"' . mysqli_real_escape_string($ireport, $email) . '",
"PASSWORDTRICK:&$^$%#0192('.mysqli_real_escape_string($ireport, $password).')",
"' . mysqli_real_escape_string($ireport, $login_user) . '",
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
