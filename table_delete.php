<?php

include 'database_connection.php';

$query = 'DROP TABLE Personal_Information';
    mysqli_query($ireport, $query) or die ($ireport->error);

   echo 'information like table created.';


$query = 'DROP TABLE profile_image';
    mysqli_query($ireport, $query) or die ($ireport->error);

   echo 'information like table created.';

$query = 'DROP TABLE Your_location';
    mysqli_query($ireport, $query) or die ($ireport->error);

   echo 'information like table created.';

?>
