<?php
if (!isset($_COOKIE["Nacsitar"]))
{
     header("Location: LogIn");
die();
}
 ?>

 <style>
  #body_center{
    width: 100%;
    margin-top:400px;
    padding:3%;
    float: left;
 display:block;
 margin-bottom:20%;
 background-color:white;
}

a {
  text-decoration: none;
  color: black;
}




#personal_account_container
{
 width:100%;
 float:left;
}

#personal_account_info_container
{
 width:90%;
 float:left;
 margin-left:5%;
 margin-top:5%;
 border:3px solid lightgray;
 font-size:50px;
 padding:20px;
}


#profile_image_display {
  width: 550px;
  height: 550px;
  border-radius: 50%;
  float:left;
  margin-left:30%;
  margin-bottom:5%;
  background-image:url('account.png');

  object-fit: cover;
  object-position: center right;
}


.options{
   background-color:white;
   width:100%;
   margin-top:1%;
   padding:10px 20px;
   font-size:47px;
   float:left;
   border-bottom: 1px solid lightgray;
}



.edit_input{
background-repeat:no-repeat;
   background-position:6px;
   border:2px solid white;
   margin-right:5%;
   margin-top:2%;
   padding:10px 5px;
   width:45%;
   float:left;
   font-size:54px;
   box-shadow:0 0 2px;
   -webkit-box-shadow:0 0 2px;
   /* For I.E */
   -moz-box-shadow:0 0 2px;
   /* For Mozilla Web Browser */
   border-radius:2px;
   -webkit-border-radius:2px;
   /* For I.E */
   -moz-border-radius:2px
   /* For Mozilla Web Browser */
}

.button_cancel
{

    float:left;
  margin-top:2%;
  margin-bottom:2%;
  margin-left:30%;
  padding:10px 30px 10px 30px;
  background-color:#333333;
  font-family: 'Roboto', sans-serif;
  font-size: 44px;
  font-weight: 200;
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


.button_save
{
    float:left;
  margin-top:2%;
  margin-right:10%;
  margin-left:10%;
  margin-bottom:2%;
  padding:10px 30px 10px 30px;
  background-color:#ff0066;
  font-family: 'Roboto', sans-serif;
  font-size: 44px;
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
</style>


<script>
$(document).ready(function() {


$("#cancel_name_edit").click(function() {

document.getElementById("edit_name_container").style.display = 'none';
document.getElementById("edit_name").style.display = 'block';

});

$("#edit_name").click(function() {

document.getElementById("edit_name_container").style.display = 'block';
document.getElementById("edit_name").style.display = 'none';

});

$("#edit_gender").click(function() {

document.getElementById("edit_gender_container").style.display = 'block';
document.getElementById("edit_gender").style.display = 'none';

});

$("#cancel_gender_edit").click(function() {

document.getElementById("edit_gender_container").style.display = 'none';
document.getElementById("edit_gender").style.display = 'block';

});




$("#edit_age").click(function() {

document.getElementById("edit_age").style.display = 'none';
document.getElementById("edit_age_container").style.display = 'block';

});


$("#cancel_age_edit").click(function() {

document.getElementById("edit_age").style.display = 'block';
document.getElementById("edit_age_container").style.display = 'none';

});

$("#edit_email").click(function() {

document.getElementById("edit_email").style.display = 'none';
document.getElementById("edit_email_container").style.display = 'block';

});


$("#cancel_email_edit").click(function() {

document.getElementById("edit_email").style.display = 'block';
document.getElementById("edit_email_container").style.display = 'none';

});


$("#Add_government_id").click(function() {

document.getElementById("Add_government_id_container").style.display = 'block';
document.getElementById("Add_government_id").style.display = 'none';

});


$("#cancel_Add_government_id").click(function() {

document.getElementById("Add_government_id_container").style.display = 'none';
document.getElementById("Add_government_id").style.display = 'block';

});

$("#Add_address").click(function() {

document.getElementById("Add_address_container").style.display = 'block';
document.getElementById("Add_address").style.display = 'none';

});

$("#cancel_Add_address").click(function() {

document.getElementById("Add_address_container").style.display = 'none';
document.getElementById("Add_address").style.display = 'block';

});


$("#Add_emergency_contact").click(function() {

document.getElementById("Add_emergency_contact_container").style.display = 'block';
document.getElementById("Add_emergency_contact").style.display = 'none';

});



$("#cancel_Add_emergency_contact").click(function() {

document.getElementById("Add_emergency_contact_container").style.display = 'none';
document.getElementById("Add_emergency_contact").style.display = 'block';

});




$("#save_name_edit").click(function() {

      if ($("#edit_first_name").val() == '')
      {
             document.getElementById("edit_first_name").style.border = '2px solid red';
      }

      else if ($("#edit_last_name").val() == '')
      {
             document.getElementById("edit_last_name").style.border = '2px solid red';
      }


      else
      {

           document.getElementById("save_name_edit").innerHTML = "wait...";

           var edit_first_name =  document.getElementById("edit_first_name").value;
           var edit_last_name =  document.getElementById("edit_last_name").value;
           var action_change_name =  'Change Name';



            $.ajax
                ({
                    type: "POST",
                    url: "Edit.php",
                    data: {first_name: edit_first_name, last_name: edit_last_name, action_change_name: action_change_name},
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                     if (check_successfull == 'successful' )
                        {
                           location.reload();
                        }


                    else
                    {
                        document.getElementById("save_name_edit").innerHTML = "Save";
                      alert ('An Error Occurred Please Try Again Later!!')
                    }


                    }
                });
      }


});


$("#save_gender_edit").click(function() {

    var select_gender = document.getElementById("gender");
    var gender = select_gender.options[select_gender.selectedIndex].text;


      if(gender == 'GENDER')
      {
             document.getElementById("gender").style.border = '2px solid red';
      }

      else if ($("#edit_last_name").val() == '')
      {
             document.getElementById("edit_last_name").style.border = '2px solid red';
      }


      else
      {

           document.getElementById("save_gender_edit").innerHTML = "wait...";



            $.ajax
                ({
                    type: "POST",
                    url: "Edit.php",
                    data: {gender: gender, action_change_gender: gender},
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                     if (check_successfull == 'successful' )
                        {
                           location.reload();
                        }


                    else
                    {
                        document.getElementById("save_name_edit").innerHTML = "Save";
                      alert ('An Error Occurred Please Try Again Later!!')
                    }


                    }
                });
      }


});



$("#save_age_edit").click(function() {


      if ($("#edit_date_of_birth").val() == '')
      {
             document.getElementById("edit_date_of_birth").style.border = '2px solid red';
      }



      else
      {

           document.getElementById("save_age_edit").innerHTML = "wait...";

           var date_of_birth =  document.getElementById("edit_date_of_birth").value;
           var action_change_date =  'Change Date';



            $.ajax
                ({
                    type: "POST",
                    url: "Edit.php",
                    data: {date_of_birth: date_of_birth, action_change_date: action_change_date},
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                     if (check_successfull == 'successful' )
                        {
                           location.reload();
                        }


                    else
                    {
                        document.getElementById("save_name_edit").innerHTML = "Save";
                      alert ('An Error Occurred Please Try Again Later!!')
                    }


                    }
                });
      }


});




$("#save_email_edit").click(function() {

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email =  document.getElementById("edit_Email_input");

      if ($("#edit_Email_input").val() == '')
      {
             document.getElementById("edit_Email_input").style.border = '2px solid red';
      }

      else if (!$.trim(email.value).match(mailformat))
      {
             document.getElementById("edit_Email_input").style.border = '2px solid red';
      }




      else
      {

           document.getElementById("save_email_edit").innerHTML = "wait...";

           var email_address =  document.getElementById("edit_Email_input").value;
           var action_change_email =  'Change Email';



            $.ajax
                ({
                    type: "POST",
                    url: "Edit.php",
                    data: {email_address: email_address, action_change_email: action_change_email},
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                     if (check_successfull == 'successful' )
                        {
                           location.reload();
                        }


                    else
                    {
                        document.getElementById("save_name_edit").innerHTML = "Save";
                      alert ('An Error Occurred Please Try Again Later!!')
                    }


                    }
                });
      }


});


$("#save_Add_government_id").click(function() {



      if ($("#add_government_id_input").val() == '')
      {
             document.getElementById("add_government_id_input").style.border = '2px solid red';
      }





      else
      {

           document.getElementById("save_Add_government_id").innerHTML = "wait...";

           var Add_government =  document.getElementById("add_government_id_input").value;
           var action_Add_government_id =  'Add Government ID';



            $.ajax
                ({
                    type: "POST",
                    url: "Edit.php",
                    data: {Add_government: Add_government, action_Add_government_id: action_Add_government_id},
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                     if (check_successfull == 'successful' )
                        {
                           location.reload();
                        }


                    else
                    {
                        document.getElementById("save_Add_government_id").innerHTML = "Save";
                      alert ('An Error Occurred Please Try Again Later!!')
                    }


                    }
                });
      }


});



$("#save_Address").click(function() {



      if ($("#add_address_input").val() == '')
      {
             document.getElementById("add_address_input").style.border = '2px solid red';
      }





      else
      {

           document.getElementById("save_Address").innerHTML = "wait...";

           var address =  document.getElementById("add_address_input").value;
           var action_Add_Address =  'Add Address';



            $.ajax
                ({
                    type: "POST",
                    url: "Edit.php",
                    data: {address: address, action_Add_Address: action_Add_Address},
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                     if (check_successfull == 'successful' )
                        {
                           location.reload();
                        }


                    else
                    {
                        document.getElementById("save_Add_government_id").innerHTML = "Save";
                      alert ('An Error Occurred Please Try Again Later!!')
                    }


                    }
                });
      }


});



$("#save_emergency_contact").click(function() {

        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   var phoneformat = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
   var email =  document.getElementById("add_emergency_contact_input");

      if ($("#add_emergency_contact_input").val() == '')
      {
             document.getElementById("add_emergency_contact_input").style.border = '2px solid red';
      }

      else if (!$.trim(email.value).match(mailformat) && !$.trim(email.value).match(phoneformat)  )
      {
             document.getElementById("add_emergency_contact_input").style.border = '2px solid red';
      }





      else
      {

           document.getElementById("save_emergency_contact").innerHTML = "wait...";

           var contact =  document.getElementById("add_emergency_contact_input").value;
           var emergency_contact =  'Add contact';

            $.ajax
                ({
                    type: "POST",
                    url: "Edit.php",
                    data: {contact: contact, emergency_contact: emergency_contact},
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                     if (check_successfull == 'successful' )
                        {
                           location.reload();
                        }


                    else
                    {
                        document.getElementById("save_emergency_contact").innerHTML = "Save";
                      alert ('An Error Occurred Please Try Again Later!!')
                    }


                    }
                });
      }


});




});
</script>





<div id="body_center">

<div id="personal_account_container">



<div><h1><center><b>Personal info</b></center></h1></div>

<?php
include 'database_connection.php';
$user = $_COOKIE["Nacsitar"];
  $result = $ireport->query('SELECT  info.First_name as First_name, info.Last_name as Last_name,
   info.Date_Of_Birth as Date_Of_Birth, info.Gender as Gender, info.Email as Email,

(SELECT (profile_images.database_id) FROM profile_image as profile_images
WHERE info.User_Key = profile_images.User_Key )
as profile_images,

(SELECT (image_roots.image_root) FROM profile_image as image_roots
WHERE info.User_Key = image_roots.User_Key )
as image_roots,

(SELECT (phone.phone_number) FROM phone_number as phone
WHERE info.User_Key = phone.User_Key )
as phone,

(SELECT (government_id.serial_number) FROM Government_ids as government_id
WHERE info.User_Key = government_id.User_Key ORDER BY government_id.database_ids DESC LIMIT 1)
as government_id,

(SELECT (Your_Address.Address) FROM Address as Your_Address
WHERE info.User_Key = Your_Address.User_Key ORDER BY Your_Address.database_id DESC LIMIT 1)
as Your_Address,

(SELECT (Your_contact.Emergency_contact) FROM Emergency_contact as Your_contact
WHERE info.User_Key = Your_contact.User_Key ORDER BY Your_contact.database_id DESC LIMIT 1)
as Your_contact



FROM Personal_Information as info
WHERE  info.User_Key = "'.$user.'"
 GROUP BY info.User_Key ORDER BY info.User_Key DESC');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{
   // will selected information is output
         $row = $result->fetch_assoc();

         $First_name = htmlentities($row['First_name']);
         $Last_name = htmlentities($row['Last_name']);
         $Date_Of_Birth = htmlentities($row['Date_Of_Birth']);
         $Date_Of_Births = htmlentities($row['Date_Of_Birth']);
         $Date_Of_Birth = new DateTime($Date_Of_Birth);
         $Date_Of_Birth = date_format($Date_Of_Birth, '  jS  F Y  ');
         $Gender = htmlentities($row['Gender']);
         $Email = htmlentities($row['Email']);
         $phone = htmlentities($row['phone']);
         $image_roots = htmlentities($row['image_roots']);
         $profile_images = htmlentities($row['profile_images']);
         $government_id = htmlentities($row['government_id']);
         if ($government_id == '')
         {
           $government_id  = 'Not Provided';
         }

         else
         {
             $government_id  = $government_id;
         }

      $Your_Address = htmlentities($row['Your_Address']);
         if ($Your_Address == '')
         {
           $Your_Address  = 'Not Provided';
         }

         else
         {
             $Your_Address  = $Your_Address;
         }


         $Your_contact = htmlentities($row['Your_contact']);
         if ($Your_contact == '')
         {
           $Your_contact  = 'Not Provided';
         }

         else
         {
             $Your_contact  = $Your_contact;
         }


echo '<div class="options">
<div style="width:90%; float:left;"><b>Legal Name </b><br>'.$First_name.' '.$Last_name.'</div>
<div style="width:10%; float:left;" id="edit_name"> <button>Edit</button></div>

<div style="width:100%; float:left; display:none;"" id="edit_name_container">
    <input id="edit_first_name" class="edit_input" type="text" placeholder="First Name" value="'.$First_name.'"/>
    <input id="edit_last_name" class="edit_input" type="text" placeholder="Last Name" value="'.$Last_name.'"/>
    <button class="button_cancel" id="cancel_name_edit">Cancel</button> <button class="button_save" id="save_name_edit">Save</button>
</div>
</div>';



echo '<div class="options">
    <div style="width:90%; float:left;"><b>Gender </b><br>'.$Gender.'</div>
      <div style="width:10%; float:left;" id="edit_gender"> <button>Edit</button></div>
    <div style="width:100%; float:left; display:none;"" id="edit_gender_container">
    <select class="edit_input" id="gender" style="width:100%;">
                    <option>GENDER</option>
                    <option>MALE</option>
                    <option>FEMALE</option>
                    <option>NON-BINARY</option>
                </select>
    <button class="button_cancel" id="cancel_gender_edit">Cancel</button> <button class="button_save" id="save_gender_edit">Save</button>
</div>

</div>';

echo '<div class="options">
<div style="width:90%; float:left;"><b>Date Of Birth </b><br>'.$Date_Of_Birth.'</div>
<div style="width:10%; float:left;" id="edit_age"> <button>Edit</button></div>

<div style="width:100%; float:left; display:none;"" id="edit_age_container">
    <input id="edit_date_of_birth" style="width:100%;" class="edit_input" type="date" placeholder="Date Of Birth" value="'.$Date_Of_Births.'"/>
    <button class="button_cancel" id="cancel_age_edit">Cancel</button> <button class="button_save" id="save_age_edit">Save</button>
</div>
</div>';


echo '<div class="options">
<div style="width:90%; float:left;"><b>Email Address </b><br>'.$Email.'</div>
<div style="width:10%; float:left;" id="edit_email"> <button>Edit</button></div>

<div style="width:100%; float:left; display:none;"" id="edit_email_container">
    <input id="edit_Email_input" style="width:100%;" class="edit_input" type="email" placeholder="Your Email" value="'.$Email.'"/>
    <button class="button_cancel" id="cancel_email_edit">Cancel</button> <button class="button_save" id="save_email_edit">Save</button>
</div>
</div>';


echo '<div class="options"><b>Phone Number</b><br>'.$phone.'</div>';

echo '<div class="options">
<div style="width:90%; float:left;"><b>Government ID </b><br>'.$government_id.'</div>
<div style="width:10%; float:left;" id="Add_government_id"> <button>Add</button></div>

<div style="width:100%; float:left; display:none;"" id="Add_government_id_container">
    <input id="add_government_id_input" style="width:100%;" class="edit_input" type="text" placeholder="Enter Your National Identity Number"/>
    <button class="button_cancel" id="cancel_Add_government_id">Cancel</button> <button class="button_save" id="save_Add_address">Save</button>
</div>
</div>';


echo '<div class="options">
<div style="width:90%; float:left;"><b>Address </b><br>'.$Your_Address.'</div>
<div style="width:10%; float:left;" id="Add_address"> <button>Add</button></div>

<div style="width:100%; float:left; display:none;"" id="Add_address_container">
    <input id="add_address_input" style="width:100%;" class="edit_input" type="text" placeholder="Enter Your Address"/>
    <button class="button_cancel" id="cancel_Add_address">Cancel</button> <button class="button_save" id="save_Address">Save</button>
</div>
</div>';

echo '<div class="options">
<div style="width:90%; float:left;"><b>Emergency Contacts </b><br>'.$Your_contact.'</div>
<div style="width:10%; float:left;" id="Add_emergency_contact"> <button>Add</button></div>

<div style="width:100%; float:left; display:none;"" id="Add_emergency_contact_container">
    <input id="add_emergency_contact_input" style="width:100%;" class="edit_input" type="text" placeholder="Enter Your Emergency Contacts"/>
    <button class="button_cancel" id="cancel_Add_emergency_contact">Cancel</button> <button class="button_save" id="save_emergency_contact">Save</button>
</div>
</div>';

 }


 ?>



</div>


<div id="personal_account_info_container">

 <img src="<?php echo $image_roots.'/'.$profile_images.'.jpg'; ?>" onClick="profile_verify()" id="profile_image_display">




<div style="width:100%; float:left; margin-top:5%;">
    <img src="key2.png" width="50px" height="50px"></img>
<center><b>Which Detail Can Be Edited?</b></center>
Detail Used By NACSITAR To verify Your identity Can not be Edited.
    Contact Info Can be Changed but we may Ask You to Verify Your Account the Next Time You Try To connect
    To A Tourist Guide Or Host A location.
</div>


<div style="width:100%; float:left; margin-top:5%;">
    <img src="lock_key.png" width="50px" height="50px"></img>
<center><b>What Info Is Shared With Others</b></center>
 Nacsitar Only Release Contact information to Tourist guide or a tourist After their Account is Confirmed Confirmed
</div>

</div>



</div>



<?php

if (isset($_COOKIE["Nacsitar"]))
{

include 'database_connection.php';
$user = $_COOKIE["Nacsitar"];

$result = $ireport->query('SELECT  database_id
FROM Personal_Information
WHERE  User_Key = "'.$user.'"  ');


//if result is not empty
if (mysqli_num_rows($result) > 0)
{

}
else
{
    include 'complet_information_mobile.php';
}

}
?>

<?php include 'bottom_mobile.php' ?>


