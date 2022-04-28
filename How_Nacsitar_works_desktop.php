

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
    <h1><center><b>You`re just 3 steps away from your next getaway<br></br></b></center></h1>
    </div>
<div style="width:100%; float:left; border-bottom:2px solid lightgray; padding-bottom:100px; margin-bottom:20px;">

<div style="width:40%; margin-right:10%; float:left;"><br></br>
<b>1. Browse</b></br>
Start by exploring Stays or Experiences. Apply filters like entire homes, self check-in, or pets allowed to narrow your options. You can also save favorites to a wishlist.
</div>

<div style="width:50%; float:left;">
<img src="how_nacsitar_works1.gif"></img>
</div>

</div>


<div style="width:100%; float:left; border-bottom:2px solid lightgray; padding-bottom:100px; margin-bottom:20px;">

<div style="width:40%; margin-right:10%; float:left;"><br></br>
<img src="how_nacsitar_works2.gif" width="100%"></img>
</div>

<div style="width:50%; float:left;">
    <br></br>
<b>2. Book</b></br>
Once you`ve found what you`re looking for, learn about your host, read past guest reviews, and ask for availability.
</div>
</div>


<div style="width:100%; float:left; margin-bottom:20px; border-bottom:2px solid lightgray; padding-bottom:100px;">

<div style="width:40%; margin-right:10%; float:left;"><br></br>
<b>3. Go</b></br>
You`re all set! Connect with your host through the app for local tips, questions or advice. You can also contact Nacsitar anytime for additional support.
</div>

<div style="width:50%; float:left;">
<img src="how_nacsitar_works3.gif" width="150px" height="250px;"></img>
</div>

</div>




</div>


<?php include 'bottom_desktop.php' ?>

