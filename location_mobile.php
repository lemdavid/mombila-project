<?php
if (!isset($_COOKIE["Nacsitar"]))
{
     header("Location: LogIn");
die();
}
 ?>

 <style>
  #body_center{
    width: 100%;
    margin-top:400px;
    float: left;
 display:block;
 margin-bottom:20%;
 background-color:white;
}

a {
  text-decoration: none;
  color: black;
}




#personal_account_container
{
 width:100%;
 float:left;
}

#personal_account_info_container
{
 width:90%;
 float:left;
 margin-left:5%;
 border:3px solid lightgray;
 font-size:20px;
 padding:20px;
 position:sticky;
 top:100px;
}


#your_image {
  width: 250px;
  height: 250px;
  border-radius: 50%;
  float:left;
  margin-left:6%;
  margin-bottom:5%;
  object-fit: cover;
  object-position: center right;
  box-shadow:0 0 2px;
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


.options{
   background-color:white;
   width:100%;
   margin-top:1%;
   padding:10px 20px;
   font-size:17px;
   float:left;
   border-bottom: 1px solid lightgray;
}



.edit_input{
background-repeat:no-repeat;
   background-position:6px;
   border:2px solid white;
   margin-right:5%;
   margin-top:2%;
   padding:10px 5px;
   width:45%;
   float:left;
   font-size:14px;
   box-shadow:0 0 2px;
   -webkit-box-shadow:0 0 2px;
   /* For I.E */
   -moz-box-shadow:0 0 2px;
   /* For Mozilla Web Browser */
   border-radius:2px;
   -webkit-border-radius:2px;
   /* For I.E */
   -moz-border-radius:2px
   /* For Mozilla Web Browser */
}

.button_cancel
{

    float:left;
  margin-top:2%;
  margin-bottom:2%;
  margin-left:30%;
  padding:10px 30px 10px 30px;
  background-color:#333333;
  font-family: 'Roboto', sans-serif;
  font-size: 14px;
  font-weight: 200;
  color: white;
  border:none;
   -webkit-box-shadow:0 0 5px;
   /* For I.E */
   -moz-box-shadow:0 0 5px;
   /* For Mozilla Web Browser */
   border-radius:50px 50px 50px 50px;
   -webkit-border-radius:50px 50px 50px 50px;
   /* For I.E */
   -moz-border-radius:50px 50px 50px 50px;
   /* For Mozilla Web Browser */
}


.button_save
{
    float:left;
  margin-top:2%;
  margin-right:10%;
  margin-left:10%;
  margin-bottom:2%;
  padding:10px 30px 10px 30px;
  background-color:#ff0066;
  font-family: 'Roboto', sans-serif;
  font-size: 14px;
  font-weight: 400;
  color: white;
  border:none;
   -webkit-box-shadow:0 0 5px;
   /* For I.E */
   -moz-box-shadow:0 0 5px;
   /* For Mozilla Web Browser */
   border-radius:50px 50px 50px 50px;
   -webkit-border-radius:50px 50px 50px 50px;
   /* For I.E */
   -moz-border-radius:50px 50px 50px 50px;
   /* For Mozilla Web Browser */
}
</style>


<script>
$(document).ready(function() {


$("#cancel_name_edit").click(function() {

document.getElementById("edit_name_container").style.display = 'none';
document.getElementById("edit_name").style.display = 'block';

});

$("#edit_name").click(function() {

document.getElementById("edit_name_container").style.display = 'block';
document.getElementById("edit_name").style.display = 'none';

});


});
</script>


<style>
  #body_center{
    width: 100%;
    margin-top:400px;
    float: left;
 display:block;
 margin-bottom:20%;
 background-color:white;
}

a {
  text-decoration: none;
  color: black;
}



#all_location_main_image_container

{
  width:50%;
  float:left;

}

#all_location_other_image_container

{
  width:50%;
  float:left;

}

#all_location_other_image

{
  width:49%;
  margin-left:1%;
  float:left;

}

#tourist_guide_profile_image_container

{
  width:30%;
  margin-left:1%;
  float:left;

}
#tourist_guide_profile_info_container

{
  width:60%;
  margin-left:2%;
  float:left;
  font-family: 'Roboto', sans-serif;
  font-size: 34px;
  font-weight: 200;

}


#tourist_guide_connect_container{
  width:100%;
  float:left;
  box-shadow:0 0 2px;
  padding:20px;
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

#contact_tourist{
padding:3px;
  width:100%;
  float:left;
  border:2px solid gray;
   /* For Mozilla Web Browser */
   border-radius:10px;
   -webkit-border-radius:10px;
   /* For I.E */
   -moz-border-radius:10px
   /* For Mozilla Web Browser */
}

#location_profile_imae {
  width: 100%;
  height: 250px;
  float:left;
  object-fit: cover;
  object-position: center right;
}

#location_image_display {
  width: 100%;
  float:left;
  object-fit: cover;
  object-position: center right;
}
#main_location_image_display {
  width: 100%;
  float:left;
  object-fit: cover;
  object-position: center right;
}

.location_icon
 {
   height:30px;
   width:20px;
   margin-right:1%;
   margin-left:2%;
 }

 .check_availability_button{
     width:90%;
  margin-top:2%;
  margin-left:5%;
  margin-bottom:2%;
  padding:10px 0px 10px 0px;
  background-color:#ff0066;
  font-family: 'Roboto', sans-serif;
  font-size: 24px;
  font-weight: 400;
  color: white;
  border:none;
   -webkit-box-shadow:0 0 5px;
   /* For I.E */
   -moz-box-shadow:0 0 5px;
   /* For Mozilla Web Browser */
   border-radius:50px 50px 50px 50px;
   -webkit-border-radius:50px 50px 50px 50px;
   /* For I.E */
   -moz-border-radius:50px 50px 50px 50px;
   /* For Mozilla Web Browser */
}
.check_availability_button:hover{
    background-color:#333333;
}


#view_group_location_image
{

  width:100%;
 height: 100%;
 top:0px;
 display:none;
  position:fixed;
 background-color:#000;
}
</style>


<script>
$(document).ready(function() {


$.get( "home_diff1a75splay_include_desktop.php?scroll_load=1", function( data ) {
  $( "#body_center" ).html( data );
});


});
</script>


<style>

  .wrapper_froms {
	  max-width: 100%;
    float: left;
    padding:0px 20px ;
    background-color:white;

}
.wrapper_froms:hover
{
  -webkit-box-shadow:0 0 5px;
   /* For I.E */
   -moz-box-shadow:0 0 5px;
   /* For Mozilla Web Browser */
   border-radius:50px 50px 50px 50px;
   -webkit-border-radius:50px 50px 50px 50px;
   /* For I.E */
   -moz-border-radius:50px 50px 50px 50px;
   /* For Mozilla Web Browser */
}
.wrapper_tos {
	  max-width: 100%;
    float: left;
    border-left: 1px solid lightgray;
    padding:0px 20px ;
    background-color:white;

}

.wrapper_tos:hover
{
  -webkit-box-shadow:0 0 10px;
   /* For I.E */
   -moz-box-shadow:0 0 10px;
   /* For Mozilla Web Browser */
   border-radius:50px 50px 50px 50px;
   -webkit-border-radius:50px 50px 50px 50px;
   /* For I.E */
   -moz-border-radius:50px 50px 50px 50px;
   /* For Mozilla Web Browser */
}


#submit_search {
 background-color:#ff0066;
 border: 3px solid #ff1a75;
     width: 5%;
    float:right;
    padding:10px 10px 10px 10px;
    cursor:pointer;
    /* For Mozilla Web Browser */
   border-radius:50%;
   -webkit-border-radius:50%;
   /* For I.E */
   -moz-border-radius:50%;
   /* For Mozilla Web Browser */
 }


label {
	font-size: 18px;
	font-weight: 400;
	display: block;
	margin-bottom: 1px;
	color: #B0BEC5;
	padding:1px;
	border-radius: 0.5rem;
}
input {
	font-family: 'Roboto', sans-serif;
	display:block;
	border: none;
	border-radius: 0.25rem;
	border: 1px solid transparent;
	line-height: 1.5rem;
	padding: 0;
	font-size: 18px;
	color: #000;
	width: 100%;
	margin-top: 0.5rem;
}
input:focus {outline: none;}
#ui-datepicker-div {
	display: none;
	background-color: #fff;
	box-shadow: 0 0.125rem 0.5rem rgba(0,0,0,0.1);
	margin-top: 0.25rem;
	border-radius: 0.5rem;
	padding: 0.5rem;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
.ui-datepicker-calendar thead th {
	padding: 0.25rem 0;
	text-align: center;
	font-size: 18px;
	font-weight: 400;
	color: #78909C;
}
.ui-datepicker-calendar tbody td {
	width: 4.5rem;
	text-align: center;
	padding: 0;
}
.ui-datepicker-calendar tbody td a {
	display: block;
	border-radius: 0.25rem;
	line-height: 2rem;
	transition: 0.3s all;
	color: #546E7A;
	font-size: 14px;
	text-decoration: none;
}
.ui-datepicker-calendar tbody td a:hover {
	background-color: #E0F2F1;
}
.ui-datepicker-calendar tbody td a.ui-state-active {
	background-color: #009688;
	color: white;
}
.ui-datepicker-header a.ui-corner-all {
	cursor: pointer;
	position: absolute;
	top: 0;
	width: 2rem;
	height: 2rem;
	margin: 0.5rem;
	border-radius: 0.25rem;
	transition: 0.3s all;
}
.ui-datepicker-header a.ui-corner-all:hover {
	background-color: #ECEFF1;
}
.ui-datepicker-header a.ui-datepicker-prev {
	left: 0;
	background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==");
	background-repeat: no-repeat;
	background-size: 18px;
	background-position: 50%;
	transform: rotate(180deg);
}
.ui-datepicker-header a.ui-datepicker-next {
	right: 0;
	background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==');
	background-repeat: no-repeat;
	background-size: 18px;
	background-position: 50%;
}
.ui-datepicker-header a>span {
	display: none;
}
.ui-datepicker-title {
	text-align: center;
	line-height: 2rem;
	margin-bottom: 0.25rem;
	font-size: 18px;
	font-weight: 500;
	padding-bottom: 0.25rem;
}
.ui-datepicker-week-col {
	color: #78909C;
	font-weight: 400;
	font-size: 0.75rem;
}
</style>


<script>
$(document).ready(function() {

$('.check_availability_button').click(function(){
var location = $(this).val();
var action  = location+'button';
var action_button  = location+'button';
 action = document.getElementById(action).innerHTML;

var  from = location+'from';
var  froms = location+'from';
  from =  document.getElementById(from).value;

  var  to = location+'to';
  var  tos = location+'to';
  to =  document.getElementById(to).value;

  var  gust = location+'gust';
  gust =  document.getElementById(gust).value;

    if (from == '')
      {
             document.getElementById(froms).style.border = '2px solid red';
      }
   else if (to == '')
      {
             document.getElementById(tos).style.border = '2px solid red';
      }

      else
      {
          document.getElementById(action_button).innerHTML = 'Wait...';


         $.ajax
                ({
                    type: "POST",
                    url: "check_Availability.php",
                    data: {location: location, from: from, to: to, gust: gust, action:action},
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                        if (check_successfull == 'Check Availability')
                        {
                         document.getElementById(action_button).innerHTML = result;
                         }

                         else if (check_successfull == 'Cancel Request')
                         {
                          document.getElementById(action_button).innerHTML = result;
                         }
                    }
                });

            }// end of else address is input
});



$('.view_image').click(function(){

var value = $(this).attr('name');
         $.ajax
                ({
                    type: "POST",
                    url: "get_location_images_mobile.php",
                    data: {get_location: value},
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                         document.getElementById("view_group_location_image").style.display = 'block';
                        $("#view_group_location_image").html(result);

                    }
                });


});





});
</script>




<div id="body_center">

<div id="personal_account_container">



<div><h1><b><center>Your Tourist Locations</center></b></h1></div>

<?php
include 'database_connection.php';
$user = $_COOKIE["Nacsitar"];
$User_Key = $_COOKIE["Nacsitar"];



  $result = $ireport->query('SELECT
  location.database_ids as database_ids,
  location.database_id as database_id,
  location.image_root as image_root,
  location.image_group as image_group,
  location.location_name as location_name,
  location.location_address as location_address,

(SELECT (profile_images.database_id) FROM profile_image as profile_images
WHERE location.User_Key = profile_images.User_Key LIMIT 1)
as profile_images,

(SELECT (image_roots.image_root) FROM profile_image as image_roots
WHERE location.User_Key = image_roots.User_Key LIMIT 1)
as image_roots,

(SELECT (Guide_name.First_name) FROM Personal_Information as Guide_name
WHERE location.User_Key = Guide_name.User_Key ORDER BY Guide_name.database_id DESC LIMIT 1)
as Guide_name,


(SELECT (Guide_year.registration_date) FROM Personal_Information as Guide_year
WHERE location.User_Key = Guide_year.User_Key ORDER BY Guide_year.database_id DESC LIMIT 1)
as Guide_year,

(SELECT count(number_of_location.location_name) FROM Your_location as number_of_location
WHERE location.User_Key = number_of_location.User_Key LIMIT 1)
as number_of_location


FROM Your_location as location
WHERE  location.User_Key = "'.$User_Key.'"
 GROUP BY location.database_ids ORDER BY location.upload_date DESC');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{
   // will selected information is output
        while ( $row = $result->fetch_assoc())
        {

         $database_ids = htmlentities($row['database_ids']);
         $database_id = htmlentities($row['database_id']);
         $image_root = htmlentities($row['image_root']);
         $image_group = htmlentities($row['image_group']);
         $location_name = htmlentities($row['location_name']);
         $location_address = htmlentities($row['location_address']);
         $image_roots = htmlentities($row['image_roots']);
         $profile_images = htmlentities($row['profile_images']);
         $Guide_name = htmlentities($row['Guide_name']);
         $Guide_year = htmlentities($row['Guide_year']);
         $Guide_year = new DateTime($Guide_year);
         $Guide_year = date_format($Guide_year, '   F Y  ');
         $image_1 = $image_root.$database_ids.$image_group.'0.jpg';
         $image_2 = $image_root.$database_ids.$image_group.'1.jpg';
         $image_3 = $image_root.$database_ids.$image_group.'2.jpg';
         $image_4 = $image_root.$database_ids.$image_group.'3.jpg';
         $image_5 = $image_root.$database_ids.$image_group.'4.jpg';


   $extra_width_main = '';
         $extra_width_others = '';
         $extra_height_others = '';

         if ($database_id == 1)
         {
             $width_1 = 'width:100%; height:710px';
             $width_2 = 'display:none;';
             $width_3 = 'display:none;';
             $width_4 = 'display:none;';
             $width_5 = 'display:none;';
         }

        else if ($database_id == 2)
         {
              $extra_width_main = 'width:100%; margin-left:1%;';
              $extra_width_others = 'width:100%; margin-top:10px;';
             $width_1 = 'width:100%; height:355px;';
             $width_2 = 'width:100%; height:355px;';
             $width_3 = 'display:none;';
             $width_4 = 'display:none;';
             $width_5 = 'display:none;';
         }

          else if ($database_id == 3)
         {
             $extra_width_main = 'width:100%; margin-left:1%;';
              $extra_width_others = 'width:100%; margin-top:10px;';
             $width_1 = 'width:50%; height:355px;';
             $width_2 = 'width:49%; height:355px;';
             $width_3 = 'width:49%; height:355px;';
             $width_4 = 'display:none;';
             $width_5 = 'display:none;';
         }

          else if ($database_id == 4)
         {
             $width_1 = 'width:50%; height:710px;';
             $width_2 = 'width:100%; height:350px;';
             $width_3 = 'width:49%; height:350px;';
             $width_4 = 'width:49%; height:350px;';
             $width_5 = 'display:none;';
         }



        else if ($database_id == 5 )
         {
             $width_1 = 'width:50%; height:710px;';
             $width_2 = 'width:49%; height:350px;';
             $width_3 = 'width:49%; height:350px;';
             $width_4 = 'width:49%; height:350px;';
             $width_5 = 'width:49%; height:350px;';
         }

     else if ($database_id > 5 )
         {
             $width_1 = 'width:50%; height:710px;';
             $width_2 = 'width:49%; height:350px;';
             $width_3 = 'width:49%; height:350px;';
             $width_4 = 'width:49%; height:350px;';
             $width_5 = 'width:49%; height:350px;';
         }

       $tourist_location_identity_name = $database_ids;
       $tourist_location_identity_from = $database_ids.'from';
       $tourist_location_identity_to = $database_ids.'to';
       $tourist_location_identity_guste = $database_ids.'gust';
       $tourist_location_identity_button = $database_ids.'button';

         // all location info container start
         echo  '<div id="all_location_info_container" style="width:100%; margin-bottom:5%; float:left;">';

         echo '<div id="location_name" style="width:97%; float:left; font-size:54px;margin:2%;"> <b>'.$location_name.'</b>
         <img src="location_icons.png" class="location_icon"/>'.$location_address.'</div>';

         echo  '<div id="all_location_image_container" class="view_image" name="'.$database_ids.'">';
         echo  '<div id="all_location_main_image_container" style="'.$width_1.''.$extra_width_main.'">';
        echo '<img src="'.$image_1.'" id="main_location_image_display" width="100%" height="100%"> </img>';
        echo '</div>';

        echo  '<div id="all_location_other_image_container" style="'.$extra_width_others.'">';
        echo  '<div id="all_location_other_image" style="margin-bottom:10px; '.$width_2.'"><img src="'.$image_2.'" id="location_image_display" width="100%" height="100%"> </img></div>';
        echo  '<div id="all_location_other_image" style="margin-bottom:10px; '.$width_3.'"><img src="'.$image_3.'" id="location_image_display" width="100%" height="100%"> </img></div>';
        echo  '<div id="all_location_other_image" style="'.$width_4.'"><img src="'.$image_4.'" id="location_image_display" width="100%" height="100%"> </img></div>';
        echo  '<div id="all_location_other_image" style="'.$width_5.'"><img src="'.$image_5.'" id="location_image_display" width="100%" height="100%"> </img></div>';
        echo '</div>';

        // all location main image container end
        echo '</div>';


       echo '</div>';
        // all location info container end
}


 }


 ?>


</div>


<div id="personal_account_info_container">

<?php include 'add_locations_mobile.php'; ?>

</div>


</div>
<?php

if (isset($_COOKIE["Nacsitar"]))
{

include 'database_connection.php';
$user = $_COOKIE["Nacsitar"];

$result = $ireport->query('SELECT  database_id
FROM Personal_Information
WHERE  User_Key = "'.$user.'"  ');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{

}
else
{
    include 'complet_information_mobile.php';
}

}

else {
    header("Location: LogIn");
die();
}
?>
<?php include 'bottom_mobile.php' ?>


<div id="view_group_location_image"></div>
