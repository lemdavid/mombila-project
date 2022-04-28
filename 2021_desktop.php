

 <style>
  #body_center{
    width: 80%;
    margin-top:7%;
    margin-left:10%;
    float: left;
 display:block;
 margin-bottom:20%;
 font-size:16px;
 background-color:white;
}

a {
  text-decoration: none;
  color: black;
}




</style>


<script>
$(document).ready(function() {


$.get( "home_diff1a75splay_include_desktop.php?scroll_load=1", function( data ) {
  $( "#body_center" ).html( data );
});


});
</script>



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
                         else if (check_successfull == 'wrong')
                         {
                          document.getElementById(action_button).innerHTML = 'Check Availability';
                          document.getElementById("login_form_load").style.display = 'block';
                          document.getElementById("login_form_container").style.display = 'block';
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

<div style="width:100%; float:left; margin-bottom:20px;">
    <h1><center><b>Nacsitar 2021<br></br></b></center></h1>
    <h1><center><b>Introducing 10+ upgrades across our entire service<br></br></b></center></h1>
    </div>
<div style="width:100%; float:left; border-bottom:2px solid lightgray; padding-bottom:100px; margin-bottom:20px;">



<div style="width:30%; margin-right:5%; float:left;"><br></br>
<b>1. Flexible destinations</b></br></br>
A new way for guests to discover unique stays they might have otherwise missed.<br></br><br>
<image src="20211.png" width="200px" height="350px"></image>
</div>

<div style="width:30%; margin-right:5%; float:left;"><br></br>
<b>2. Flexible matching</b></br></br>
Includes listings that lie just outside a specified search, to show guests more options.<br></br>
<image src="20212.png" width="200px" height="350px"></image>
</div>

<div style="width:30%; margin-right:0%; float:left;"><br></br>
<b>3. Flexible dates</b></br></br>
Guests can now search for new options, from a weekend getaway to stays for a month or more.<br></br>
<image src="20212.png" width="200px" height="350px"></image>
</div>



</div>


<div style="width:100%; float:left;  padding-bottom:100px; margin-bottom:20px;">



<div style="width:30%; margin-right:5%; float:left;"><br></br>
<b>4. Curated Wishlists</b></br></br>
Curated collections of inspiring stays and Experiences-starting with Greatest Outdoors.<br></br>
</div>

<div style="width:30%; margin-right:5%; float:left;"><br></br>
<b>5. Arrival guide</b></br></br>
The arrival information guests need, from directions to wifi, is now in one place.<br></br>
</div>

<div style="width:30%; margin-right:0%; float:left;"><br></br>
<b>6.Inline sign-up</b></br></br>
First-time guests can now easily create an Airbnb account during the initial booking process.<br></br>
</div>


<div style="width:30%; margin-right:5%; float:left;"><br></br>
<b>7. Filter bar</b></br></br>
The most popular filters are now more visible when searching for your ideal listing.<br></br>
</div>

<div style="width:30%; margin-right:5%; float:left;"><br></br>
<b>8. Updated filter menu</b></br></br>
New and enhanced search parameters for increased clarity and simplicity when searching.<br></br>
</div>

<div style="width:30%; margin-right:0%; float:left;"><br></br>
<b>9.Seasonally-aware filters</b></br></br>
Contextually relevant filters appear when in season-for example, ski-in/out.<br></br>
</div>

<div style="width:30%; margin-right:5%; float:left;"><br></br>
<b>10. New attributes</b></br></br>
Ocean view? Stationary bike? These useful details are now called out in the listings.<br></br>
</div>

<div style="width:30%; margin-right:5%; float:left;"><br></br>
<b>11. Focus on accessibility</b></br></br>
An increase in the number of stays and Experiences on Nacsitar with accessibility features.<br></br>
</div>

<div style="width:30%; margin-right:0%; float:left;"><br></br>
<b>12.The Greatest Outdoors</b></br></br>
Stays and Experiences that guide your escape to natural surroundings.<br></br>
</div>

<div style="width:30%; margin-right:5%; float:left;"><br></br>
<b>13. Experiences Host resources</b></br></br>
Updated "Becoming a Host" page has new areas and resources for Experiences Hosts.<br></br>
</div>

<div style="width:30%; margin-right:5%; float:left;"><br></br>
<b>14. FAuto-filled details</b></br></br>
Property details sourced from public real estate data helps Hosts quickly list their space.<br></br>
</div>

<div style="width:30%; margin-right:0%; float:left;"><br></br>
<b>15.Auto-arranging photos</b></br></br>
Advanced computer vision models analyze photos and reorder them for optimal layout.<br></br>
</div>


<div style="width:30%; margin-right:5%; float:left;"><br></br>
<b>16. Redesigned Help Center</b></br></br>
An easier way to navigate Help Center with comprehensive support for guests and Hosts.<br></br>
</div>

<div style="width:30%; margin-right:5%; float:left;"><br></br>
<b>17.Smart solutions</b></br></br>
Personalized guidance helps guests and Hosts easily solve common issues in a few steps.<br></br>
</div>

<div style="width:30%; margin-right:0%; float:left;"><br></br>
<b>18.On-trip help</b></br></br>
A better way to support guests and Hosts during their trip with more relevant information.<br></br>
</div>



</div>




</div>


<?php include 'bottom_desktop.php' ?>

