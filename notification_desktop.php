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
    margin-top:5%;
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
   font-size:20px;
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


$.get( "get_unread_notification.php?scroll_load=1", function( data ) {
  $( "#unread_notification" ).html( data );
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
  font-size: 24px;
}

.container {
  width: 100%;
  padding: 30px 0;
  background: #ececec;
}

.notification-container {
  width: 80%;
  margin: 0 auto;
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
  font-size: xx-large;
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
  font-size: 22px;
  text-align: center;
}
.notification-container .notification-list-header .search-form {
  position: relative;
  text-align: right;
  width: 30px;
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
  height: 30px;
  width: 0px;
  font-size: 18px;
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
  width: 385px;
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
  font-size: 18px;
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
  width: 75px;
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
  width: 50px;
  height: 50px;
  max-width: 50px;
}
.notification-container .notification-list-box .list-group .media-left .text-media-object {
  background: #6747cd;
  width: 100%;
  height: 50px;
  border-radius: 100%;
  text-align: center;
  line-height: 35px;
  color: #ffffff;
  font-weight: bold;
  padding: 10px;
  font-size: 18px;
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
  width: 100px;
  top: 0;
  background: #f05050;
  padding: 35px 0;
  text-align: center;
  font-size: 16px;
  color: #ffffff;
  transition: 500ms cubic-bezier(0.58, 0.54, 0.41, 1.38);
}

/*** Default scrolling customize style ***/
.custom-scrollBar {
  width: 100%;
  height:500px;
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

</style>

<script>
$(document).ready(function() {



$('.list-remove-btn').click(function(){
var value = $(this).attr('name');
         $.ajax
                ({
                    type: "POST",
                    url: "delete_notification.php",
                    data: {Notification: value},
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
      <div class="table-content-cell"> <i id="unread_notification"></i> messages unread </div>
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
  Notification.database_id as database_id,
  Notification.Sender_User_key as Sender_User_key,
  Notification.Notification_action as Notification_action,
  Notification.Notification_Reference as Notification_Reference,
  Notification.Notification_Statue as Notification_Statue,
  Notification.Notification_date as Notification_date,


  (SELECT (Guide_First_name.First_name) FROM Personal_Information as Guide_First_name
WHERE Notification.Sender_User_key = Guide_First_name.User_Key ORDER BY Guide_First_name.database_id DESC LIMIT 1)
as Guide_First_name,

(SELECT (Guide_Last_name.Last_name) FROM Personal_Information as Guide_Last_name
WHERE Notification.Sender_User_key = Guide_Last_name.User_Key ORDER BY Guide_Last_name.database_id DESC LIMIT 1)
as Guide_Last_name,

(SELECT (profile_image.database_id) FROM profile_image as profile_image
WHERE Notification.Sender_User_key = profile_image.User_Key LIMIT 1)
as profile_image,

(SELECT (profile_image_root.image_root) FROM profile_image as profile_image_root
WHERE Notification.Sender_User_key = profile_image_root.User_Key LIMIT 1)
as profile_image_root




FROM Check_Notification as Notification
WHERE  Notification.User_Key = "'.$User.'"
 GROUP BY Notification.database_id ORDER BY Notification.database_id DESC LIMIT 5');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{
   // will selected information is output
        while ( $row = $result->fetch_assoc())
        {
           $Sender_User_key = htmlentities($row['Sender_User_key']);
           $database_id = htmlentities($row['database_id']);
           $Notification_action = htmlentities($row['Notification_action']);
           $Notification_Statue = htmlentities($row['Notification_Statue']);
           $Notification_Reference = htmlentities($row['Notification_Reference']);
           $Notification_date = htmlentities($row['Notification_date']);
           $now =  date("Y-m-d H:i:s");
           $Notification_date = time_diff_string($Notification_date, $now);
           $Guide_First_name = htmlentities($row['Guide_First_name']);
           $Guide_Last_name = htmlentities($row['Guide_Last_name']);
           $Guide_Last_name = htmlentities($row['Guide_Last_name']);
           $profile_image = htmlentities($row['profile_image']);
           $profile_image_root = htmlentities($row['profile_image_root']);
           $unread_notification = htmlentities($row['unread_notification']);

           if($Notification_action == 'Checking Avalibility')
           {
               $link = 'ConfirmAvailability';
           }

           else if($Notification_action == 'Requesting For Profile Details')
           {
               $link = 'ShowProfile';
           }

      else if($Notification_action == 'Not Available')
           {
               $link = '#';
           }



     if ($Notification_Statue == '2')
     {
    ?>

         <div class="list-group-item table-content">
          <a href="<?php echo $link; ?>" style="text-decoration: none;">
            <div class="media table-content-cell">
                <div class="media-left">
                    <img class="media-object img-circle" src="<?php echo ''.$profile_image_root.'/'.$profile_image.'.jpg'; ?>">
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><?php echo $Guide_First_name.' '.$Guide_Last_name.' '.$Notification_action ?></h4>
                  <span class="notification-location"> <?php echo $Notification_Reference ?> </span>
                </div>
              </div>
            <div class="notification-time table-content-cell"><?php echo $Notification_date ?></div> </a>
            <div class="list-remove-btn table-content-cell" name="<?php echo $database_id; ?>"> Delete </div>
            </div>

<?php }

if ($Notification_Statue == '1')

{
     ?>
          <div class="list-group-item table-content unread">
          <a href="<?php echo $link; ?>" style="text-decoration: none;">
            <div class="media table-content-cell">
                <div class="media-left">
                    <img class="media-object img-circle" src="<?php echo ''.$profile_image_root.'/'.$profile_image.'.jpg'; ?>">
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><?php echo $Guide_First_name.' '.$Guide_Last_name.' '.$Notification_action ?></h4>
                  <span class="notification-location"><?php echo $Notification_Reference ?>  </span>
                </div>
              </div>
            <div class="notification-time table-content-cell"><?php echo $Notification_date ?> </div> </a>
            <div class="list-remove-btn table-content-cell" name="<?php echo $database_id; ?>" > Delete </div>
            </div>


<?php
}

    }

    }?>

         </div>
    </div>
    </div>
  </div>
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
    include 'complet_information.php';
}

}

?>

<?php include 'bottom_desktop.php'; ?>

