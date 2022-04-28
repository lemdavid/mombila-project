
<style>
    body
    {
     margin:0px;
      background: url(tourism6.JPG) no-repeat center center fixed;
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
    }
  #header_container{
    width: 100%;
    float: left;
    padding:10px;
 display:block;

 -webkit-box-shadow:0 0 2px;
   /* For I.E */
   -moz-box-shadow:0 0 2px;
   /* For Mozilla Web Browser */
   border-radius:5px;
   -webkit-border-radius:2px;
   /* For I.E */
   -moz-border-radius:2px;
   /* For Mozilla Web Browser */
   margin-top:10px;

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


.header_list_content {
width: 100%;
  display:none;
  float:right;
  position: absolute;
  background-color: White;
  color:black;
  margin-top:20px;
  left:83%;
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

.list
{
 width:100%;
 float:left;
 margin-top:1%;
 font-family: 'Roboto', sans-serif;
  font-size:24px;
  padding:10px;
  font-weight:400;
   cursor:pointer;
}

.list:hover
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
  margin-right:4%;
}

#header_logo_container
{
  Width:20%;
  float:left;
  margin-left:1%;
}

#header_logo
{
  Width:100%;
  height:30px;
}


#search_link_container{
    width: 80%;
    float: left;
    margin-left:10%;
    margin-right:10%;
    padding:10px;
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

#other_links_container
{
 width:40%;
 float:left;
 font-family: 'Roboto', sans-serif;
  font-size:16px;
  color:white;
  text-align:center;
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


#search_list
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

a{
  border:none;
  outline:none;
  text-decoration:none;
  color:inherit;
  -webkit-tap-highlight-color: white;
}

#list_display_load
{
   width:100%;
   display:none;
   height:100%;
   position:fixed;
    background-color:black;
     opacity:0.1;
}

#Search_list_display_load
{
   width:100%;
   display:none;
   top:25%;
   height:100%;
   position:fixed;
    background-color:black;
     opacity:0.1;
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


  $("#search_link_container").click(function() {

         $("#search_list_load").css("display", "block");
          $("#search_container_mobile").css("display", "block");


});


$("#category_link_container").click(function() {
$("#window_load").css("position", "fixed");
$("#load_icon_container").css("position", "fixed");
  $("#Category_list_Load").css("display", "block");
  $("#Category_list").css("display", "block");


});



    $("#search_input").keyup(function()
    {
        var id=$(this).val();
        var Search =  document.getElementById("search_input").value;
        if (Search == '')
        {
          $("#search_list").css("display", "none");
          document.getElementById("Search_list_display_load").style.display = 'none';
        }

        else
        {


            $.ajax
                ({
                    type: "POST",
                    url: "get_search.php",
                    data: {search: Search},
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                         document.getElementById("search_list").style.display = 'block';
                         document.getElementById("Search_list_display_load").style.display = 'block';

                          $("#search_list").html(result);
                    }
                });

                }
            });







      $("#submit_search").click(function(){

        if ($("#search_input").val() == '')
      {
             document.getElementById("wrapper_location").style.border = '2px solid red';
      }

      else if ($("#datepicker").val() == '')
      {
             document.getElementById("wrapper_from").style.border = '2px solid red';
      }

      else if ($("#datepicker2").val() == '')
      {
             document.getElementById("wrapper_to").style.border = '2px solid red';
      }

      else
      {
          var search = $("#search_input").val();
          var Date_1 = $("#datepicker").val();
          var Date_2 = $("#datepicker2").val();
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

function list_display() {
  document.getElementById("header_list_content").style.display = 'block';
  document.getElementById("list_display_load").style.display = 'block';

}

function close_list_display() {
  document.getElementById("header_list_content").style.display = 'none';
  document.getElementById("list_display_load").style.display = 'none';

}

function close_Search_list_display() {
  document.getElementById("search_list").style.display = 'none';
  document.getElementById("Search_list_display_load").style.display = 'none';

}


</script>




<style>

  .wrapper_location {
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



  .wrapper_from {
	  max-width: 20%;
    float: left;
    margin-left:5%;
    padding:0px 20px ;
    background-color:white;
    border-left: 1px solid lightgray;

}
.wrapper_from:hover
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
.wrapper_to {
	  max-width: 20%;
    float: left;
    margin-left:1%;
    border-left: 1px solid lightgray;
    padding:0px 20px ;
    background-color:white;

}

.wrapper_to:hover
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
	font-size: 16px;
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
	font-size: 16px;
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

    // INCLUDE JQUERY & JQUERY UI 1.12.1
$( function() {
	$( "#datepicker" ).datepicker({
		dateFormat: "dd-mm-yy"
		,	duration: "fast"
	});
} );


// INCLUDE JQUERY & JQUERY UI 1.12.1
$( function() {
	$( "#datepicker2" ).datepicker({
		dateFormat: "dd-mm-yy"
		,	duration: "fast"
	});
} );

</script>





<div id="header_container">

<div id="header_logo_container">
<a href="home"><img src="logo.png" id="header_logo"></img></a>
</div>

<div id="other_links_container"> <a href="Search?Location=%20" style="color:white; text-decoration: none;">Travel Guide & Travel Location</a></div>

<div id="Become_a_tourist_guide"><a href="Location" style="color:#ff0066; text-decoration: none;">Switch To Host</a></div>

<div id="header_list_container" class="header_list_container" onclick="list_display()">
<img src="list.png" class="header_list"><img src="account.png" class="header_list"> </img>

<div class="header_list_content" id="header_list_content">
 <?php if (isset($_COOKIE["Nacsitar"]))
{ ?>
 <div class="list"><a href="Profile" style="text-decoration: none;">My Profile</a></div>
 <div class="list"><a href="Location" style="text-decoration: none;">My Locations</a></div>
 <div class="list"><a href="Notification" style="text-decoration: none;">Notifications</a></div>
 <div class="list"><a href="Info" style="text-decoration: none;">Edit Profile</a></div>
 <div class="list" id="sign_out_link_container">Log Out</div>
<?php }

else{
    echo '<div class="list"  onclick="login_display()">Log In</div>';
    echo '<div class="list"  onclick="signup_display()">Sign Up</div>';
    echo '<div class="list"><a href="Location" style="text-decoration: none;">Host A Tourist</a></div>';
}
?>
</div>

</div>


</div>
 <div id="Search_list_display_load" onclick="close_Search_list_display()"></div>

<div id="search_link_container">
<div class="wrapper_location" id="wrapper_location">
	<label for="datepickers">Location
		<input type="text" id="search_input" placholder="add" autocomplete="off" placeholder="Where are you going?">
	</label>
	<div id="search_list" style="position:absolute;"></div>
</div>

<div class="wrapper_from" id="wrapper_from">
	<label for="datepickers">Check In
		<input type="text" id="datepicker" autocomplete="off" placeholder="Add Date">
	</label>
</div>


<div class="wrapper_to" id="wrapper_to">
	<label for="datepickers">Check Out
		<input type="text" id="datepicker2" placholder="add" autocomplete="off" placeholder="Add Date">
	</label>
</div>

<div class="wrapper_to">
	<label for="datepickers">Guest
		<input type="text" id="Number_OF_guest" placholder="add" autocomplete="off" placeholder="Adds Guest">
	</label>
</div>


<div id="submit_search">
<center><img src="search_icons.png" height="20px"></img></center>
</div>

</div>


 <div id="list_display_load" onclick="close_list_display()"></div>

