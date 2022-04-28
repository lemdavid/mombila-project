<?php
session_start();
include 'database_connection.php';


$phone = htmlentities($_POST['phone']);
$passwords = htmlentities($_POST['password']);
$passwords = 'PASSWORDTRICK:&amp;$^$%#0192('.$passwords.')';

$login_User_Name = preg_replace('/\s\s+/', '', $phone);
$login_User_Name = htmlentities($login_User_Name);



  $result = $ireport->query('SELECT
  phone.phone_number as phone_number,
  phone.User_Key as User_Key,

(SELECT (password.password) FROM Personal_Information as password
WHERE phone.User_Key = password.User_Key )
as password

FROM Phone_number as phone
WHERE  phone.phone_number = "'.$phone.'"
 GROUP BY  phone.phone_number ORDER BY phone.database_id DESC');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{
 $row = $result->fetch_assoc();

            $phone_number = htmlentities($row['phone_number']);
            $User_Key = htmlentities($row['User_Key']);
            $password = htmlentities($row['password']);

            if ($password == '')
            {
                $cookie_name = "Nacsitar";
                $cookie_value = $User_Key;
               setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");

                echo 'No password';
            }
          else if ($password == $passwords)
            {
                $cookie_name = "Nacsitar";
                $cookie_value = $User_Key;
               setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");
                echo 'password is correct';
            }

}


else{

echo 'wrong';

}


?>
