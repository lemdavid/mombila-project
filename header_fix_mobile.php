
<style>

  #fix_header_container{
    width: 100%;
    float: left;
    padding:10px;
 display:none;
 position:fixed;

 -webkit-box-shadow:0 0 2px;
   /* For I.E */
   -moz-box-shadow:0 0 2px;
   /* For Mozilla Web Browser */
   border-radius:5px;
   -webkit-border-radius:2px;
   /* For I.E */
   -moz-border-radius:2px;
   /* For Mozilla Web Browser */
   margin-top:0px;
   margin-bottom:5%;
    background:linear-gradient(to bottom,#ffffff 5%,#ffffff 100%);


}

#fix_header_list_container
{
  Width:30%;
  padding:1%;
  margin-left:15%;
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

.fix_header_list
{
  Width:70px;
  height:70px;
  object-fit: contain;
  margin-left:20%;
}


.fix_header_list_content {
width: 100%;
height:110%;
  display:none;
  float:right;
  position: fixed;
  background-color: White;
  color:black;
  left:0%;
  top:0px;
  z-index: 1;
}

.list
{
 width:100%;
 float:left;
 margin-top:3%;
 font-family: 'Roboto', sans-serif;
  font-size:64px;
  padding:10px;
  font-weight:bold;
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
  font-size:20px;
  margin-right:4%;
}

#fix_header_logo_container
{
  Width:50%;
  float:left;
  margin-left:1%;
}

#fix_header_logo
{
  Width:100%;
  height:70px;
}


#fix_search_link_container{
    width: 100%;
    float: left;
    margin-top:5%;
    padding:10px;
    float:left;
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
  font-size:20px;
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


#fix_search_list
{
   width: 95%;
    float: left;
   margin-top:3%;
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
}

#fix_list_display_load
{
   width:100%;
   display:none;
   height:100%;
   position:fixed;
    background-color:black;
     opacity:0.0;
}

#fix_Search_fix_list_display_load
{
   width:100%;
   display:none;
   top:25%;
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
  font-size:48px;
  cursor:pointer;
 }


 .search_location_icon
 {
   height:50px;
   width:30px;
   margin-right:3%;
 }
</style>






<script>
$(document).ready(function() {



    $("#fix_search_input").keyup(function()
    {
        $("#window_load").css("position", "relative");
        $("#load_icon_container").css("position", "relative");
        var id=$(this).val();
        var Search =  document.getElementById("fix_search_input").value;
        if (Search == '')
        {
          $("#fix_search_list").css("display", "none");
          document.getElementById("fix_Search_fix_list_display_load").style.display = 'none';
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
                         document.getElementById("fix_Search_fix_list_display_load").style.display = 'block';

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
          var Number_OF_guest = $("#fix_Number_OF_guest").val();
           search ='Search?Location='+search+'&From='+Date_1+'&To='+Date_2+'&Guest='+Number_OF_guest
                    window.location=search;
      }

                });




               $("#user_login_or_register_open").click(function(){
                $("#login_register_div").css("display", "block");
                });




$("#sign_out_link_container").click(function() {
    $("#load_icon_container").css("position", "fixed");


             $.get( "logout.php", function( data ) {
     window.location="home";
});


});






$("#fix_header_list_container").click(function() {
       window.location="#get";
          $("#fix_header_list_content").css("display", "block");
          $("#fix_list_display_load").css("display", "block");

          if (window.history && window.history.pushState) {

		$(window).on('popstate', function() {

		  document.getElementById("fix_header_list_content").setAttribute("style", "display: none;");
		  document.getElementById("fix_list_display_load").setAttribute("style", "display: none;");
		});
	}

});


$("#close_fix_header_list_container").click(function() {



		  document.getElementById("fix_header_list_content").setAttribute("style", "display: none;");
		  document.getElementById("fix_list_display_load").setAttribute("style", "display: none;");

});






});
</script>

<script>

    function fix_login_display() {
         document.getElementById("fix_header_list_content").style.display = 'none';
  document.getElementById("fix_list_display_load").style.display = 'none';
  document.getElementById("login_form_load").style.display = 'block';
  document.getElementById("login_form_container").style.display = 'block';
document.getElementById("registration_form_load").style.display = 'none';
document.getElementById("registration_form_container").style.display = 'none';
}


function fix_signup_display() {
     document.getElementById("fix_header_list_content").style.display = 'none';
  document.getElementById("fix_list_display_load").style.display = 'none';
  document.getElementById("registration_form_load").style.display = 'block';
  document.getElementById("registration_form_container").style.display = 'block';
  document.getElementById("login_form_load").style.display = 'none';
document.getElementById("login_form_container").style.display = 'none';
}

function list_display() {
  document.getElementById("fix_header_list_content").style.display = 'none';
  document.getElementById("fix_list_display_load").style.display = 'none';


}

function close_list_display() {
  document.getElementById("fix_header_list_content").style.display = 'none';
  document.getElementById("fix_list_display_load").style.display = 'none';

}

function fix_close_Search_list_display() {
  document.getElementById("fix_search_list").style.display = 'none';
  document.getElementById("fix_Search_fix_list_display_load").style.display = 'none';

}


</script>




<style>

  .fix_wrapper_location {
	 width: 100%;
    float: left;
    margin-bottom:2%;
    padding:20px ;
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
	 width: 30%;
    float: left;
    margin-left:1%;
    padding:0px 20px ;
    background-color:white;

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
	  width: 30%;
	  margin-left:5%;
    float: left;
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
.fix_wrapper_Guest {
	  width: 30%;
    float: left;
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
     width: 10%;
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
	font-size: 38px;
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
	font-size: 38px;
	font-weight: 400;
	color: #78909C;
}
.ui-fix_datepicker-calendar tbody td {
	width: 6.5rem;
	text-align: center;
	padding: 0;
}
.ui-fix_datepicker-calendar tbody td a {
	display: block;
	border-radius: 0.25rem;
	line-height: 5rem;
	transition: 0.3s all;
	color: #546E7A;
	font-size: 34px;
	text-decoration: none;
}
.ui-fix_datepicker-calendar tbody td a:hover {
	background-color: #E0F2F1;
}
.ui-fix_datepicker-calendar tbody td a.ui-state-active {
	background-color: #009688;
	color: white;
}
.ui-fix_datepicker-fix_header a.ui-corner-all {
	cursor: pointer;
	position: absolute;
	top: 0;
	width: 10rem;
	height: 3rem;
	margin: 0.5rem;
	border-radius: 0.25rem;
	transition: 0.3s all;
}
.ui-fix_datepicker-fix_header a.ui-corner-all:hover {
	background-color: #ECEFF1;
}
.ui-fix_datepicker-fix_header a.ui-fix_datepicker-prev {
	left: 0;
	background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==");
	background-repeat: no-repeat;
	background-size: 38px;
	background-position: 50%;
	transform: rotate(180deg);
}
.ui-fix_datepicker-fix_header a.ui-fix_datepicker-next {
	right: 0;
	background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==');
	background-repeat: no-repeat;
	background-size: 38px;
	background-position: 50%;
}
.ui-fix_datepicker-fix_header a>span {
	display: none;
}
.ui-fix_datepicker-title {
	text-align: center;
	line-height: 3rem;
	margin-bottom: 1.25rem;
	font-size: 28px;
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

    // INCLUDE JQUERY & JQUERY UI 1.12.1
$( function() {
	$( "#fix_datepic" ).fix_datepicker({
		dateFormat: "dd-mm-yy"
		,	duration: "fast"
	});
} );


// INCLUDE JQUERY & JQUERY UI 1.12.1
$( function() {
	$( "#fix_datepic" ).fix_datepicker({
		dateFormat: "dd-mm-yy"
		,	duration: "fast"
	});
} );

</script>



<script>


function open_search() {
  document.getElementById("fix_search_link_container").style.display = 'block';
  document.getElementById("fix_other_links_container").style.display = 'none';
   document.getElementById("fix_search_input").focus();
}
</script>

<div id="fix_header_container">

<div id="fix_header_logo_container">
<a href="home"><img src="logo_fix.png" id="fix_header_logo"></img></a>
</div>
<div id="fix_header_list_container" class="fix_header_list_container">
<img src="list.png" class="fix_header_list"><img src="account.png" class="fix_header_list"> </img>
 <div id="fix_list_display_load" onclick="close_list_display()"></div>

<div class="fix_header_list_content" id="fix_header_list_content">
    <img src="cancel_icon.png" id="close_fix_header_list_container" style=" width:100px; float:left; margin-left:2%; margin-top:2%;"></img>
    <a href="home"><img src="logo_fix.png"  style=" width:80%; float:left; margin-left:5%; margin-top:2%; margin-bottom:5%;"></img></a>
 <?php if (isset($_COOKIE["Nacsitar"]))
{ ?>
 <div class="list"><a href="Profile">My Profile</a></div>
 <div class="list"><a href="Location">My Locations</a></div>
 <div class="list"><a href="Notification">Notifications</a></div>
 <div class="list"><a href="Info">Edit Profile</a></div>
 <div class="list" id="sign_out_link_container">Log Out</div>
<?php }

else{
    echo '<div class="list"  onclick="fix_login_display()"><img src="account_login_icon.png"  style=" width:100px; height:70px; float:left; margin-left:5%; margin-right:2%;"></img>Log In</div>';
    echo '<div class="list"  onclick="fix_signup_display()"><img src="account_signup_icon.png"  style=" width:100px; height:70px; float:left; margin-left:5%; margin-right:2%;"></img> Sign Up</div>';
    echo '<div class="list"><a href="Location"><img src="account_setting_icon.png"  style=" width:100px; height:70px; float:left; margin-left:5%; margin-right:2%;"></img>Host A Tourist</a></div>';
}
?>
</div>

</div>

<div class="fix_wrapper_location" id="fix_other_links_container" style="width:90%;margin-left:5%;margin-top:5%;">
	<label for="fix_datepickers">Location
		<input type="text" id="open_fix_search_input" placholder="add" autocomplete="off" placeholder="Where are you going?" OnClick="open_search()">
	</label>
</div>

 <div id="fix_Search_fix_list_display_load" onclick="fix_close_Search_list_display()"></div>

<div id="fix_search_link_container" style="display:none;">
<div class="fix_wrapper_location" id="fix_wrapper_location">
	<label for="fix_datepickers">Location
		<input type="text" id="fix_search_input" placholder="add" autocomplete="off" placeholder="Where are you going?">
	</label>
	<div id="fix_search_list" style="position:absolute;"></div>
</div>

<div class="fix_wrapper_from" id="fix_wrapper_from">
	<label for="fix_datepickers" style="color:black;">Check In
		<input type="date" id="fix_datepicker" autocomplete="off">
	</label>
</div>


<div class="fix_wrapper_to" id="fix_wrapper_to">
	<label for="fix_datepickers" style="color:black;">Check Out
		<input type="date" id="fix_datepicker2" placholder="add" autocomplete="off" placeholder="Add Date">
	</label>
</div>

<div class="fix_wrapper_Guest">
	<label for="fix_datepickers" style="color:black;">Guest
		<input type="text" id="fix_Number_OF_guest" placholder="add" autocomplete="off" placeholder="Adds Guest">
	</label>
</div>


<div id="fix_submit_search">
<center><img src="search_icons.png" height="80px"></img></center>
</div>

</div>
</div>


