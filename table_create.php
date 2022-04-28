<?php

include 'database_connection.php';

/*We now create a table for user who buy from us to register so we can retain there information for better communication */

   $query = 'CREATE TABLE IF NOT EXISTS phone_number (
   database_id INTEGER NOT NULL AUTO_INCREMENT,
   phone_number  VARCHAR(255) NOT NULL,
   Country VARCHAR(255) NOT NULL,
   User_Key VARCHAR(255) NOT NULL,
   registration_statue VARCHAR(255) NOT NULL,
   registration_date VARCHAR(255) NOT NULL,
   INDEX  (User_Key),
   PRIMARY KEY (database_id) )
   ENGINE=InnoDB';
    mysqli_query($ireport, $query) or die ($ireport->error);

   echo 'Registration table created for E_Shop.';



$query = 'CREATE TABLE IF NOT EXISTS Personal_Information (
   database_id INTEGER NOT NULL AUTO_INCREMENT,
   First_name  VARCHAR(255) NOT NULL,
   Last_name  VARCHAR(255) NOT NULL,
   Date_Of_Birth VARCHAR(255) NOT NULL,
   Gender VARCHAR(255) NOT NULL,
   Email VARCHAR(255) NOT NULL,
   password VARCHAR(255) NOT NULL,
   User_Key VARCHAR(255) NOT NULL,
   registration_date VARCHAR(255) NOT NULL,
   INDEX  (User_Key),
   PRIMARY KEY (database_id) )
   ENGINE=InnoDB';
    mysqli_query($ireport, $query) or die ($ireport->error);

   echo 'Registration table created for E_Shop.';

   $query = 'CREATE TABLE IF NOT EXISTS Account_Type (
   database_id INTEGER NOT NULL AUTO_INCREMENT,
   account_type  VARCHAR(255) NOT NULL,
   User_Key VARCHAR(255) NOT NULL,
   INDEX  (User_Key),
   PRIMARY KEY (database_id) )
   ENGINE=InnoDB';
    mysqli_query($ireport, $query) or die ($ireport->error);

   echo 'Registration table created for E_Shop.';


$query = 'CREATE TABLE IF NOT EXISTS profile_image (
   database_ids INTEGER NOT NULL AUTO_INCREMENT,
   database_id  VARCHAR(255) NOT NULL,
   User_Key VARCHAR(255) NOT NULL,
   image_root VARCHAR(255) NOT NULL,
   registration_date VARCHAR(255) NOT NULL,
   INDEX  (User_Key),
   PRIMARY KEY (database_ids) )
   ENGINE=InnoDB';
    mysqli_query($ireport, $query) or die ($ireport->error);

   echo 'Registration table created for E_Shop.';



$query = 'CREATE TABLE IF NOT EXISTS Your_location (
   database_ids INTEGER NOT NULL AUTO_INCREMENT,
   database_id  VARCHAR(255) NOT NULL,
   User_Key VARCHAR(255) NOT NULL,
   location_name VARCHAR(255) NOT NULL,
   location_address VARCHAR(255) NOT NULL,
   image_group VARCHAR(255) NOT NULL,
   image_root VARCHAR(255) NOT NULL,
   upload_date VARCHAR(255) NOT NULL,
   INDEX  (User_Key),
   PRIMARY KEY (database_ids) )
   ENGINE=InnoDB';
    mysqli_query($ireport, $query) or die ($ireport->error);

   echo 'Registration table created for E_Shop.';



$query = 'CREATE TABLE IF NOT EXISTS Government_ids (
   database_ids INTEGER NOT NULL AUTO_INCREMENT,
   database_id VARCHAR(255) NOT NULL,
   User_Key VARCHAR(255) NOT NULL,
   serial_number VARCHAR(255) NOT NULL,
   Upload_Date VARCHAR(255) NOT NULL,
   INDEX  (User_Key),
   PRIMARY KEY (database_ids) )
   ENGINE=InnoDB';
    mysqli_query($ireport, $query) or die ($ireport->error);

   echo 'Registration table created for E_Shop.';

$query = 'CREATE TABLE IF NOT EXISTS Address (
   database_id INTEGER NOT NULL AUTO_INCREMENT,
   User_Key VARCHAR(255) NOT NULL,
   Address VARCHAR(255) NOT NULL,
   Upload_Date VARCHAR(255) NOT NULL,
   INDEX  (User_Key),
   PRIMARY KEY (database_id) )
   ENGINE=InnoDB';
    mysqli_query($ireport, $query) or die ($ireport->error);

   echo 'Registration table created for E_Shop.';



$query = 'CREATE TABLE IF NOT EXISTS Emergency_contact (
   database_id INTEGER NOT NULL AUTO_INCREMENT,
   User_Key VARCHAR(255) NOT NULL,
   Emergency_contact VARCHAR(255) NOT NULL,
   Upload_Date VARCHAR(255) NOT NULL,
   INDEX  (User_Key),
   PRIMARY KEY (database_id) )
   ENGINE=InnoDB';
    mysqli_query($ireport, $query) or die ($ireport->error);

   echo 'Registration table created for E_Shop.';

$query = 'CREATE TABLE IF NOT EXISTS Check_Availability (
   database_id INTEGER NOT NULL AUTO_INCREMENT,
   User_Key VARCHAR(255) NOT NULL,
   tourist_guide_key VARCHAR(255) NOT NULL,
   location VARCHAR(255) NOT NULL,
   from_date VARCHAR(255) NOT NULL,
   to_date VARCHAR(255) NOT NULL,
   number_of_guest VARCHAR(255) NOT NULL,
   availability_statue VARCHAR(255) NOT NULL,
   Request_date VARCHAR(255) NOT NULL,
   INDEX  (User_Key),
   PRIMARY KEY (database_id) )
   ENGINE=InnoDB';
    mysqli_query($ireport, $query) or die ($ireport->error);

   echo 'Registration table created for E_Shop.';


   $query = 'CREATE TABLE IF NOT EXISTS Request_For_Contact (
   database_id INTEGER NOT NULL AUTO_INCREMENT,
   User_Key VARCHAR(255) NOT NULL,
   tourist_guide_key VARCHAR(255) NOT NULL,
   Request_statue VARCHAR(255) NOT NULL,
   Request_date VARCHAR(255) NOT NULL,
   INDEX  (User_Key),
   PRIMARY KEY (database_id) )
   ENGINE=InnoDB';
    mysqli_query($ireport, $query) or die ($ireport->error);

   echo 'Registration table created for E_Shop.';




$query = 'CREATE TABLE IF NOT EXISTS Check_Notification (
   database_id INTEGER NOT NULL AUTO_INCREMENT,
   User_Key VARCHAR(255) NOT NULL,
   Sender_User_key VARCHAR(255) NOT NULL,
   Notification_action VARCHAR(255) NOT NULL,
   Notification_Reference TEXT NOT NULL,
   Notification_Statue VARCHAR(255) NOT NULL,
   Notification_date VARCHAR(255) NOT NULL,
   INDEX  (User_Key),
   PRIMARY KEY (database_id) )
   ENGINE=InnoDB';
    mysqli_query($ireport, $query) or die ($ireport->error);

   echo 'Registration table created for E_Shop.';



$query = 'CREATE TABLE IF NOT EXISTS Contact_us (
   database_id INTEGER NOT NULL AUTO_INCREMENT,
   User_Key VARCHAR(255) NOT NULL,
   Your_Name VARCHAR(255) NOT NULL,
   Your_Email VARCHAR(255) NOT NULL,
   Your_phone VARCHAR(255) NOT NULL,
   Your_subject VARCHAR(255) NOT NULL,
   Your_text TEXT NOT NULL,
   Contact_date VARCHAR(255) NOT NULL,
   INDEX  (User_Key),
   PRIMARY KEY (database_id) )
   ENGINE=InnoDB';
    mysqli_query($ireport, $query) or die ($ireport->error);

   echo 'Registration table created for E_Shop.';

?>
