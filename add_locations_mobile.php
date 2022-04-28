<script>
$(document).ready(function() {


$('#locations_upload_submit').click(function(){

    if ($("#locations_name_input").val() == '')
      {
             document.getElementById("locations_error").innerHTML = 'please Enter the locations Name.';
      }
   else if ($("#locations_address_input").val() == '')
      {
             document.getElementById("locations_error").innerHTML = 'please Enter the locations Address.';
      }

      else
      {
          document.getElementById("locations_upload_submit").innerHTML = "Uploading....";
    var locations_address_input =  document.getElementById("locations_address_input").value;
    var locations_name_input =  document.getElementById("locations_name_input").value;

   var paymentype = 'locations_address_input';
   var form_data = new FormData();

   var totalfiles = document.getElementById('locations_verify_add_image').files.length;
   for (var index = 0; index < totalfiles; index++) {
      form_data.append("file[]", document.getElementById('locations_verify_add_image').files[index]);
   }

     form_data.append('submit', paymentype);
     form_data.append('location_address_input', locations_address_input);
     form_data.append('location_name_input', locations_name_input);
   // AJAX request
                         $.ajax({
                             url: 'submit_location_image.php',
                            dataType: 'text', // what to expect back from the server
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: form_data,
                            type: 'post',
                            success: function (response) {

                                  var check_successfull = $.trim(response);
                     if (check_successfull == 'location submitted successfuly' )
                        {
                            location.reload();
                        }


                    else
                    {
                      document.getElementById("locations_upload_submit").innerHTML = "Upload";
                      document.getElementById("locations_error").innerHTML = 'An Error Has Accorded';
                    }


                            },
                            error: function (response) {
                            }
                        });

                        }// end of else address is input
});





});
</script>


<style>
    .wrapper {
  padding: 100px;
}

.locations_display {
  width: 45%;
  height: 500px;
  float:left;
  border-radius: 10px 10px 10px 10px;
 display:none;
 margin-left:3%;
 margin-top:3%;
  object-fit: fill;
  object-position: center right;
}

.add_locations_click {
  width: 50%;
  margin-left:25%;
  margin-right:70%;
  margin-top:5%;
  height: 200px;
  float:left;
  border-radius: 50%;
  object-fit: contain;
}

.locations_address_input{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    width:70%;
    margin-left: 15%;
    margin-right: 15%;
    margin-top:5%;
    float:left;
    padding:10px 0;
    font-size:58px;
    display:none;
}


button{
     width:90%;
  margin-top:2%;
  margin-left:5%;
  margin-bottom:2%;
  padding:10px 0px 10px 0px;
  background-color:#ff0066;
  font-family: 'Roboto', sans-serif;
  font-size: 64px;
  font-weight: 400;
  color: white;
  border:none;
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
button:hover{
    background-color:#333333;
}
</style>

<script>
          function locations_verify(e) {

  document.getElementById('locations_image_display1').style.display = 'none';
  document.getElementById('locations_image_display2').style.display = 'none';
  document.getElementById('locations_image_display3').style.display = 'none';
  document.getElementById('locations_image_display4').style.display = 'none';
  document.getElementById('locations_image_display5').style.display = 'none';
  document.getElementById('locations_image_display6').style.display = 'none';
  document.getElementById('locations_image_display7').style.display = 'none';
  document.getElementById('locations_image_display8').style.display = 'none';
  document.getElementById('locations_image_display9').style.display = 'none';
  document.getElementById('locations_name_input').style.display = 'none';
  document.getElementById('locations_address_input').style.display = 'none';
  document.querySelector('#locations_verify_add_image').click();


}
function locations_displayImage(e) {
    var totalfiles = document.getElementById('locations_verify_add_image').files.length;
   for (var index = 0; index < totalfiles; index++) {
  if (e.files[index]) {
    var reader = new FileReader();
    reader.onload = function(e){
        var index_number = index--;
      document.querySelector('#locations_image_display'+index_number).setAttribute('src', e.target.result);

      var container_id = 'locations_image_display'+index_number;
     document.getElementById(container_id).style.display = 'block';
     document.getElementById('locations_address_input').style.display = 'block';
     document.getElementById('locations_name_input').style.display = 'block';
    }

    reader.readAsDataURL(e.files[index]);
  }
  }
}

      </script>






 <div id="locations_image_form" style="display:block;">
                <div style="font-size:54px; margin-bottom:2%; margin-top:5%; width:100%; float:left;">
                    <center><b>Upload A Tourist locations</b></center></div>


              <img src="locations_image_icon2.png"  id="locations_image_display9" class="locations_display">
              <img src="locations_image_icon2.png"  id="locations_image_display8" class="locations_display">
              <img src="locations_image_icon2.png"  id="locations_image_display7" class="locations_display">
              <img src="locations_image_icon2.png"  id="locations_image_display6" class="locations_display">
              <img src="locations_image_icon2.png"  id="locations_image_display5" class="locations_display">
              <img src="locations_image_icon2.png"  id="locations_image_display4" class="locations_display">
              <img src="locations_image_icon2.png"  id="locations_image_display3" class="locations_display">
              <img src="locations_image_icon2.png"  id="locations_image_display2" class="locations_display">
              <img src="locations_image_icon2.png"  id="locations_image_display1" class="locations_display">

              <p id="locations_error" style="color:red; font-size:44px;"></p>
              <input id="locations_name_input" class="locations_address_input" type="text" placeholder="locations Name">
              <input id="locations_address_input" class="locations_address_input" type="text" placeholder="locations Adress">
              <img src="location_icon.png" onClick="locations_verify()" class="add_locations_click">
            <input type="file" name="File" onChange="locations_displayImage(this)" id="locations_verify_add_image" class="form-control" style="display: none;" multiple>
            <input type="hidden" id="payment_type_locations" name="payment_type" value="Bank Deposit" />
            </center>

<button id="locations_upload_submit" style="margin-top:5%; margin-bottom:5%;">Upload</button>
 </div>
