
<style>

@import url("https://fonts.googleapis.com/css?family=Indie+Flower&display=swap");

.get_location_image_container
{
  width:100%;
  float:left;
  background-color:white;
  box-shadow:0 0 2px;
   -webkit-box-shadow:0 0 5px;
   /* For I.E */
   -moz-box-shadow:0 0 5px;
   /* For Mozilla Web Browser */
   border-radius:10px;
   -webkit-border-radius:10px;
   /* For I.E */
   -moz-border-radius:10px
   /* For Mozilla Web Browser */
}

.get_location_image_containers
{
  width:70%;
  float:left;
}

.get_location_text_containers
{
  width:30%;
  float:left;
  padding:10px;
}

#get_image_address
{
  width:100%;
  float:left;
  font-size:18px;
font-family: 'Roboto', sans-serif;
}



.slider {
  height: 600px;
  width: 100%;
  position: relative;
  margin: auto;
  font-family: 'Roboto', sans-serif;
}
.slider .slide {
  display: none;
  height: 100%;
  width: 100%;
}
.slider .slide img {
  height: 100%;
  width: 100%;
  filter: contrast(90%);
  object-fit: cover;
}
.slider .slide .caption {
  position: absolute;
  bottom: 30px;
  left: 50%;
  transform: translateX(-50%);
  font-size: 22px;
  color: #fff;
  padding: 8px 16px;
  background-color: rgba(0, 0, 0, 0.4);
  border-radius: 4px;
}
.slider a.prev,
.slider a.next {
  position: absolute;
  top: 50%;
  font-size: 30px;
  cursor: pointer;
  user-select: none;
  color: #ffffff;
  padding: 12px;
  transition: 0.2s;
}
.slider a.prev:hover,
.slider a.next:hover {
  background-color: rgba(0, 0, 0, 0.4);
  border-radius: 3px;
}
.slider .next {
  right: 20px;
}
.slider .prev {
  left: 20px;
}

.show {
  animation: fade 0.5s ease-out;
}

@keyframes fade {
  from {
    opacity: 0.5;
  }
  to {
    opacity: 1;
  }
}
</style>



<div class="get_location_image_container">

<div class="get_location_image_containers">

<?php include 'database_connection.php';

$get_location = $_POST['get_location'];
$get_location = htmlentities($get_location);


$result = $ireport->query('SELECT
  location.database_ids as database_ids,
  location.database_id as database_id,
  location.image_root as image_root,
  location.image_group as image_group,
  location.location_name as location_name,
  location.location_address as location_address

FROM Your_location as location
WHERE  location.database_ids = "'.$get_location.'"
 GROUP BY location.database_ids ORDER BY location.database_ids DESC LIMIT 1');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{
   // will selected information is output
        $row = $result->fetch_assoc();


         $database_ids = htmlentities($row['database_ids']);
         $database_id = htmlentities($row['database_id']);
         $image_root = htmlentities($row['image_root']);
         $image_group = htmlentities($row['image_group']);
         $location_name = htmlentities($row['location_name']);
         $location_address = htmlentities($row['location_address']);

         $image = $image_root.$database_ids.$image_group;
         $image_1 = $image_root.$database_ids.$image_group.'0.jpg';
         $image_2 = $image_root.$database_ids.$image_group.'1.jpg';
         $image_3 = $image_root.$database_ids.$image_group.'2.jpg';
         $image_4 = $image_root.$database_ids.$image_group.'3.jpg';
         $image_5 = $image_root.$database_ids.$image_group.'4.jpg';

         echo '<div class="slider">';


       for ( $i = 0; $i < $database_id ; $i++)
    {
      $image =  $image_root.$database_ids.$image_group.$i.'.jpg';
      echo'<div class="slide">
        <img src="'.$image.'" />
        <div class="caption">'.$location_name.' </div>
      </div>';

     }
     echo ' <!-- buttons -->
      <a class="prev">&#10094;</a>
      <a class="next">&#10095;</a>
    </div>
';


       }
 ?>



</div>

<div class="get_location_text_containers">
    <img src="cancel_icon.png" width="30px" style="margin-left:90%; margin-top:2%;" onclick="close_sign_up()"></img>
    <div id="get_image_address"><?php echo '<b>Address:</b> '.$location_address; ?></div>
    </div>
</div>



<script>
    $(document).ready(function() {

    const images = document.querySelectorAll(".slide"),
  next = document.querySelector(".next"),
  prev = document.querySelector(".prev");

let current = 0;

function changeImage() {
  images.forEach(img => {
    img.classList.remove("show");
    img.style.display = "none";
  });

  images[current].classList.add("show");
  images[current].style.display = "block";
}

// Calling first time
changeImage();

next.addEventListener("click", function() {
  current++;

  if (current > images.length - 1) {
    current = 0;
  } else if (current < 0) {
    current = images.length - 1;
  }

  changeImage();
});
prev.addEventListener("click", function() {
  current--;

  if (current > images.length - 1) {
    current = 0;
  } else if (current < 0) {
    current = images.length - 1;
  }

  changeImage();
});

// Auto change in 5 seconds

setInterval(() => {
  next.click();
}, 5000);

});
</script>

