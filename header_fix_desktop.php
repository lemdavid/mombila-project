



<style>

  #fix_header_container{
    width: 100%;
    float: left;
 display:none;
 top:0px;
 position:fixed;
padding:10px 15px;
padding-top:10px;
 background:linear-gradient(to bottom,#ffffff 5%,#ffffff 100%);

 -webkit-box-shadow:0 0 10px;
   /* For I.E */
   -moz-box-shadow:0 0 10px;
   /* For Mozilla Web Browser */
   border-radius:5px;
   -webkit-border-radius:5px;
   /* For I.E */
   -moz-border-radius:5px;
   /* For Mozilla Web Browser */

}


#header_list_container
{
  Width:10%;
  padding:1%;
  float:left;
  background-color:white;
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

.header_list
{
  Width:15px;
  height:15px;
  object-fit: contain;
  margin-left:20%;
}


.fix_header_list_content {
  display:none;
  float:right;
  position: absolute;
  background-color: White;
  color:black;
  margin-top:20px;
  margin-right:20%;
  width: 260px;
  border: 2px solid white;
  -webkit-box-shadow:0 0 10px;
   /* For I.E */
   -moz-box-shadow:0 0 10px;
   /* For Mozilla Web Browser */
   border-radius:10px 10px 10px 10px;
   -webkit-border-radius:10px 10px 10px 10px;
   /* For I.E */
   -moz-border-radius:10px 10px 10px 10px;
   /* For Mozilla Web Browser */

  z-index: 1;
}

.fix_list
{
 width:100%;
 float:left;
 margin-top:5%;
 font-family: 'Roboto', sans-serif;
  font-size:24px;
  padding:10px;
  font-weight:400;
   cursor:pointer;
}

.fix_list:hover
{
   background-color: lightgray;
}




#Become_a_tourist_guide
{
  width:20%;
  float:left;
  color:white;
  font-family: 'Roboto', sans-serif;
  font-size:18px;
}

#header_logo_container
{
  Width:20%;
  float:left;
  margin-left:4%;
}

#header_logo
{
  Width:100%;
  height:30px;
}


#fix_search_link_container{
    width: 80%;
    float: left;
    margin-left:10%;
    margin-top:2%;
    margin-right:10%;
    padding:10px;
    display:none;
    background-color:white;
  border: 2px solid white;
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

#fix_other_links_container
{
  width: 20%;
    float: left;
    padding:10px 20px ;
    margin-left:10%;
    margin-right:10%;
    background-color:white;
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



#fix_other_links_containers
{
  width: 20%;
    float: left;
    padding:10px 20px ;
    margin-left:10%;
    margin-right:10%;
   font-size:14px;
   display:none;
}






#number_of_item{
width:20%;
margin-left:5%;
bottom:30px;
position:relative;
 background-color:red;
font-size:12px; color:white;
border-radius:50%;
cursor:pointer;
}


#fix_search_list
{
   width: 30%;
    float: left;
   left:10%;
   margin-top:1%;
    margin-right:10%;
    padding:10px;
    display:none;
    background-color:white;
  border: 2px solid white;
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


#fix_list_display_load
{
   width:100%;
   display:none;
   height:100%;
   position:fixed;
    background-color:black;
     opacity:0.3;
}

#fix_Search_list_display_load
{
   width:100%;
   display:none;
   top:22%;
   left:0px;
   height:100%;
   position:fixed;
    background-color:black;
     opacity:0.3;
}


#search_list_form_database
 {
  width:100%;
  float:left;
  margin-top:5%;
  font-size:18px;
  cursor:pointer;
 }


 .search_location_icon
 {
   height:30px;
   width:20px;
   margin-right:3%;
 }


</style>






<script>
$(document).ready(function() {

$("#header_list_container").click(function() {

          $("#Category_list_Load").css("display", "block");
          $("#Category_list").css("display", "block");
});










$("#home_link_container").click(function() {

          window.location="home";


});


  $("#fix_search_link_container").click(function() {

         $("#fix_search_list_load").css("display", "block");
          $("#search_container_mobile").css("display", "block");


});


$("#category_link_container").click(function() {
$("#window_load").css("position", "fixed");
$("#load_icon_container").css("position", "fixed");
  $("#Category_list_Load").css("display", "block");
  $("#Category_list").css("display", "block");


});



    $("#fix_search_input").keyup(function()
    {
        var id=$(this).val();
        var Search =  document.getElementById("fix_search_input").value;
        if (Search == '')
        {
          $("#fix_search_list_load").css("display", "none");
          $("#fix_search_list").css("display", "none");
        }

        else
        {

            $.ajax
                ({
                    type: "POST",
                    url: "fix_get_search.php",
                    data: {search: Search},
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                         document.getElementById("fix_search_list").style.display = 'block';
                         document.getElementById("fix_Search_list_display_load").style.display = 'block';

                          $("#fix_search_list").html(result);
                    }
                });

                }
            });







      $("#fix_submit_search").click(function(){

        if ($("#fix_search_input").val() == '')
      {
             document.getElementById("fix_wrapper_location").style.border = '2px solid red';
      }

      else if ($("#fix_datepicker").val() == '')
      {
             document.getElementById("fix_wrapper_from").style.border = '2px solid red';
      }

      else if ($("#fix_datepicker2").val() == '')
      {
             document.getElementById("fix_wrapper_to").style.border = '2px solid red';
      }

      else
      {
          var search = $("#fix_search_input").val();
          var Date_1 = $("#fix_datepicker").val();
          var Date_2 = $("#fix_datepicker2").val();
          var Number_OF_guest = $("#Number_OF_guest").val();
           search ='Search?Location='+search+'&From='+Date_1+'&To='+Date_2+'&Guest='+Number_OF_guest
                    window.location=search;
      }

                });




               $("#user_login_or_register_open").click(function(){
                $("#login_register_div").css("display", "block");
                });


$("#sign_up_link_container").click(function() {

                   window.location="LogIn";



});


$("#sign_out_link_container").click(function() {
    $("#load_icon_container").css("position", "fixed");


             $.get( "logout.php", function( data ) {
     window.location="home";
});


});





$.get( "get_porches_item.php", function( data ) {
  $( "#number_of_item" ).html( data );
  $( "#sort_number_of_item" ).html( data );
});












});
</script>

<script>
    function login_display() {
  document.getElementById("login_form_load").style.display = 'block';
  document.getElementById("login_form_container").style.display = 'block';
document.getElementById("registration_form_load").style.display = 'none';
document.getElementById("registration_form_container").style.display = 'none';
}


function signup_display() {
  document.getElementById("registration_form_load").style.display = 'block';
  document.getElementById("registration_form_container").style.display = 'block';
  document.getElementById("login_form_load").style.display = 'none';
document.getElementById("login_form_container").style.display = 'none';
}

function fix_list_display() {
  document.getElementById("fix_header_list_content").style.display = 'block';
  document.getElementById("fix_list_display_load").style.display = 'block';

}

function close_fix_list_display() {
  document.getElementById("fix_header_list_content").style.display = 'none';
  document.getElementById("fix_list_display_load").style.display = 'none';

}

function close_fix_Search_list_display() {
  document.getElementById("fix_search_list").style.display = 'none';
  document.getElementById("fix_Search_list_display_load").style.display = 'none';

}


</script>




<style>

  .fix_wrapper_location {
	  max-width: 40%;
    float: left;
    padding:0px 20px ;
    background-color:white;
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



  .fix_wrapper_from {
	  max-width: 20%;
    float: left;
    margin-left:5%;
    padding:0px 20px ;
    background-color:white;
    border-left: 1px solid lightgray;

}
.fix_wrapper_from:hover
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
.fix_wrapper_to {
	  max-width: 20%;
    float: left;
    margin-left:1%;
    border-left: 1px solid lightgray;
    padding:0px 20px ;
    background-color:white;

}

.fix_wrapper_to:hover
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


#fix_submit_search {
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
	font-size: 12px;
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
	font-size: 14px;
	color: #000;
	width: 100%;
	margin-top: 0.5rem;
}
input:focus {outline: none;}
#ui-fix_datepicker-div {
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
.ui-fix_datepicker-calendar thead th {
	padding: 0.25rem 0;
	text-align: center;
	font-size: 18px;
	font-weight: 400;
	color: #78909C;
}
.ui-fix_datepicker-calendar tbody td {
	width: 4.5rem;
	text-align: center;
	padding: 0;
}
.ui-fix_datepicker-calendar tbody td a {
	display: block;
	border-radius: 0.25rem;
	line-height: 2rem;
	transition: 0.3s all;
	color: #546E7A;
	font-size: 14px;
	text-decoration: none;
}
.ui-fix_datepicker-calendar tbody td a:hover {
	background-color: #E0F2F1;
}
.ui-fix_datepicker-calendar tbody td a.ui-state-active {
	background-color: #009688;
	color: white;
}
.ui-fix_datepicker-header a.ui-corner-all {
	cursor: pointer;
	position: absolute;
	top: 0;
	width: 2rem;
	height: 2rem;
	margin: 0.5rem;
	border-radius: 0.25rem;
	transition: 0.3s all;
}
.ui-fix_datepicker-header a.ui-corner-all:hover {
	background-color: #ECEFF1;
}
.ui-fix_datepicker-header a.ui-fix_datepicker-prev {
	left: 0;
	background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==");
	background-repeat: no-repeat;
	background-size: 18px;
	background-position: 50%;
	transform: rotate(180deg);
}
.ui-fix_datepicker-header a.ui-fix_datepicker-next {
	right: 0;
	background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==');
	background-repeat: no-repeat;
	background-size: 18px;
	background-position: 50%;
}
.ui-fix_datepicker-header a>span {
	display: none;
}
.ui-fix_datepicker-title {
	text-align: center;
	line-height: 2rem;
	margin-bottom: 0.25rem;
	font-size: 18px;
	font-weight: 500;
	padding-bottom: 0.25rem;
}
.ui-fix_datepicker-week-col {
	color: #78909C;
	font-weight: 400;
	font-size: 0.75rem;
}
</style>

<script>


function open_search() {
  document.getElementById("fix_search_link_container").style.display = 'block';
  document.getElementById("fix_other_links_container").style.display = 'none';
  document.getElementById("fix_other_links_containers").style.display = 'block';
   document.getElementById("fix_search_input").focus();
}
</script>



<div id="fix_list_display_load" onclick="close_fix_list_display()"></div>


<div id="fix_header_container">

<div id="header_logo_container">
<a href="home"><img src="logo_fix.png" id="header_logo"></img></a>
</div>

<div id="fix_other_links_container">
<input type="text" id="open_fix_search_input" placholder="add" autocomplete="off" placeholder="Where are you going?" OnClick="open_search()">
</div>

<div id="fix_other_links_containers">
<div id="travel_and_tour"> <a href="Search?Location=%20" style="color:black;text-decoration: none;">Travel Guide & Travel Location</a></div>
</div>

<div id="Become_a_tourist_guide"><a href="Location" style="color:#ff0066; text-decoration: none;" >Switch To Host</a></div>

<div id="header_list_container" class="header_list_container" onclick="fix_list_display()">
<img src="list.png" class="header_list"><img src="account.png" class="header_list"> </img>

<div class="fix_header_list_content" id="fix_header_list_content">
 <?php if (isset($_COOKIE["Nacsitar"]))
{ ?>
 <div class="fix_list"><a href="Profile" style="text-decoration: none;">My Profile</a></div>
 <div class="fix_list"><a href="Location" style="text-decoration: none;">My Locations</a></div>
 <div class="fix_list"><a href="Notification" style="text-decoration: none;">Notifications</a></div>
 <div class="fix_list"><a href="Info" style="text-decoration: none;">Edit Profile</a></div>
 <div class="fix_list" id="sign_out_link_container">Log Out</div>
<?php }

else{
    echo '<div class="fix_list"  onclick="login_display()">Log In</div>';
    echo '<div class="fix_list"  onclick="signup_display()">Sign Up</div>';
    echo '<div class="fix_list">Host A Tourist</div>';
}
?>
</div>

</div>



 <div id="fix_Search_list_display_load" onclick="close_fix_Search_list_display()"></div>

<div id="fix_search_link_container">
<div class="fix_wrapper_location" id="fix_wrapper_location">
	<label for="fix_datepickers">Location
		<input type="text" id="fix_search_input" placholder="add" autocomplete="off" placeholder="Where are you going?">
	</label>
	<div id="fix_search_list" style="position:absolute;"></div>
</div>

<div class="fix_wrapper_from" id="fix_wrapper_from">
	<label for="fix_datepickers">Check In
		<input type="date" id="fix_datepicker" autocomplete="off" placeholder="Add Date">
	</label>
</div>


<div class="fix_wrapper_to" id="fix_wrapper_to">
	<label for="fix_datepickers">Check Out
		<input type="date" id="fix_datepicker2" placholder="add" autocomplete="off" placeholder="Add Date">
	</label>
</div>

<div class="fix_wrapper_to">
	<label for="fix_datepickers">Guest
		<input type="text" id="Number_OF_guest" placholder="add" autocomplete="off" placeholder="Adds Guest">
	</label>
</div>


<div id="fix_submit_search">
<center><img src="search_icons.png" height="20px"></img></center>
</div>

</div>


</div>

