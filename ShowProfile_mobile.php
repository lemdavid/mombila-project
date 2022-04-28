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


#deactivate_your_account{
    width: 100%;
    margin-top:5%;
    float: left;
 display:block;
 margin-bottom:20%;
}

.options{
   background-color:white;
   width:30%;
   margin-left:3%;
   margin-top:1%;
   padding:20px 15px;
   font-size:50px;
   float:left;

    -webkit-box-shadow:0 0 5px;
   /* For I.E */
   -moz-box-shadow:0 0 5px;
   /* For Mozilla Web Browser */
   border-radius:10px 10px 10px 10px;
   -webkit-border-radius:10px 10px 10px 10px;
   /* For I.E */
   -moz-border-radius:10px 10px 10px 10px;
   /* For Mozilla Web Browser */
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
     @import url("https://fonts.googleapis.com/css?family=Hind");
/*** Common SCSS ***/
html,
body {
  font-family: "Hind", sans-serif;
  background: #ececec;
  color: #333333;
}

a:action,
a:focus,
a:hover {
  text-decoration: none;
}

.table-content {
  display: table;
  width: 100%;
  margin: 0;
}
.table-content .table-content-cell {
  display: table-cell;
  vertical-align: middle;
}

.icon {
  font-size: 44px;
}

.container {
  width: 100%;
  padding: 30px 0;
  background: #ececec;
}

.notification-container {
  width: 100%;
  background: #f5f5f5;
  position: relative;
  box-shadow: 0px 4px 10px 0px rgba(204, 204, 204, 0.62);
}
.notification-container .notification-list-header {
  background: #ffffff;
  padding: 25px 30px;
  box-shadow: 0px 4px 10px 0px rgba(204, 204, 204, 0.62);
}
.notification-container .notification-list-header .arrow-icon {
  width: 30px;
}
.notification-container .notification-list-header .arrow-icon .icon {
  font-size: 54px;
  font-weight: bold;
  cursor: pointer;
  padding-top: 2px;
  cursor: pointer;
}
.notification-container .notification-list-header .arrow-icon .icon:hover {
  color: #666666;
  background: "transparent";
}
.notification-container .notification-list-header .notification-title {
  font-size: 42px;
  text-align: center;
}
.notification-container .notification-list-header .search-form {
  position: relative;
  text-align: right;
  width: 130px;
  cursor: pointer;
}
.notification-container .notification-list-header .search-form form {
  margin: 0;
}
.notification-container .notification-list-header .search-form .icon {
  cursor: pointer;
}
.notification-container .notification-list-header .search-form .icon:hover {
  color: #666666;
  background: "transparent";
}
.notification-container .notification-list-header input[type=text] {
  height: 130px;
  width: 0px;
  font-size: 48px;
  padding: 0;
  margin: 0;
  position: absolute;
  top: 5px;
  right: 25px;
  border: 0;
  border-radius: 0;
  box-shadow: none;
  transition: width 0.4s cubic-bezier(0, 0.795, 0, 1);
}
.notification-container .notification-list-header .search-form:hover input[type=text],
.notification-container .notification-list-header input[type=text]:focus {
  width: 585px;
  z-index: 1;
  padding-right: 25px;
  border-bottom: 1px solid #bbbbbb;
  cursor: text;
  box-shadow: none;
}
.notification-container .notification-option {
  padding: 25px 20px 20px;
  color: #a8a2a2;
}
.notification-container .notification-option .table-content-cell:first-child {
  font-size: 48px;
}
.notification-container .notification-option .remove-icon {
  cursor: pointer;
  margin-right: 25px;
  opacity: 0.7;
  cursor: pointer;
}
.notification-container .notification-option .remove-icon:hover {
  color: #f05050;
  background: "transparent";
}
.notification-container .notification-option .check-icon {
  cursor: pointer;
  opacity: 0.7;
  cursor: pointer;
}
.notification-container .notification-option .check-icon:hover {
  color: #4caf50;
  background: "transparent";
}
.notification-container .notification-list-box .list-group {
  margin: auto 15px;
  box-shadow: 0px 4px 8px 0px #d8d4d4;
}
.notification-container .notification-list-box .list-group .table-content-cell:nth-child(2) {
  width: 175px;
  text-align: right;
}
.notification-container .notification-list-box .list-group .list-group-item {
  border-radius: 0px;
  padding: 20px 25px;
  overflow: hidden;
  margin-bottom: -1px;
}
.notification-container .notification-list-box .list-group .list-group-item .media-heading {
  color: #666666;
}
.notification-container .notification-list-box .list-group .list-group-item.unread {
  background: #f5f5f5;
  font-weight: bold;
}
.notification-container .notification-list-box .list-group .list-group-item.unread .media-heading {
  color: #333333;
  font-weight: inherit;
}
.notification-container .notification-list-box .list-group .list-group-item:hover .list-time {
  display: none;
}
.notification-container .notification-list-box .list-group .list-group-item:hover .list-remove-btn {
  right: 0;
}
.notification-container .notification-list-box .list-group .media {
  width: 82%;
}
.notification-container .notification-list-box .list-group .media-left {
  padding-right: 15px;
}
.notification-container .notification-list-box .list-group .media-left img {
  width: 150px;
  height: 150px;
  max-width: 150px;
}
.notification-container .notification-list-box .list-group .media-left .text-media-object {
  background: #6747cd;
  width: 100%;
  height: 150px;
  border-radius: 100%;
  text-align: center;
  line-height: 35px;
  color: #ffffff;
  font-weight: bold;
  padding: 10px;
  font-size: 48px;
}
.notification-container .notification-list-box .list-group .media-body {
  padding-top: 7px;
}
.notification-container .notification-list-box .list-group .media-body .notification-location {
  color: #a2a2a2;
}
.notification-container .notification-list-box .list-group .notification-time {
  color: #cccccc;
}
.notification-container .notification-list-box .list-group .list-remove-btn {
  position: absolute;
  right: -110px;
  width: 200px;
  top: 0;
  background: #f05050;
  padding: 35px 0;
  text-align: center;
  font-size: 46px;
  color: #ffffff;
  transition: 500ms cubic-bezier(0.58, 0.54, 0.41, 1.38);
}

/*** Default scrolling customize style ***/
.custom-scrollBar {
  width: 100%;
  height:1200px;
  overflow: hidden;
}

.custom-scrollBar:hover {
  overflow-y: auto;
}

.custom-scrollBar::-webkit-scrollbar {
  width: 6px;
}

.custom-scrollBar::-webkit-scrollbar-thumb {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  background-color: #ececec;
}
.custom-scrollBar::-webkit-scrollbar-thumb:hover {
  background-color: #cccccc;
}


.Accept_Privacy_viewing{
     width:40%;
  margin-top:2%;
  margin-left:5%;
  margin-bottom:2%;
  padding:10px 0px 10px 0px;
  background-color:#00b300;
  font-family: 'Roboto', sans-serif;
  font-size: 48px;
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
.Accept_Privacy_viewing:hover{
    background-color:#333333;
}

.Ignore_Privacy_viewing{
     width:40%;
  margin-top:2%;
  margin-left:5%;
  margin-bottom:2%;
  padding:10px 0px 10px 0px;
  background-color:#ff0066;
  font-family: 'Roboto', sans-serif;
  font-size: 48px;
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
.Ignore_Privacy_viewing:hover{
    background-color:#333333;
}


</style>

<script>
$(document).ready(function() {



$('.Ignore_Privacy_viewing').click(function(){

var value = $(this).attr('value');
var action = 'ignore';
         $.ajax
                ({
                    type: "POST",
                    url: "confirm_view_profile.php",
                    data: {Notification: value, action: action},
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                        location.reload();

                    }
                });


});


$('.Accept_Privacy_viewing').click(function(){

var value = $(this).attr('value');
var action = 'Accept';
         $.ajax
                ({
                    type: "POST",
                    url: "confirm_view_profile.php",
                    data: {Notification: value, action: action},
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                        location.reload();

                    }
                });


});




});
</script>



<div id="body_center">


<div class="container">
  <div class="notification-container">
  <!--     Notification list header -->
    <div class="notification-list-header table-content">
      <div class="arrow-icon table-content-cell">
        <i class="fa fa-angle-left icon"></i>
      </div>
      <div class="notification-title table-content-cell"> Notification </div>
        <div class="search-form table-content-cell">
            <form action="" autocomplete="on">
              <input class="search-field" name="search" type="text" placeholder="Search...">
               <i id="js-show-search-form" class="fa fa-search icon"></i>
            </form>
      </div>
    </div>
  <!--     Notification Options -->
    <div class="notification-option table-content">
      <div class="table-content-cell text-right">
        <i class="fa fa-trash icon remove-icon"></i>
        <i class="fa fa-check icon check-icon"></i>
      </div>
    </div>
<!--     Notification list container/box -->
    <div class="notification-list-box">
      <div class="custom-scrollBar">
        <div class="list-group">


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





function time_diff_string($from, $to, $full = false) {
    $from = new DateTime($from);
    $to = new DateTime($to);
    $diff = $to->diff($from);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}




  $result = $ireport->query('SELECT
  Request.database_id as database_id,
  Request.tourist_guide_key as tourist_guide_key,
  Request.Request_statue as Request_statue,
  Request.Request_date as Request_date,
  Request.User_Key as Tourist_Key,



(SELECT (Guide_First_name.First_name) FROM Personal_Information as Guide_First_name
WHERE Request.User_Key = Guide_First_name.User_Key ORDER BY Guide_First_name.database_id DESC LIMIT 1)
as Guide_First_name,


(SELECT (Guide_Last_name.Last_name) FROM Personal_Information as Guide_Last_name
WHERE Request.User_Key = Guide_Last_name.User_Key ORDER BY Guide_Last_name.database_id DESC LIMIT 1)
as Guide_Last_name,

(SELECT (profile_image.database_id) FROM profile_image as profile_image
WHERE Request.User_Key = profile_image.User_Key LIMIT 1)
as profile_image,

(SELECT (profile_image_root.image_root) FROM profile_image as profile_image_root
WHERE Request.User_Key = profile_image_root.User_Key LIMIT 1)
as profile_image_root


FROM Request_For_Contact as Request
WHERE  Request.tourist_guide_key = "'.$User.'" AND Request.Request_statue = "1"
 GROUP BY Request.User_Key ORDER BY Request.database_id DESC');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{
   // will selected information is output
        while ( $row = $result->fetch_assoc())
        {
           $Tourist_Key = htmlentities($row['Tourist_Key']);
           $database_id = htmlentities($row['database_id']);
           $Request_statue = htmlentities($row['Request_statue']);
           $Notification_date = htmlentities($row['Request_date']);
           $now =  date("Y-m-d H:i:s");
           $Notification_date = time_diff_string($Notification_date, $now);
           $Guide_First_name = htmlentities($row['Guide_First_name']);
           $Guide_Last_name = htmlentities($row['Guide_Last_name']);
           $Guide_Last_name = htmlentities($row['Guide_Last_name']);
           $profile_image = htmlentities($row['profile_image']);
           $profile_image_root = htmlentities($row['profile_image_root']);

    ?>

         <div class="list-group-item table-content">
            <div class="media table-content-cell">
                <div class="media-left">
                    <img class="media-object img-circle" src="<?php echo ''.$profile_image_root.'/'.$profile_image.'.jpg'; ?>">
                </div>
                <div class="media-body">
                  <h4 class="media-heading" style="font-size:50px;"><?php echo $Guide_First_name.' '.$Guide_Last_name.' Requesting For Profile Details' ?></h4>
                  <span class="notification-location" style="font-size:40px;">Profile Details Including Phone Number, Email, Address Etc... </span>
                </div>
                <button id="" class="Ignore_Privacy_viewing" value="<?php echo $database_id; ?>" style="margin-top:5%; margin-bottom:5%;">Ignore</button>
                <button id="" class="Accept_Privacy_viewing" value="<?php echo $database_id; ?>" style="margin-top:5%; margin-bottom:5%;">Accept</button>

              </div>
            <div class="notification-time table-content-cell"><?php echo $Notification_date ?></div>
          </div>

<?php


    }

    }?>

         </div>
    </div>
    </div>
  </div>
</div>



</div>



<?php


$availability_statue = '2';

$result = $ireport->query('UPDATE Check_Notification SET
Notification_Statue = "'.mysqli_real_escape_string($ireport, $availability_statue).'"
WHERE
 User_Key = "'.$User.'"  AND Notification_action = "Requesting For Profile Details"');




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

?>

<?php include 'bottom_mobile.php'; ?>

