<?php
session_start();
if (isset($_COOKIE["Nacsitar"]))
{
if (isset($_POST['submit'])) {
$j = 0;     // Variable for indexing uploaded image.
$target_path = "location_image/";     // Declaring Path for uploaded images.
$dir = "location_image/";     // Declaring Path for uploaded images.
$image_root = "location_image/";     // Declaring Path for uploaded images.




include 'database_connection.php';
$location_name = $_POST['location_name_input'];
$location_name = htmlentities($location_name);

$location_address = $_POST['location_address_input'];
$location_address = htmlentities($location_address);

$User_Key = $_COOKIE["Nacsitar"];
$upload_date = date("Y-m-d H:i:s");
$database_id = count($_FILES['file']['name']);
$image_group = $User_Key.$upload_date;
$image_group = str_replace(" ", "", $image_group) ;
$image_group = str_replace(":", "", $image_group) ;
$image_group = str_replace("-", "", $image_group) ;
$image_root = "location_image/";     // Declaring Path for uploaded images.
$image_name = 'type';
$total = count($_FILES['file']['name']);


 //inserting HTML form information to the database.
   $query = 'INSERT INTO Your_location

(database_ids, database_id, User_Key, location_name, location_address, image_group, image_root, upload_date


  )

  VALUES

   (NULL,
   "' . mysqli_real_escape_string($ireport, $database_id) . '",
   "' . mysqli_real_escape_string($ireport, $User_Key) . '",
   "' . mysqli_real_escape_string($ireport, $location_name) . '",
   "' . mysqli_real_escape_string($ireport, $location_address) . '",
   "' . mysqli_real_escape_string($ireport, $image_group) . '",
   "' . mysqli_real_escape_string($ireport, $image_root) . '",
   "' . mysqli_real_escape_string($ireport, $upload_date) . '" )';

   $result = mysqli_query($ireport, $query) or die($ireport->error);


$last_id = mysqli_insert_id($ireport);
$last_id =$last_id.$image_group;



for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
// Loop to get individual element from the array
$validextensions = array("JPEG", "jpeg", "jpg", "JPG", "png","PNG");      // Extensions which are allowed.
$ext = explode('.', basename($_FILES['file']['name'][$i]));   // Explode file name from dot(.)
$file_extension = end($ext); // Store extensions in the variable.
$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];     // Set the target path with a new name of image.
$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
if (($_FILES["file"]["size"][$i] < 10000000000000)     // Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {



  //get info about the image being uploaded
   list($width, $height, $type, $attr) = getimagesize($_FILES['file']['tmp_name'][$i]);

   //checking for image type
   $error = 'The file you uploaded was not a supported filetype.';
   switch ($type)
   {
       case IMAGETYPE_GIF:
       $image = imagecreatefromgif($_FILES['file']['tmp_name'][$i]) or
       die($error);
       break;

       case IMAGETYPE_JPEG:
       $image = imagecreatefromjpeg($_FILES['file']['tmp_name'][$i]) or
       die($error);
       break;

       case IMAGETYPE_PNG:
       $image = imagecreatefrompng($_FILES['file']['tmp_name'][$i]) or
       die($error);
       break;

       default:
       die($error);
}




$thumbdir = $dir . '\thumbs';



    //changing the image name to the last database id.
    $imagename = $last_id.$i.'.jpg';

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


}




else {     //   If File Size And File Type Was Incorrect.
echo 'wrong';
}

}
echo 'location submitted successfuly';
}
}
?>
