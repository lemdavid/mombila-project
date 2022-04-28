

 <style>
  #body_center{
    width: 100%;
    float: left;
 display:block;
}

#flexible_display_container
{
  width:90%;
  float:left;
  margin-left:5%;
  margin-top:5%;
  font-family: 'Roboto', sans-serif;
  font-size: 28px;
  font-weight: 400;
  color: white;
}

#tourist_guid_display_container
{
  width:90%;
  float:left;
  margin-left:5%;
  margin-top:2%;
  font-family: 'Roboto', sans-serif;
  font-size: 28px;
  font-weight: 400;
  color: white;
}

#text_label
{
 width:100%
}
.home_link_button {
  width:96%;
  margin-top:2%;
  padding:10px 0px 10px 0px;
  background-color:#fff;
  font-family: 'Roboto', sans-serif;
  font-size: 44px;
  font-weight: 400;
  color: black;
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


$.get( "home_advert_mobile.php", function( data ) {
  $( "#home_advert" ).html( data );
});


});
</script>





<div id="body_center">

<div id="flexible_display_container">
   <div id="text_label"> <center>Not sure where to go? Perfect.</center></div>
    <a href="Search?Location=%20" style="color:white; text-decoration: none;">
<button id="instant_shopping_proceed_to_Check_out" class="home_link_button" name="instant_shopping_submit"> I`Am Flexible </button>
</a>
</div>

<div id="tourist_guid_display_container">
   <div id="text_label"> <center>I am A Tourist Guide</center></div>
   <a href="Location" style="color:#ff0066; text-decoration: none;">
<button id="instant_shopping_proceed_to_Check_out" class="home_link_button" name="instant_shopping_submit">Switch To Hosting</button>
</a>
</div>



<div  id="home_advert" style="background-color:white; float:left; padding:20px; width:100%; margin-top:5%;">


</div>




</div>



<?php include 'bottom_mobile.php' ?>


