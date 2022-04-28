<?php

include 'database_connection.php';


if (!isset($_COOKIE['site_user_id'])) // if no cokkies set up cookies
{

 $day=date ("d");
$month=date ("m");
$year=date ("Y");
$time=time();
$Day_Month_year_time=$day+$month+$year+$time;
$random= rand(0,10000000);
$Day_Month_year_time_random= $Day_Month_year_time+$random;
$uniqid=  uniqid();
$Day_Month_year_time_random_uniqid = $Day_Month_year_time_random.$uniqid;
$Day_Month_year_time_random_uniqid = md5($Day_Month_year_time_random.$uniqid);
$sort=substr($Day_Month_year_time_random_uniqid, 16); // if you want sort length code.

$cookie_name = "site_user_id";
$cookie_value = $Day_Month_year_time_random_uniqid;


 $cookie_value = $Day_Month_year_time_random_uniqid;
 $first_time_cookes =  $cookie_value;
 setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");

 $User_Sales_id = $Day_Month_year_time_random_uniqid;

}
if (isset($_COOKIE['site_user_id']))
{
    $User_Sales_id = $_COOKIE['site_user_id'];
}



if (isset($_GET['referral']))
{
  $referral = $_GET['referral'];
  $_SESSION['referral'] = $referral;

}

 ?>


<!DOCTYPE html>
<html>
<head>

    <title>NACSITAR TOURIST</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0, maximum-scale=0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>

<?php
include 'logo.php';

?>

