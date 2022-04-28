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
 font-size:50px;
 margin-bottom:20%;
}

.options{
   background-color:white;
   width:90%;
   margin-left:5%;
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





<div id="body_center">

<div id="flexible_display_container" class="options">
    <a href="Info" style="text-decoration: none;">
   <div id="text_label"> <center><b>Personal Info <img src="next_icons.png" width="15px" height="15px"></img></b></center></br>
       Provide Personal Detail And How We Can Reach You.
</div>
</a>
</div>


<div id="flexible_display_container" class="options">
   <div id="text_label"> <center><b>Login And Security <img src="next_icons.png" width="15px" height="15px"></img> </b></center></br>
       Update Your Password And Secure Your Account.
</div>
</div>


<div id="flexible_display_container" class="options">
   <div id="text_label"> <center><b>Privacy And Sharing <img src="next_icons.png" width="15px" height="15px"></img> </b></center></br>
       Control Connected App, What You Share, And Who Sees it.
</div>
</div>

<div id="flexible_display_container" class="options">
   <div id="text_label"> <center><b>Notification <img src="next_icons.png" width="15px" height="15px"></img></b></center></br>
       Chose Notification Preference And How You Want To Be Contacted.
</div>
</div>

<div id="flexible_display_container" class="options">
     <a href="Location" style="text-decoration: none;" >
   <div id="text_label"> <center><b>My Locations <img src="next_icons.png" width="15px" height="15px"></img></b></center></br>
      See Your Location And Add more location To Get More Engagement
 </a>
</div>
</div>

<div id="deactivate_your_account"><center>Need To DeActivate Your Account?<br></br>Take Care Of That Now</center></div></br>
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

?>

<?php include 'bottom_mobile.php'; ?>

