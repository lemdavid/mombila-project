


<style>
#load_icon_container{
opacity:0.7;
width:100%;
height:100%;
float:left;
display:block;
position:fixed;
background-color:white;
cursor:context-menu;

}





</style>



<script>


$( window ).on("load", function() {
  $("#load_icon_container").css("display", "none");
});



$( document ).ajaxStart(function() {
  $( "#load_icon_container" ).show();
});

$( document ).ajaxStop(function() {
  $( "#load_icon_container" ).hide();
});


</script>


<div id="load_icon_container">

<img src="Lodding_icon.gif" alt="Flower" width="100%" height="100%">

</div>
