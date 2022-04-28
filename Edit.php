<?php
session_start();
include 'database_connection.php';

if (isset ($_COOKIE["Nacsitar"]))
{
$User_Key = $_COOKIE["Nacsitar"];

if (isset($_POST['action_change_name']))
{

$first_name = $_POST['first_name'];
$first_name = htmlentities($first_name);

$last_name = $_POST['last_name'];
$last_name = htmlentities($last_name);

$result = $ireport->query('UPDATE Personal_Information SET
First_name = "'.mysqli_real_escape_string($ireport, $first_name).'",
Last_name = "'.mysqli_real_escape_string($ireport, $last_name).'"
WHERE User_Key ="'.mysqli_real_escape_string($ireport, $User_Key).'" ');


echo 'successful';

}




if (isset($_POST['action_change_gender']))
{
$gender = $_POST['gender'];
$gender = htmlentities($gender);

$result = $ireport->query('UPDATE Personal_Information SET
Gender = "'.mysqli_real_escape_string($ireport, $gender).'"
WHERE User_Key ="'.mysqli_real_escape_string($ireport, $User_Key).'" ');


echo 'successful';

}



if (isset($_POST['action_change_date']))
{
$date_of_birth = $_POST['date_of_birth'];
$date_of_birth = htmlentities($date_of_birth);

$result = $ireport->query('UPDATE Personal_Information SET
Date_Of_Birth = "'.mysqli_real_escape_string($ireport, $date_of_birth).'"
WHERE User_Key ="'.mysqli_real_escape_string($ireport, $User_Key).'" ');


echo 'successful';

}

if (isset($_POST['action_change_email']))
{
$email_address = $_POST['email_address'];
$email_address = htmlentities($email_address);

$result = $ireport->query('UPDATE Personal_Information SET
Email = "'.mysqli_real_escape_string($ireport, $email_address).'"
WHERE User_Key ="'.mysqli_real_escape_string($ireport, $User_Key).'" ');


echo 'successful';

}




if (isset($_POST['action_Add_government_id']))
{
$Add_government = $_POST['Add_government'];
$Add_government = htmlentities($Add_government);
$database_id = 'no image';
$date = date("Y-m-d H:i:s");

$query = ('insert into Government_ids
(database_ids, database_id, User_Key, serial_number, Upload_Date ) values



(NULL,

"' . mysqli_real_escape_string($ireport, $database_id) . '",
"' . mysqli_real_escape_string($ireport, $User_Key) . '",
"' . mysqli_real_escape_string($ireport, $Add_government) . '",
"' . mysqli_real_escape_string($ireport, $date) . '"




 )' ); //Insert query

$result = mysqli_query($ireport, $query) or die($ireport->error);



echo 'successful';

}




if (isset($_POST['action_Add_Address']))
{
$address = $_POST['address'];
$address = htmlentities($address);
$date = date("Y-m-d H:i:s");

$query = ('insert into Address
(database_id, User_Key, Address, Upload_Date ) values



(NULL,

"' . mysqli_real_escape_string($ireport, $User_Key) . '",
"' . mysqli_real_escape_string($ireport, $address) . '",
"' . mysqli_real_escape_string($ireport, $date) . '"




 )' ); //Insert query

$result = mysqli_query($ireport, $query) or die($ireport->error);



echo 'successful';

}






if (isset($_POST['emergency_contact']))
{
$contact = $_POST['contact'];
$contact = htmlentities($contact);
$date = date("Y-m-d H:i:s");

$query = ('insert into Emergency_contact
(database_id, User_Key, Emergency_contact, Upload_Date ) values



(NULL,

"' . mysqli_real_escape_string($ireport, $User_Key) . '",
"' . mysqli_real_escape_string($ireport, $contact) . '",
"' . mysqli_real_escape_string($ireport, $date) . '"




 )' ); //Insert query

$result = mysqli_query($ireport, $query) or die($ireport->error);



echo 'successful';

}



if (isset($_POST['tourist_guide']))
{
$action = 'Tourist Guide';

$query = ('insert into Account_Type
(database_id, account_type, User_Key ) values



(NULL,

"' . mysqli_real_escape_string($ireport, $action) . '",
"' . mysqli_real_escape_string($ireport, $User_Key) . '"




 )' ); //Insert query

$result = mysqli_query($ireport, $query) or die($ireport->error);

                $cookie_name = "account_Type";
                $cookie_value = $action;
               setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");

echo 'successful';

}

if (isset($_POST['tourist']))
{
$action = 'Tourist';

$query = ('insert into Account_Type
(database_id, account_type, User_Key ) values



(NULL,

"' . mysqli_real_escape_string($ireport, $action) . '",
"' . mysqli_real_escape_string($ireport, $User_Key) . '"




 )' ); //Insert query

$result = mysqli_query($ireport, $query) or die($ireport->error);

               $cookie_name = "account_Type";
               $cookie_value = $action;
               setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");

echo 'successful';

}




}

else
{
    echo 'wrong';
}

?>
