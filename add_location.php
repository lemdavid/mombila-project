<script>
$(document).ready(function() {


$('#location_upload_submit').click(function(){

    if ($("#location_name_input").val() == '')
      {
             document.getElementById("location_error").innerHTML = 'please Enter the Location Name.';
      }
   else if ($("#location_address_input").val() == '')
      {
             document.getElementById("location_error").innerHTML = 'please Enter the Location Address.';
      }

      else
      {
          document.getElementById("location_upload_submit").innerHTML = "Uploading....";
    var location_address_input =  document.getElementById("location_address_input").value;
    var location_name_input =  document.getElementById("location_name_input").value;

   var paymentype = 'location_address_input';
   var form_data = new FormData();

   var totalfiles = document.getElementById('location_verify_add_image').files.length;
   for (var index = 0; index < totalfiles; index++) {
      form_data.append("file[]", document.getElementById('location_verify_add_image').files[index]);
   }

     form_data.append('submit', paymentype);
     form_data.append('location_address_input', location_address_input);
     form_data.append('location_name_input', location_name_input);
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
                            document.getElementById("location_upload_submit").innerHTML = "Upload";
                            document.getElementById("location_error").innerHTML = '';
                            location.reload();
                        }


                    else
                    {
                      document.getElementById("location_upload_submit").innerHTML = "Upload";
                      document.getElementById("location_error").innerHTML = 'An Error Has Accorded';
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

.location_display {
  width: 30%;
  height: 150px;
  float:left;
  border-radius: 10px 10px 10px 10px;
 display:none;
 margin-left:3%;
 margin-top:3%;
  object-fit: cover;
  object-position: center right;
}

.add_location_click {
  width: 30%;
  margin-left:35%;
  margin-right:50%;
  margin-top:5%;
  height: 100px;
  float:left;
  border-radius: 50%;
  object-fit: contain;
}

.location_address_input{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    width:70%;
    margin-left: 15%;
    margin-right: 15%;
    margin-top:5%;
    float:left;
    padding:10px 0;
    font-size:18px;
    display:none;
}



</style>

<script>
          function location_verify(e) {

  document.getElementById('location_image_display1').style.display = 'none';
  document.getElementById('location_image_display2').style.display = 'none';
  document.getElementById('location_image_display3').style.display = 'none';
  document.getElementById('location_image_display4').style.display = 'none';
  document.getElementById('location_image_display5').style.display = 'none';
  document.getElementById('location_image_display6').style.display = 'none';
  document.getElementById('location_image_display7').style.display = 'none';
  document.getElementById('location_image_display8').style.display = 'none';
  document.getElementById('location_image_display9').style.display = 'none';
  document.getElementById('location_name_input').style.display = 'none';
  document.getElementById('location_address_input').style.display = 'none';
  document.querySelector('#location_verify_add_image').click();


}
function location_displayImage(e) {
    var totalfiles = document.getElementById('location_verify_add_image').files.length;
   for (var index = 0; index < totalfiles; index++) {
  if (e.files[index]) {
    var reader = new FileReader();
    reader.onload = function(e){
        var index_number = index--;
      document.querySelector('#location_image_display'+index_number).setAttribute('src', e.target.result);

      var container_id = 'location_image_display'+index_number;
     document.getElementById(container_id).style.display = 'block';
     document.getElementById('location_address_input').style.display = 'block';
     document.getElementById('location_name_input').style.display = 'block';
    }

    reader.readAsDataURL(e.files[index]);
  }
  }
}

      </script>






 <div id="location_image_form" style="display:none;">
                <div style="font-size:24px; margin-bottom:2%; margin-top:5%; width:70%; float:left;">
                    <center><b>Please Upload A Tourist Location</b></center></div>

                  <div style="font-size:24px; margin-bottom:2%; margin-top:5%; width:20% float:left;">
                    <center><b><a href="Profile">SKIP</a></b></center></div>


              <img src="location_image_icon2.png"  id="location_image_display9" class="location_display">
              <img src="location_image_icon2.png"  id="location_image_display8" class="location_display">
              <img src="location_image_icon2.png"  id="location_image_display7" class="location_display">
              <img src="location_image_icon2.png"  id="location_image_display6" class="location_display">
              <img src="location_image_icon2.png"  id="location_image_display5" class="location_display">
              <img src="location_image_icon2.png"  id="location_image_display4" class="location_display">
              <img src="location_image_icon2.png"  id="location_image_display3" class="location_display">
              <img src="location_image_icon2.png"  id="location_image_display2" class="location_display">
              <img src="location_image_icon2.png"  id="location_image_display1" class="location_display">

              <p id="location_error" style="color:red;"></p>
              <input id="location_name_input" class="location_address_input" type="text" placeholder="Location Name">
              <input id="location_address_input" class="location_address_input" type="text" placeholder="Location Adress">
              <img src="location_icon.png" onClick="location_verify()" class="add_location_click">
            <input type="file" name="File" onChange="location_displayImage(this)" id="location_verify_add_image" class="form-control" style="display: none;" multiple>
            <input type="hidden" id="payment_type_location" name="payment_type" value="Bank Deposit" />
            </center>

<button id="location_upload_submit" style="margin-top:5%; margin-bottom:5%;">Upload</button>
 </div>
