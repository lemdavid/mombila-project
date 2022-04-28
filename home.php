
<?php
session_start();

include 'top.php';

?>




<?php if ($user_mombile == 'device')


{
   include 'home_mobile.php';
}
else
{
   include 'home_desktop.php';

 } ?>




<script>
window.onscroll = function() {myFunction()};

var fix_header = document.getElementById("header_container");
var Stick_object = document.getElementById("fix_header_container");
var sticky = fix_header.offsetTop;


function myFunction() {
  if (window.pageYOffset >= sticky) {
    document.getElementById("fix_header_container").setAttribute(
   "style", "display: block;");
  }


else {
    document.getElementById("fix_header_container").setAttribute(
   "style", "display: none;");
  }


}
</script>
