
<style>

.home_advert_display {
 width:22%;
 float:left;
 margin-right:3%;
 font-size:20px;
}

.home_advert_image_display {
  width: 100%;
  height: 200px;
  float:left;
  border-radius: 10px 10px 10px 10px;
 margin-left:3%;
 margin-top:3%;
  object-fit: cover;
  object-position: center right;
}


#home_advert_profile_container {
  width: 19%;
  float:left;
  border-radius: 10px 10px 10px 10px;
 margin-left:1%;
  -webkit-box-shadow:0 0 2px;
   /* For I.E */
   -moz-box-shadow:0 0 2px;
   /* For Mozilla Web Browser */
   border-radius:10px;
   -webkit-border-radius:10px;
   /* For I.E */
   -moz-border-radius:10px
   /* For Mozilla Web Browser */
}

#home_location_profile_image {
  width: 100%;
  height: 200px;
  float:left;
  border-radius: 10px 10px 10px 10px;
  object-fit: fill;
  object-position: center right;
}

.tourist_name_container {
  width: 100%;
  float:left;
  font-size:18px;
  text-align:center;
  font-weight:bold;
  color:black;

}
.tourist_age_container {
  width: 100%;
  float:left;
  font-size:18px;
  text-align:center;
  font-weight:200;
  color:gray;

}
.tourist_text_container {
  width: 100%;
  float:left;
  font-size:16px;
  font-weight:400;
  padding-left:10px;
  color:black;


}

</style>



<div style="width:100% float:left;">
    <h3 style="width:100%;"><b>Visit anywhere</b></h3>
              <div class="home_advert_display">
                   <a href="Search?Location=%20" style="color:white; text-decoration: none;">
                  <img src="tourist_thialand.JPG"  class="home_advert_image_display"></br></a>
                 <center><b> Outdoor getaways </b></center>
             </div>

<div class="home_advert_display">
     <a href="Search?Location=%20" style="color:white; text-decoration: none;">
                  <img src="water_fall.JPG"  class="home_advert_image_display"></br></a>
                 <center><b> Unique Water Falls </b></center>
             </div>

<div class="home_advert_display">
     <a href="Search?Location=%20" style="color:white; text-decoration: none;">
                  <img src="park_life.JPG"  class="home_advert_image_display"></br></a>
                 <center><b>Park Life Festival </b></center>
             </div>

<div class="home_advert_display">
     <a href="Search?Location=%20" style="color:white; text-decoration: none;">
                  <img src="cave.JPG"  class="home_advert_image_display"></br></a>
                 <center><b>Caves </b></center>
             </div>

</div>


<div style="width:100%; float:left;  margin-top:5%;">
     <h3 style="width:100%;"><b>New Tourist Guide</b></h3>
<?php
    include 'database_connection.php';


  $result = $ireport->query('SELECT
  profile_images.database_ids as database_ids,
  profile_images.database_id as database_id,
  profile_images.image_root as image_root,



(SELECT (Guide_First_name.First_name) FROM Personal_Information as Guide_First_name
WHERE profile_images.User_Key = Guide_First_name.User_Key ORDER BY Guide_First_name.database_id DESC LIMIT 1)
as Guide_First_name,


(SELECT (Guide_Last_name.Last_name) FROM Personal_Information as Guide_Last_name
WHERE profile_images.User_Key = Guide_Last_name.User_Key ORDER BY Guide_Last_name.database_id DESC LIMIT 1)
as Guide_Last_name,


(SELECT (Guide_age.Date_Of_Birth) FROM Personal_Information as Guide_age
WHERE profile_images.User_Key = Guide_age.User_Key ORDER BY Guide_age.database_id DESC LIMIT 1)
as Guide_age,

(SELECT (Guide_gender.Gender) FROM Personal_Information as Guide_gender
WHERE profile_images.User_Key = Guide_gender.User_Key ORDER BY Guide_gender.database_id DESC LIMIT 1)
as Guide_gender,


(SELECT (Guide_year.registration_date) FROM Personal_Information as Guide_year
WHERE profile_images.User_Key = Guide_year.User_Key ORDER BY Guide_year.database_id DESC LIMIT 1)
as Guide_year,

(SELECT count(number_of_location.location_name) FROM Your_location as number_of_location
WHERE profile_images.User_Key = number_of_location.User_Key LIMIT 1)
as number_of_location


FROM profile_image as profile_images
WHERE  profile_images.database_ids > 0
 GROUP BY profile_images.User_Key ORDER BY profile_images.database_ids DESC LIMIT 5');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{
   // will selected information is output
        while ( $row = $result->fetch_assoc())
        {
           $image_root = htmlentities($row['image_root']);
          $database_id = htmlentities($row['database_id']);
          $database_ids = htmlentities($row['database_ids']);
          $Guide_First_name = htmlentities($row['Guide_First_name']);
          $Guide_Last_name = htmlentities($row['Guide_Last_name']);
          $Guide_age = htmlentities($row['Guide_age']);
          $date1 = new DateTime($Guide_age);
          $date2 = new DateTime();
          $interval = $date1->diff($date2);
          $Guide_gender = htmlentities($row['Guide_gender']);
          $Guide_year = htmlentities($row['Guide_year']);
         $Guide_year = new DateTime($Guide_year);
         $Guide_year = date_format($Guide_year, '   F Y  ');
         $number_of_location = htmlentities($row['number_of_location']);

         $profile_link = $database_ids;
       $profile_link = str_replace("1", "W", $profile_link) ;
       $profile_link = str_replace("2", "F", $profile_link) ;
       $profile_link = str_replace("3", "H", $profile_link) ;
       $profile_link = str_replace("4", "I", $profile_link) ;
       $profile_link = str_replace("5", "U", $profile_link) ;
       $profile_link = str_replace("6", "B", $profile_link) ;
       $profile_link = str_replace("7", "G", $profile_link) ;
       $profile_link = str_replace("8", "A", $profile_link) ;
       $profile_link = str_replace("9", "J", $profile_link) ;
       $profile_link = str_replace("0", "V", $profile_link) ;


            echo '<a href="Account?Account='.$profile_link.'"> ';
              echo '<div id="home_advert_profile_container">';
             echo  '<img src="'.$image_root.'/'.$database_id.'.jpg" id="home_location_profile_image"> </img>';
             echo '<div class="tourist_name_container">'.$Guide_First_name.' '.$Guide_Last_name.' </div>';
             echo '<div class="tourist_age_container">Age: '.$interval->y.' '.$Guide_gender.' </div>';
             echo '<div class="tourist_text_container">Tourist Guide since '.$Guide_year.' </div>';
             echo '<div class="tourist_text_container">Number Of Locations is '.$number_of_location.' </div>';
             echo '</div>';
             echo '</a> ';
            }

            }

    ?>
</div>
