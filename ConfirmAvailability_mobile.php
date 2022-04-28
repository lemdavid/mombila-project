

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
  font-size: 48px;
  font-weight: 400;

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
  height: 350px;
  float:left;
  object-fit: fill;
  object-position: center right;
}

#location_image_display {
  width: 100%;
  float:left;
  object-fit: fill;
  object-position: center right;
}
#main_location_image_display {
  width: 100%;
  float:left;
  object-fit: fill;
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
     width:40%;
  margin-top:2%;
  margin-left:5%;
  margin-bottom:2%;
  padding:10px 0px 10px 0px;
  background-color:#00b300;
  font-family: 'Roboto', sans-serif;
  font-size: 54px;
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

.cancel_availability_button{
     width:40%;
  margin-top:2%;
  margin-left:5%;
  margin-bottom:2%;
  padding:10px 0px 10px 0px;
  background-color:#ff0066;
  font-family: 'Roboto', sans-serif;
  font-size: 54px;
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
.cancel_availability_button:hover{
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
	font-size: 48px;
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
	font-size: 48px;
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
	font-size: 48px;
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
	font-size: 54px;
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
	background-size: 48px;
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
	font-size: 48px;
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

  var  tourist_key = location+'tourist_key';
  tourist_key =  document.getElementById(tourist_key).value;


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
                    data: {location: location, from: from, to: to, gust: gust, action:action, tourist_key:tourist_key},
                    cache: false,
                    success: function(result)
                    {
                        alert(result);
                        var check_successfull = $.trim(result);
                    }
                });

            }// end of else address is input
});

$('.cancel_availability_button').click(function(){
var location = $(this).val();
var action  = location+'button_cancel';
var action_button  = location+'button_cancel';
 action = document.getElementById(action).innerHTML;

var  from = location+'from';
var  froms = location+'from';
  from =  document.getElementById(from).value;

  var  to = location+'to';
  var  tos = location+'to';
  to =  document.getElementById(to).value;

  var  gust = location+'gust';
  gust =  document.getElementById(gust).value;

  var  tourist_key = location+'tourist_key';
  tourist_key =  document.getElementById(tourist_key).value;


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
                    data: {location: location, from: from, to: to, gust: gust, action:action, tourist_key:tourist_key},
                    cache: false,
                    success: function(result)
                    {
                        alert(result);
                        var check_successfull = $.trim(result);
                    }
                });

            }// end of else address is input
});



$('.view_image').click(function(){

var value = $(this).attr('name');
         $.ajax
                ({
                    type: "POST",
                    url: "get_location_images.php",
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

<?php
include 'database_connection.php';



if (isset($_COOKIE["Nacsitar"]))
 {
    $User = $_COOKIE["Nacsitar"];
 }
 else
 {
     $User = 'no user';
 }


$result = $ireport->query('SELECT
  Availability.database_id as database_id,
  Availability.from_date as from_date,
  Availability.to_date as to_date,
  Availability.number_of_guest as number_of_guest,
  Availability.User_Key as tourist_key,
  Availability.availability_statue as available_location,

  (SELECT (database_ids.database_ids) FROM Your_location as database_ids
WHERE Availability.location = database_ids.database_ids LIMIT 1)
as database_ids,

(SELECT (database_id.database_id) FROM Your_location as database_id
WHERE Availability.location = database_id.database_ids LIMIT 1)
as database_id,

(SELECT (image_root.image_root) FROM Your_location as image_root
WHERE Availability.location = image_root.database_ids LIMIT 1)
as image_root,

(SELECT (image_group.image_group) FROM Your_location as image_group
WHERE Availability.location = image_group.database_ids LIMIT 1)
as image_group,

(SELECT (location_name.location_name) FROM Your_location as location_name
WHERE Availability.location = location_name.database_ids LIMIT 1)
as location_name,

(SELECT (location_address.location_address) FROM Your_location as location_address
WHERE Availability.location = location_address.database_ids LIMIT 1)
as location_address,

(SELECT (profile_images.database_id) FROM profile_image as profile_images
WHERE Availability.User_Key = profile_images.User_Key LIMIT 1)
as profile_images,

(SELECT (image_roots.image_root) FROM profile_image as image_roots
WHERE Availability.User_Key = image_roots.User_Key LIMIT 1)
as image_roots,

(SELECT (Guide_name.First_name) FROM Personal_Information as Guide_name
WHERE Availability.User_Key = Guide_name.User_Key ORDER BY Guide_name.database_id DESC LIMIT 1)
as Guide_name,


(SELECT (Guide_year.registration_date) FROM Personal_Information as Guide_year
WHERE Availability.User_Key = Guide_year.User_Key ORDER BY Guide_year.database_id DESC LIMIT 1)
as Guide_year,

(SELECT count(number_of_location.location_name) FROM Your_location as number_of_location
WHERE Availability.User_Key = number_of_location.User_Key LIMIT 1)
as number_of_location


FROM Check_Availability as Availability
WHERE  Availability.tourist_guide_key = "'.$User.'" ');


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
         $number_of_location = htmlentities($row['number_of_location']);
         $available_location = htmlentities($row['available_location']);
         $Guide_year = htmlentities($row['Guide_year']);
         $tourist_key = htmlentities($row['tourist_key']);

$From = $row['from_date'];
$From =  new DateTime($From);
$From =   date_format($From, 'Y-m-d');
$To = $row['to_date'];
$To =  new DateTime($To);
$To =   date_format($To, 'Y-m-d');
$Guest = $row['number_of_guest'];
         $Guide_year = new DateTime($Guide_year);
         $Guide_year = date_format($Guide_year, '   F Y  ');
         $image_1 = $image_root.$database_ids.$image_group.'0.jpg';
         $image_2 = $image_root.$database_ids.$image_group.'1.jpg';
         $image_3 = $image_root.$database_ids.$image_group.'2.jpg';
         $image_4 = $image_root.$database_ids.$image_group.'3.jpg';
         $image_5 = $image_root.$database_ids.$image_group.'4.jpg';



          if ($available_location == '1')
         {
             $available_location = 'I`Am Available';
         }

         else if ($available_location == '2')
         {
             $available_location = 'Approved';
         }
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


       $profile_link = $profile_images;
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
      echo '<div id="tourist_guide_container" style="width:100%; margin-top:2%; float:left;">';
    echo  '<div id="tourist_guide_profile_image_container"><img src="'.$image_roots.'/'.$profile_images.'.jpg" id="location_profile_imae"> </img></div>';
    echo  '<div id="tourist_guide_profile_info_container"><br>Meet Your Tourist, <b> '.$Guide_name.'</b>
    <div id="tourist_guide_container" style="width:100%; font-size:40px; float:left;">Join NACSITAR Since  '.$Guide_year.'
    </div> </div>';
   echo '</div> </a>';

   echo '<div id="tourist_guide_connect_container" style="width:100%; margin-top:2%; float:left;">';
        echo '<div id="contact_tourist">
            <div style="width:50%; float:left;">
    <div class="wrapper_froms" id="wrapper_from" style="width:100%;">
	<label for="datepickerss">Check In
		<input type="date" id="'.$tourist_location_identity_from.'" autocomplete="off" value="'.$From.'" placeholder="Add Date">
	</label>
</div>
</div>
            <div style="width:50%; float:left;"><div class="wrapper_tos" id="wrapper_from" style="width:100%;">
	<label for="datepickersss">Check Out
		<input type="date" id="'.$tourist_location_identity_to.'" autocomplete="off" value="'.$To.'" placeholder="Add Date">
	</label>
</div></div>
        </div>';
    echo '<div id="contact_tourist">
        <div class="wrapper_tos" style="width:100%;">
	<label for="datepickers">Guest
		<input type="number" id="'.$tourist_location_identity_guste.'" placholder="add" autocomplete="off" value="'.$Guest .'"   placeholder="Adds Guest">
	</label>
</div> </div>';
echo '<button id="'.$tourist_location_identity_button_cancel.'" class="cancel_availability_button" value="'.$tourist_location_identity_name.'" style="margin-top:5%; margin-bottom:5%;">Not Available</button>';
echo '<button id="'.$tourist_location_identity_button.'" class="check_availability_button" value="'.$tourist_location_identity_name.'" style="margin-top:5%; margin-bottom:5%;">'.$available_location.'</button>';
   echo '</div>';

       echo '</div>';
        // all location info container end
}


 }



 $availability_statue = '2';

$result = $ireport->query('UPDATE Check_Notification SET
Notification_Statue = "'.mysqli_real_escape_string($ireport, $availability_statue).'"
WHERE
 User_Key = "'.$User.'"  AND Notification_action = "Checking Avalibility"');



 ?>


</div>


<?php include 'bottom_mobile.php' ?>

<div id="view_group_location_image"></div>
