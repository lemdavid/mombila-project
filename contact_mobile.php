

 <style>
  #body_center{
    width: 80%;
    margin-top:400px;
    margin-left:10%;
    float: left;
 display:block;
 margin-bottom:20%;
 font-size:16px;
 background-color:white;
}

a {
  text-decoration: none;
  color: black;
}




</style>


<script>
$(document).ready(function() {


$.get( "home_diff1a75splay_include_desktop.php?scroll_load=1", function( data ) {
  $( "#body_center" ).html( data );
});


});
</script>



<script>
$(document).ready(function() {



$("#btn_send").click(function() {

   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   var phoneformat = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
   var email =  document.getElementById("txt_email");
   var phone =  document.getElementById("txt_phone");

      if ($("#txt_name").val() == '')
      {
             document.getElementById("txt_name").style.border = '3px solid red';
      }



      else if (!$.trim(email.value).match(mailformat) )
      {
            document.getElementById("txt_email").style.border = '3px solid red';
      }


      else if ( !$.trim(phone.value).match(phoneformat)  )
      {
            document.getElementById("txt_phone").style.border = '3px solid red';
      }

      else if ($("#txt_subject").val() == '')
      {
            document.getElementById("txt_subject").style.border = '3px solid red';
      }

     else if ($("#txt_message").val() == '')
      {
            document.getElementById("txt_message").style.border = '3px solid red';
      }


      else
      {

           document.getElementById("btn_send").value = "wait...";

           var txt_name =  document.getElementById("txt_name").value;
           var txt_email =  document.getElementById("txt_email").value;
           var txt_phone =  document.getElementById("txt_phone").value;
           var txt_subject =  document.getElementById("txt_subject").value;
           var txt_message =  document.getElementById("txt_message").value;




            $.ajax
                ({
                    type: "POST",
                    url: "contact_us_submit.php",
                    data: {txt_name: txt_name, txt_email: txt_email, txt_phone: txt_phone, txt_subject: txt_subject, txt_message: txt_message },
                    cache: false,
                    success: function(result)
                    {
                        var check_successfull = $.trim(result);
                     if (check_successfull == 'successful' )
                        {
                               alert('Thank You For Contacting Us')
                               location.reload();
                        }


                    else
                    {

                    }


                    }
                });
      }


});




});
</script>

<style>
   *{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

.contact-parent{
    display:flex;
    margin:80px 0;
}

.contact-child{
    display:flex;
    flex:1;
    box-shadow:0px 0px 10px -2px rgba(0,0,0,0.75);
}

.child1{
    background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("https://cdn.pixabay.com/photo/2019/06/28/00/17/architecture-4303279_1280.jpg");
    background-size:cover;
    display:flex;
    flex-direction:column;
    justify-content:space-around;
    color:#fff;
    padding:100px 0;
}

.child1 p{
    padding-left:20%;
    font-size:20px;
    text-shadow:0px 0px 2px #000;
}

.child1 p span{
    font-size:16px;
    color:#9df2fd;
}

.child2{
    flex-direction:column;
    justify-content:space-around;
    align-items:center;
}

.inside-contact{
    width:90%;
    margin:0 auto;
}

.inside-contact h2{
    text-transform:uppercase;
    text-align:center;
    margin-top:50px;
}

.inside-contact h3{
    text-align:center;
    font-size:36px;
    color:#0085e2;
}

.inside-contact input, .inside-contact textarea{
    width:100%;
    background-color:#eee;
    border:1px solid rgba(0,0,0,0.48);
    padding:15px 20px;
    margin-bottom:20px;
}

.inside-contact input[type=submit]{
    background-color:#000;
    color:#fff;
    transition:0.2s;
    border:2px solid #000;
    padding:15px 20px;
    margin:30px 0;
}

.inside-contact input[type=submit]:hover{
    background-color:#fff;
    color:#000;
    transition:0.2s;
}

@media screen and (max-width:991px){
    .contact-parent{
        display:block;
        width:100%;
    }

    .child1{
        display:none;
    }

    .child2{
        background-image:linear-gradient(rgba(255,255,255,0.7),rgba(255,255,255,0.7)), url("https://cdn.pixabay.com/photo/2019/06/28/00/17/architecture-4303279_1280.jpg");
        background-size:cover;
    }

    .inside-contact input, .inside-contact textarea{
        background-color:#fff;
    }
}

</style>

<div id="body_center">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="Style.css" rel="stylesheet" />
</head>

<body>
    <div>
            <div class="container">
                <div class="contact-parent">
                    <div class="contact-child child1">
                        <p>
                            <i class="fas fa-map-marker-alt"></i> Address <br />
                            <span>  Andenes village, Andoy Municipality, Vesteralen district,
                                <br />
                                Nordland county, Norway
                            </span>
                        </p>

                        <p>
                            <i class="fas fa-phone-alt"></i> Let's Talk <br />
                            <span> Temporary Down</span>
                        </p>

                        <p>
                            <i class=" far fa-envelope"></i> General Support <br />
                            <span>andreea@andreeabunget.co.uk</span>
                        </p>
                    </div>

                    <div class="contact-child child2">
                        <div class="inside-contact">
                            <h2>Contact Us</h2>
                            <h3>
                               <span id="confirm">
                            </h3>

                            <p>Name *</p>
                            <input id="txt_name" type="text" Required="required">

                            <p>Email *</p>
                            <input id="txt_email" type="text" Required="required">

                            <p>Phone *</p>
                            <input id="txt_phone" type="text" Required="required">

                            <p>Subject *</p>
                            <input id="txt_subject" type="text" Required="required">

                            <p>Message *</p>
                            <textarea id="txt_message" rows="4" cols="20" Required="required" ></textarea>

                            <input type="submit" id="btn_send" value="SEND">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</div>


<?php include 'bottom_mobile.php' ?>

