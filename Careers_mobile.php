

 <style>
  #body_center{
    width: 80%;
    margin-top:400px;
    margin-left:10%;
    float: left;
 display:block;
 margin-bottom:20%;
 font-size:56px;
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
    <h1><center><b>Create a world where anyone can belong anywhere<br></br></b></center></h1>
    </div>
<div style="width:100%; float:left; border-bottom:2px solid lightgray; padding-bottom:100px; margin-bottom:20px;">

It`s an audacious, incredibly rewarding mission that our increasingly diverse team is dedicated to achieving.

Nacsitar is built around the idea that everyone should be able to take the perfect trip, including where they stay,
 what they do, and who they meet. To that end, we empower millions of people around the world to use their
 spaces, passions, and talents to become entrepreneurs.
Exciting challenges lie ahead-new regions, technologies, and businesses. Guided by our four core values,
we`ll meet these challenges creatively and with the support of our global community. Join us!

<br></br>
<h1>Reasonable accommodation</h1>
Nacsitar values diversity & belonging and is proud to be an Equal Employment Opportunity employer.
 All individuals seeking employment at Airbnb are considered without regard to race, color, religion,
  national origin, age, sex, marital status, ancestry, physical or mental disability, veteran status,
   gender identity, sexual orientation, or any other legally protected characteristic. We are committed
    to providing reasonable accommodations for qualified applicants with disabilities in our job application
     and recruitment process.
</div>


<h3>Note There is no Job Vacancy Yet in Nacsitar We will Notifies all user when we are recruiting. </h3>

</div>


<?php include 'bottom_mobile.php' ?>

