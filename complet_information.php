
<div style="width:100%; height:100%; position:fixed; background-color:black; opacity:0.3;"></div>


<style>

 #complete_form_container{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color:#fff;
    max-height:85%;
    width:40%;
    top:12%;
    left:30%;
    position:fixed;
    overflow:scroll;
    overflow-x:hidden;


}
.container{
   width:100%;
   margin-top:1%;
   margin-bottom:7%;
   display:flex;
   align-items:center;
   justify-content:center;

}
.content{
    background-color:white;
    width:100%;

}

.form-title{
    padding:5px 20px 0px;
}
form{
    padding:0px 40px;
}
.input{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    width:100%;
    margin: 8px 0;
    padding:10px 0;
    font-size:18px;
}


input :hover {
    background-color: red;
}
.date_and_select{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    margin: 8px 0;
    padding:5px 0;
    width:45%;
    font-size:18px;
}
.beside{
    display:flex;
    justify-content: space-between;
}
button{
     width:90%;
  margin-top:2%;
  margin-left:5%;
  margin-bottom:2%;
  padding:10px 0px 10px 0px;
  background-color:#ff0066;
  font-family: 'Roboto', sans-serif;
  font-size: 24px;
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
$(document).ready(function() {



$("#complete_profile").click(function() {

   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   var phoneformat = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
   var email =  document.getElementById("email");

     var select_gender = document.getElementById("gender");
    var gender = select_gender.options[select_gender.selectedIndex].text;


      if ($("#first_name").val() == '')
      {
             document.getElementById("complete_form_error").innerHTML = 'Please Enter Your First Name.';
      }

      else if ($("#last_name").val() == '')
      {
             document.getElementById("complete_form_error").innerHTML = 'Please Enter Your Last Name.';
      }

      else if ($("#date_of_birth").val() == '')
      {
             document.getElementById("complete_form_error").innerHTML = 'Please Enter Your Date Of Birth.';
      }

      else if (gender == 'GENDER')
      {
             document.getElementById("complete_form_error").innerHTML = 'Please Select Gender.';
      }

      else if (!$.trim(email.value).match(mailformat) && !$.trim(email.value).match(phoneformat)  )
      {
             document.getElementById("complete_form_error").innerHTML = 'Please Enter A Valid Email Address.';
      }

      else if ($("#password_1").val() == '')
      {
             document.getElementById("complete_form_error").innerHTML = 'Please Enter Your Password.';
      }


       else if ($("#password_1").val() != $("#password_2").val())
      {
             document.getElementById("complete_form_error").innerHTML = 'Your Password Did Not Match.';
      }





      else
      {

           document.getElementById("complete_profile").innerHTML = "wait...";
           document.getElementById("complete_form_error").innerHTML = '';

           var first_name =  document.getElementById("first_name").value;
           var last_name =  document.getElementById("last_name").value;
           var date_of_birth =  document.getElementById("date_of_birth").value;
           var emails =  document.getElementById("email").value;
           var password_1 =  document.getElementById("password_1").value;




            $.ajax
                ({
                    type: "POST",
                    url: "personal_information_submit.php",
                    data: {first_name: first_name, last_name: last_name, date_of_birth: date_of_birth, gender: gender, email: emails, password: password_1 },
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                     if (check_successfull == 'successful' )
                        {
                            document.getElementById("complete_profile").innerHTML = "Continue";
                            document.getElementById("complete_form_error").innerHTML = '';
                            document.getElementById("bio_data").style.display = 'none';
                            document.getElementById("profile_image_form").style.display = 'block';
                        }


                    else
                    {
                      document.getElementById("complete_profile").innerHTML = "Accept And Continue";
                      document.getElementById("complete_form_error").innerHTML = 'An Error Has Accorded';
                    }


                    }
                });
      }


});









 $("#profile_upload_submit").click(function() {
    if (!$('#profile_verify_add_image').val())
      {
            document.getElementById("profile_error").innerHTML = 'Please Upload Your Profile Image';
      }


      else
      {
                    document.getElementById("profile_upload_submit").innerHTML = "Uploading...";

                        var paymentype = 'Bank Deposit';
                        var file_data = $('#profile_verify_add_image').prop('files')[0];
                        var form_data = new FormData();
                        form_data.append('File', file_data);
                        form_data.append('payment_type', paymentype);
                        $.ajax({
                             url: 'submit_profile_image.php',
                            dataType: 'text', // what to expect back from the server
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: form_data,
                            type: 'post',
                            success: function (response) {

                                 var check_successfull = $.trim(response);
                     if (check_successfull == 'profile Image Submitted' )
                        {
                            document.getElementById("profile_upload_submit").innerHTML = "Upload";
                            document.getElementById("profile_error").innerHTML = '';
                            document.getElementById("profile_image_form").style.display = 'none';
                            document.getElementById("chose_HostOrHosting").style.display = 'block';
                        }

                        else
                        {
                            document.getElementById("profile_upload_submit").innerHTML = "Upload";
                            document.getElementById("profile_error").innerHTML = 'Cant Upload Image Check to see if file type is Acceptable';
                        }

                            },
                            error: function (response) {
                            }
                        });


                        }
                    });





$("#tourist_guide").click(function() {
    var action = 'Tourist Guide';

      $.ajax
                ({
                    type: "POST",
                    url: "Edit.php",
                    data: {tourist_guide: action  },
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                         document.getElementById("chose_HostOrHosting").style.display = 'none';
                         document.getElementById("location_image_form").style.display = 'block';

                    }
                });



});

$("#tourist").click(function() {
    var action = 'Tourist';

      $.ajax
                ({
                    type: "POST",
                    url: "Edit.php",
                    data: {tourist: action  },
                    cache: false,
                    success: function(result)
                    {
                        alert(result);

                        var check_successfull = $.trim(result);
                         document.getElementById("chose_HostOrHosting").style.display = 'none';
                         document.getElementById("location_image_form").style.display = 'block';

                    }
                });



});







});
</script>




<div id="complete_form_container">

    <div id="bio_data" style="display:;">
<div style="font-size:24px; margin-bottom:2%;"><center><b>Complete Your Registration</b></center></div>
<div id="complete_form_error" style="font-size:18px; margin-bottom:2%; color:red; text-align:center;"></div>
<div class="container">
    <div class="content">
            <form>
               <input id="first_name" class="input" type="text" placeholder="First Name">
               <input  id="last_name"  class="input" type="text" placeholder="Last Name">
            <div style="width:100%; margin-bottom:5%;">Name Must Be The Same In Government Issued Id Card</div>
              <div style="width:100%;">Date Of Birth</div>
            <div class="beside">
                <input id="date_of_birth" class="date_and_select" type="date" placeholder="Date Of Birth">
                <select class="date_and_select" id="gender">
                    <option>GENDER</option>
                    <option>MALE</option>
                    <option>FEMALE</option>
                    <option>NON-BINARY</option>
                </select>
            </div>
                <input id="email" class="input" type="email" placeholder="EMAIL ADDRESS">
                <input id="password_1" class="input" type="password" placeholder="Enter Your Password"><br>
                <input id="password_2" class="input" type="password" placeholder="Re-Type Your Password"><br>
                <button id="complete_profile" type="button">Accept And Continue</button>
            </form>
        </div>
 </div>

</div>





<style>
    .wrapper {
  padding: 100px;
}

#profile_image_display {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  float:left;
  margin-left:30%;
  margin-bottom:5%;

  object-fit: cover;
  object-position: center right;
}
</style>

<script>
          function profile_verify(e) {
  document.querySelector('#profile_verify_add_image').click();
}
function profile_displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profile_image_display').setAttribute('src', e.target.result);
    }

    reader.readAsDataURL(e.files[0]);
  }

}

      </script>


 <div id="profile_image_form" style="display:none;">
<div style="font-size:24px; margin-bottom:5%; width:100%; float:left;"><center><b>Upload Your Profile Picture</b></div>
                <p id="profile_error" style="font-size:18px; margin-bottom:2%; color:red; text-align:center;"></p>
              <img src="profile_image_icon2.png" onClick="profile_verify()" id="profile_image_display">
            <input type="file" name="File" onChange="profile_displayImage(this)" id="profile_verify_add_image" class="form-control" style="display: none;" multiple>
            <input type="hidden" id="payment_type_profile" name="payment_type" value="Bank Deposit" />
            </center>
<button id="profile_upload_submit">Upload</button>
 </div>




<div id="chose_HostOrHosting" style="display:none;">
<div style="font-size:24px; margin-bottom:2%; margin-top:5%;"><center><b>Please Select Your Option</b></center></div>
<button id="tourist_guide" style="margin-top:5%;">i'm A Tourist Guide</button>
<button id="tourist" style="margin-top:5%; margin-bottom:5%;">i'm Tourist Looking For A Guide</button>
 </div>



<div id="Add_hosting_location">
    <?php include 'add_location.php'; ?>
</div>




</div>
