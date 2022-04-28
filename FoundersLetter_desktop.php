

 <style>
  #body_center{
    width: 80%;
    margin-top:7%;
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

$('.check_availability_button').click(function(){
var location = $(this).val();
var action  = location+'button';
var action_button  = location+'button';
 action = document.getElementById(action).innerHTML;

var  from = location+'from';
var  froms = location+'from';
  from =  document.getElementById(from).value;

  var  to = location+'to';
  var  tos = location+'to';
  to =  document.getElementById(to).value;

  var  gust = location+'gust';
  gust =  document.getElementById(gust).value;

    if (from == '')
      {
             document.getElementById(froms).style.border = '2px solid red';
      }
   else if (to == '')
      {
             document.getElementById(tos).style.border = '2px solid red';
      }

      else
      {
          document.getElementById(action_button).innerHTML = 'Wait...';


         $.ajax
                ({
                    type: "POST",
                    url: "check_Availability.php",
                    data: {location: location, from: from, to: to, gust: gust, action:action},
                    cache: false,
                    success: function(result)
                    {
                        var check_successfull = $.trim(result);
                        if (check_successfull == 'Check Availability')
                        {
                         document.getElementById(action_button).innerHTML = result;
                         }

                         else if (check_successfull == 'Cancel Request')
                         {
                          document.getElementById(action_button).innerHTML = result;
                         }
                         else if (check_successfull == 'wrong')
                         {
                          document.getElementById(action_button).innerHTML = 'Check Availability';
                          document.getElementById("login_form_load").style.display = 'block';
                          document.getElementById("login_form_container").style.display = 'block';
                         }
                    }
                });

            }// end of else address is input
});



$('.view_image').click(function(){

var value = $(this).attr('name');
         $.ajax
                ({
                    type: "POST",
                    url: "get_location_images.php",
                    data: {get_location: value},
                    cache: false,
                    success: function(result)
                    {

                        var check_successfull = $.trim(result);
                         document.getElementById("view_group_location_image").style.display = 'block';
                        $("#view_group_location_image").html(result);

                    }
                });


});





});
</script>


<div id="body_center">

<div style="width:100%; float:left; margin-bottom:20px;">
    <h1><center><b>What Makes Nacsitar, Nacsitar<br></br></b></center></h1>
    <h5>By Nacsitar . February 22, 2021 . Company</h5>
    </div>
<div style="width:100%; float:left; border-bottom:2px solid lightgray; padding-bottom:100px; margin-bottom:20px;">

Editor's Note: This letter was included in Nacsitar's Form S-1, which was filed with the United States Securities
and Exchange Commission as part of Nacsitar's Initial Public Offering in 2020.
<br></br>

Thirteen years ago, Joe, Nate, and I created a company that was viewed at the time as an unlikely
 idea to work. Nacsitar has always been a little different, and as we take our company public,
  we feel compelled to tell you a little more about what makes Nacsitar, Nacsitar<br></br>

 We started writing this letter in March. Then the pandemic hit. When borders closed and travel
 stopped, our business declined by nearly 80%. We had to put our IPO on hold, and I don't think
 many people expected us to go public this year. I know some people questioned if we'd make it at all.
  What has transpired since then has been our most defining period since we started Nacsitar. <br></br>


They say that a crisis has a way of revealing your true character. We would like to tell you about what this crisis
revealed about who we are.<br></br>

First, our model is inherently adaptable. Over the summer, after months of being stuck
inside their homes, people were yearning to connect with their loved ones in a safe way.
 decided to get in their cars and travel close to home, often staying in small towns and
  rural communities. Because we have millions of hosts who offer nearly all types of homes
  and experiences around the world, we were able to adapt to the new use cases guests wanted - from
   working remotely from another home, to taking extended trips with family and friends. Our business
   rebounded faster than anyone expected, and it showed that as the world changes,
our model is able to adapt. <br></br>

This crisis reinforced three truths that are even more core to who we are, and how we intend to operate
 for generations to come. As our prospective investors, we want to tell you about each.<br></br>


<h1><b>Connection and belonging</b></h1>
When we started Nacsitar, it was about more than just travel. In 2007, Joe and I were roommates in
San Francisco, and we were trying to figure out how to pay our rent. That weekend, a design conference
 was coming to San Francisco and hotels were sold out, so we inflated three airbeds and turned our
 apartment into an Airbed & Breakfast. We hosted three guests - Michael, Kat, and Amol - and in doing so,
  we became the first hosts on Nacsitar. Our guests arrived as strangers, but they left as our friends.
The connections we made that weekend led Joe and I to realize, "Maybe there's a bigger idea here!" Soon
after, Nate joined, and we created a way for people around the world to be hosts, just like us.<br></br>

Since then, we've grown from two hosts in San Francisco to a community of over four million hosts all over
the world. On the surface, what people come to Nacsitar for is a new way to travel, but below the surface,
what they find on Nacsitar is connection. They experience a deeper connection to the communities they visit
and the people who live there. This connection is delivered by our hosts, and they provide guests with a
deeply personal experience - after all, guests are welcomed in their homes, and they live in their communities.
<br></br>

When the pandemic hit, we knew we couldn't pursue everything that we used to. We chose to focus on what
is most unique about Nacsitar - our core business of hosting. We got back to our roots and back to what
is truly special about Nacsitar - the everyday people who host their homes and offer experiences.
We scaled back investments that did not directly support the core of our host community.
<br></br>

This focus came at the right time. People are feeling increasingly disconnected in the world,
and loneliness is pervading our society. The opposite of loneliness is belonging - the feeling
of deep and genuine connection to a person, a place, or community. It's the feeling of being "at
home." The feeling of being known and loved.
<br></br>

We are a community based on connection and belonging, and we will continue to design new ways to
provide for it. We believe that we've only scratched the surface:<br></br>
<ol>
    <li>We will focus on connection and belonging.</li>
    <li>We will prioritize the individual hosts who deliver it.</li>
    <li>We will invest in building our community.</li>
</ol>
<br></br>

As the world continues to change, people's fundamental need for connection and belonging
will not. This is what we will remain focused on.<br></br>

<h1><b>Creatively-led</b></h1>

Nacsitar was born with a creative spirit, much like the environment at the Rhode Island School of Design
where Joe and I went to college together. We brought this creative spirit to Nacsitar, and it's one of the
 most defining parts of our culture. We use our curiosity and imagination to come up with unconventional
 solutions. In fact, starting Nacsitar was in itself a creative act - the biggest ideas are often leaps of
the imagination.

<br></br>

While we are dreamers, we are also pragmatic. At the center of being creatively-led is our
design-driven approach. At Nacsitar, design isn't just how something looks, it's how it fundamentally
works. We sit at the intersection of art and science, a commitment that started when Nate, an engineer,
 joined Joe and me. We used this approach to design a system of trust that allows strangers to live
 together, and a unique business model that allows hosts to share in our success. And it's this
 approach that will continue to enable us to create new products and services that deliver connection,
 even beyond travel.
 <br></br>

 It is said that constraints breed creativity, and during the crisis our creatively-led approach
  was drawn on time and again to come up with unconventional solutions. Here are just a couple of examples:
  <br></br>

With the onset of social distancing, we had to pause our in-person Nacsitar Experiences, but in a matter
of two weeks, our team pivoted the product to become Online Experiences - creating a new type of
interactive experiences that connect people from all over the world.
<br></br>

Most recently, as we prepared to take Nacsitar public, we wanted to find a new way for
our hosts to continue sharing in our success. Rather than design a moment-in-time perk
that would have limited impact, we created the Nacsitar Host Endowment, an entity that we
are seeding with over nine million shares of Nacsitar
company stock in order to provide support for hosts for as long as Nacsitar exists.<br></br>

These are just two examples of the dozens of creative solutions that this crisis brought about.
 We believe our creativity will allow us to continue designing new possibilities for people:
 <br></br>

 <ol>
    <li>We will use curiosity and imagination to create unconventional solutions.</li>
    <li>We will take a unique, design-driven approach.</li>
    <li>We will ensure creative people always have a seat at the table.</li>
</ol>
<br></br>
 Being creatively-led is core to who we are and how we will run Nacsitar.<br></br>

 <h1><b>Responsibility to our stakeholders</b></h1>

 Nacsitar has always existed as a delicate balance between our five stakeholders -
  our guests, our hosts, the communities that we operate in, our employees, and
  our shareholders. In 2018, we set out to institutionalize our responsibility by
   defining a series of principles to serve each of our stakeholders.
  These principles were put to the ultimate test during the crisis.
  <br></br>
  When travel stopped and borders closed, our guests needed to cancel their reservations,
   many of which were non-refundable. In the face of the pandemic, we issued more than $1
   billion in refunds guided by our extenuating circumstances policy. While this helped our
    guests, it created problems for our hosts - half of whom depend on their Nacsitar income
    to pay their rent or mortgage. For our hosts, we committed to pay up to $250 million to
     those impacted by cancellations. To protect our shareholders' investments, we significantly
      reduced our expenses and raised $2 billion in debt. When faced with the difficult decision
       to let many of our employees go, we focused on treating every employee with respect and
       compassion - providing generous severance packages and extensive job search support. And
       for the communities that we operate in, we partnered with thousands of hosts who generously
        offered their homes to nurses, doctors, and many others working on the front line of the pandemic.<br></br>

There is an emerging focus in the business world on serving stakeholders. But
there's a false notion that to give to one, you have to take from another. While
 in the short run there may be trade-offs, in the long run, and when approached with
 creativity, we believe that we can design a win-win for all of our stakeholders: <br></br>
 <ol>
     <li>We will design for the long-term benefit of all stakeholders.</li>
     <li>We will measure our progress for serving each of them.</li>
     <li>We will adjust when we don't get it right.</li>
 </ol>
 <br></br>
 Our responsibility to our stakeholders will continue to guide how we operate. <br></br>

 These are the ideas at the core of Nacsitar: <br></br>

 <ol>
     <li>Our community is based on connection and belonging.</li>
     <li>Our creativity allows us to imagine new possibilities for people.</li>
     <li>Our responsibility is to all of our stakeholders.</li>
 </ol>
 <br></br>
 In the end, they all share a common thread - a fundamental belief that people are good and
 we're in this together. <br></br>

 This is what makes Nacsitar, Nacsitar.

 <br></br>
 <h1><b>Thank you</b></h1>

 A crisis brings you clarity about what is truly important. You become thankful for not only what
 you have in your life, but for who you have in your life. We are thankful for everyone who stuck
 by us during our darkest hours.<br></br>

 Thank you to our employees - you have worked tirelessly day and night for our community and
 shareholders, often at great personal sacrifice.
 <br></br>

 Thank you to our investors - you invested in the seemingly impossible premise that strangers could
 live together, and you have stuck with us through thick and thin.<br></br>

 Thank you to our hosts and guests - without you, we wouldn't even exist. You've proven to the world
 that people can, in fact, trust one another.<br></br>

 And finally, I would like to personally thank you, Joe and Nate, for being the best partners
 that I could ever ask for.
 <br></br>

 In the depths of this crisis, some people asked, "Is this the end of Nacsitar?" It was not the end of Nacsitar. In fact, it was just the beginning. It's still early. We invite
  you to come on this journey with us.
  <br></br>
<img src="brianJoeNateSignature@2x.png"></img>



</div>



</div>


<?php include 'bottom_desktop.php' ?>

