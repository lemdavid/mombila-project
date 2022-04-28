<?php

session_start();
include 'database_connection.php';
if ($_SESSION['verification_sent'] <= '2')
{

$_SESSION['Confirmation_code'] = rand(7,1000000);
$country_code = $_SESSION['country_code'];
$Confirmation_code = $_SESSION['Confirmation_code'];
$Api_key = $_SESSION['Api_key'];
$Registration_Email_Phone = $_SESSION['Registration_Email_Phone'];


// function to validate phone number

function validate_phone_number($phone)
{
     // Allow +, - andRegistration_Email_Phone . in phone number
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        return false;
     } else {
       return true;
     }
}


// check if input is email
 if (preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',$Registration_Email_Phone))

       {

$verified = '2';
$_SESSION['verified'] = 'verified';

$result = $ireport->query('UPDATE phone_number SET
registration_statue = "'.mysqli_real_escape_string($ireport, $verified).'"
WHERE phone_number ="'.mysqli_real_escape_string($ireport, $Registration_Email_Phone).'" ');



$cookie_name = "Nacsitar";
$cookie_value = $Api_key;
setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");
echo 'registration successful';

}// end of if its email.

// check if input is phone number
   else if (validate_phone_number($Registration_Email_Phone) == true) {

      if (preg_match("~^0\d+$~", $Registration_Email_Phone)) {

       $Registration_Email_Phone = (int)$Registration_Email_Phone;
       $Registration_Email_Phone = $country_code.$Registration_Email_Phone;
       }

//send verification email
$id = "AC3733c8176f556a1b90e56d50af37f239";
$token = "e0b1c37bd770d3ad3179bfa904406e80";
$url = "https://api.twilio.com/2010-04-01/Accounts/$id/SMS/Messages";
$from = "+14782922486";
$to = $Registration_Email_Phone; // twilio trial verified number
$body = "Welcome To NACSITAR!!
$Confirmation_code
Is Your Confirmation Code.";
$data = array (
    'From' => $from,
    'To' => $to,
    'Body' => $body,
);
$post = http_build_query($data);
$x = curl_init($url );
curl_setopt($x, CURLOPT_POST, true);
curl_setopt($x, CURLOPT_RETURNTRANSFER, true);
curl_setopt($x, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($x, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($x, CURLOPT_USERPWD, "$id:$token");
curl_setopt($x, CURLOPT_POSTFIELDS, $post);
$y = curl_exec($x);
curl_close($x);


echo 'Proceed to confirmation';


}


// input cant be validated
else
           {
               // wrong entry you can write a robot code to checkmate intruder

               }


$_SESSION['verification_sent'] = '3';

}

else
{
    echo 'too much verification';
}
?>
