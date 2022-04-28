<?php
session_start();

include 'database_connection.php';



if (isset($_COOKIE["Nacsitar"]))
{


$login_user = $_COOKIE["Nacsitar"];




$result = $ireport->query('SELECT  database_id

FROM profile_image
WHERE database_id > 0  ORDER BY CAST(database_id as unsigned) DESC');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{

 $row = $result->fetch_assoc();
 $database_id = $row['database_id'];
 $image_id = $row['database_id'] +1;


}

else {
    $image_id = '1';
}


$dir ='profile_image';
$registration_date = date("Y-m-d H:i:s");

   //inserting HTML form information to the database.
   $query = 'INSERT INTO profile_image

(database_ids, database_id, User_Key, image_root, registration_date


  )

  VALUES

   (NULL,
   "' . mysqli_real_escape_string($ireport, $image_id) . '",
   "' . mysqli_real_escape_string($ireport, $login_user) . '",
   "' . mysqli_real_escape_string($ireport, $dir) . '",
   "' . mysqli_real_escape_string($ireport, $registration_date) . '" )';

   $result = mysqli_query($ireport, $query) or die($ireport->error);

$last_id = $image_id;

 if ($_FILES['File']['error'] != UPLOAD_ERR_OK) {
   switch ($_FILES['File']['error']) {
   case UPLOAD_ERR_INI_SIZE:
   die('The uploaded file exceeds the upload_max_filesize directive ' .
   'in php.ini.');
   break;

   case UPLOAD_ERR_FORM_SIZE:
   die('The uploaded file exceeds the MAX_FILE_SIZE directive that ' .
   'was specified in the HTML form.');
   break;

   case UPLOAD_ERR_PARTIAL:
   die('The uploaded file was only partially uploaded.');
   break;

   case UPLOAD_ERR_NO_FILE:
   die('No file was uploaded.');
   break;

   case UPLOAD_ERR_NO_TMP_DIR:
   die('The server is missing a temporary folder.');
   break;

   case UPLOAD_ERR_CANT_WRITE:
   die('The server failed to write the uploaded file to disk.');
   break;

   case UPLOAD_ERR_EXTENSION:
   die('File upload stopped by extension.');
   break;
   }
}





  //get info about the image being uploaded
   list($width, $height, $type, $attr) = getimagesize($_FILES['File']['tmp_name']);

   //checking for image type
   $error = 'The file you uploaded was not a supported filetype.';
   switch ($type)
   {
       case IMAGETYPE_GIF:
       $image = imagecreatefromgif($_FILES['File']['tmp_name']) or
       die($error);
       break;

       case IMAGETYPE_JPEG:
       $image = imagecreatefromjpeg($_FILES['File']['tmp_name']) or
       die($error);
       break;

       case IMAGETYPE_PNG:
       $image = imagecreatefrompng($_FILES['File']['tmp_name']) or
       die($error);
       break;

       default:
       die($error);
}

   $thumbdir = $dir . '\thumbs';



    //changing the image name to the last database id.
    $imagename = $last_id . '.jpg';

   //converting all image to .JPG file type then submit it to our directory folder.
    imagejpeg($image, $dir . '/' . $imagename);

   // resizing the image to save the resized image.
    $thumb_width = $width * 0.50;
    $thumb_height = $height * 0.30;
    $thumb = imagecreatetruecolor($thumb_width, $thumb_height);
     imagecopyresampled($thumb, $image, 0, 0, 0, 0, $thumb_width, $thumb_height, $width, $height);
     imagejpeg($thumb, $thumbdir . '/' . $imagename . '', 100);

     //destroy image
    imagedestroy($thumb);



echo 'profile Image Submitted';

}









else
{
    echo 'Please Enter A Size';
}

?>
