

<script>
$(document).ready(function() {


$(".search_location_select").click(function(){
    var value = $(this).attr('name');

   document.getElementById("search_input").value = value;
   document.getElementById("search_list").style.display = 'none';
   document.getElementById("Search_list_display_load").style.display = 'none';

});



});
</script>




<?php
session_start();
include 'database_connection.php';

if (isset($_POST['search']))
{

$search = $_POST['search'];
$search = htmlentities($search);




$result = $ireport->query('SELECT location_name
FROM Your_location
WHERE  location_name like "%'.$search.'%" GROUP BY location_name  LIMIT 5');


if (mysqli_num_rows($result) > 0)
{

echo '<div id="search_list_form_database" class="search_location_select" name="'.$search.'">
        <img src="location_icons.png" class="search_location_icon"/>
        '.$search.'
        </div>';
	while ($row = $result->fetch_assoc())
{
 $location_name   = htmlentities($row['location_name']);
    echo '<div id="search_list_form_database" class="search_location_select" name="'.$location_name.'">
        <img src="location_icons.png" class="search_location_icon"/>
        '.$location_name.'
        </div>';
}

}

else {
    echo '<h4> No Location Found Please Check Back Later!!!. </h4>';
}


}


?>
