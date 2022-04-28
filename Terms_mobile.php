

 <style>
  #body_center{
    width: 80%;
    margin-top:400px;
    margin-left:10%;
    float: left;
 display:block;
 margin-bottom:20%;
 font-size:56px;
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
    <h1><center><b>Terms of Service<br></br></b></center></h1>
    <h3>Last Updated: October 30, 2020</h3>
    </div>
<div style="width:100%; float:left; border-bottom:2px solid lightgray; padding-bottom:100px; margin-bottom:20px;">

Thank you for using Nacsitar!
<br></br>
These Terms of Service ("Terms") are a binding legal agreement between you and Nacsitar that
govern your use of the websites, applications, and other offerings from Nacsitar (collectively,
the "Nacsitar Platform"). When used in these Terms, "Nacsitar," "we," "us," or "our" refers to the
Nacsitar entity set out on Schedule 1 with whom you are contracting.

<br></br>
The Nacsitar Platform offers an online venue that enables users ("Members") to publish, offer,
search for, and book services. Members who publish and offer services are "Hosts" and Members
who search for, book, or use services are "Guests." Hosts offer accommodations ("Accommodations"),
activities, excursions, and events ("Experiences"), and a variety of travel and other services
(collectively, "Host Services," and each Host Service offering, a "Listing"). You must register
an account to access and use many features of the Nacsitar Platform, and must keep your account
information accurate. As the provider of the Nacsitar Platform, Nacsitar does not own, control, offer
or manage any Listings or Host Services. Nacsitar is not a party to the contracts concluded directly
between Hosts and Guests, nor is Nacsitar a real estate broker or insurer. Nacsitar is not acting as an
agent in any capacity for any Member, except as specified in the Payments Terms of Service ("Payment Terms").
To learn more about Nacsitar's role see Section 16.<br></br>

If you Host, you are responsible for understanding and complying with all laws, rules, regulations and
contracts with third parties that apply to your Host Services.<br></br>

<h3><b>Guest Terms</b></h3>

<b>1. Our Mission.</b> <br></br>
Our mission is to create a world where you can belong anywhere. From cabins to castles to cooking
classes, browse through millions of Listings to find the ones that fit the way you like to travel.
Learn more about a Listing by reviewing the description and photos, the Host profile, and Guest reviews.
If you have questions, just message the Host.
<br></br>

<b>2. Searching and Booking on Nacsitar.</b>
<br></br>

<b>2.1 Searching.</b> You can search for Host Services by using criteria like the type of Host Service,
travel destination, travel dates, and number of guests. You can also use filters to refine your search
results. Search results are based on their relevance to your search and other criteria. Relevance
considers factors like price, availability, Reviews, customer service and cancellation history,
popularity, previous trips and saved Listings, Host requirements (e.g. minimum or maximum nights)
<br></br>
<b>2.2 Booking.</b> When you book a Listing, you are agreeing to pay all charges for your booking
including the Listing price, all applicable fees ").

<b>2.3 Accommodation Reservations.</b> An Accommodation reservation is a limited license to enter, occupy,
and use the Accommodation. The Host retains the right to re-enter the Accommodation during your stay,
to the extent: (i) it is reasonably necessary, (ii) permitted by your contract with the Host, and (iii)
consistent with applicable law. If you stay past checkout, the Host has the right to make you leave in a
manner consistent with applicable law, including by imposing reasonable overstay penalties. You may not
exceed the maximum number of allowed Guests.<br></br>

<b>2.4 Reservations for Experiences and Other Host Services.</b> An Experience or other Host Service
reservation entitles you to participate in, attend, or use that Host Service. You are responsible for
confirming that you, and anyone you invite, meet minimum age,
proficiency, fitness, or other requirements. You are responsible for informing the Host of any medical
or physical conditions, or other circumstances that may impact your ability to participate, attend, or
use the Host Service. Except where expressly authorized, you may not allow any person to join a Host
Service unless they are included as an additional guest during the booking process.
<br></br>

<b>3. Your Responsibilities and Assumption of Risk.</b><br></br>

<b>3.1 Your Responsibilities.</b> You are responsible and liable for your own acts and omissions and
are also responsible for the acts and omissions of anyone you invite to join or provide access to
any Accommodation, Experience or other Host Service. For example, this means: (i) you are
responsible for leaving an Accommodation (and related personal property) in the condition it
was in when you arrived, and (ii) you must act with integrity, treat others with respect, and
comply with applicable laws at all times. If you are booking for an additional guest who is a
minor or if you bring a minor to a Host Service, you must be legally authorized to act on behalf
of the minor and you are solely responsible for the supervision of that minor.<br></br>

<b>4.2 Your Assumption of Risk. You acknowledge that many activities carry inherent
risks and agree that, to the maximum extent permitted by applicable law, you assume the
entire risk arising out of your access to and use of the Nacsitar Platform and any Content
(as defined in Section 10), including your stay at any Accommodation, participation in any
Experience, use of any other Host Service, or any other interaction you have with other Members
whether in person or online. This means it is your responsibility to investigate a Host Service
to determine whether it is suitable for you. For example, Host Services may carry risk of illness,
bodily injury, disability, or death, and you freely and willfully assume those risks by choosing to
participate in those Host Services.</b>
<br></br>
<h3><b>Host Terms</b></h3>

<b>4. Hosting on Nacsitar.</b>
<br></br>
<b>4.1 Host.</b> As a Host, Nacsitar offers you the opportunity to share your Accommodation, Experience,
or other Host Service with our vibrant community of Guests - and earn money doing it. It's easy to
create a Listing and you are in control of how you host - set your price, availability, and rules for
each Listing.
<br></br>
<b>5 Contracting with Guests.</b> When you accept a booking request, or receive a booking confirmation
through the Nacsitar Platform, you are entering into a contract directly with the Guest, and are
responsible for delivering your Host Service under the terms and at the price specified in your Listing.
You are also agreeing to pay applicable fees like Nacsitar's service fee (and applicable taxes) for each
booking. Nacsitar Payments will deduct amounts you owe from your payout unless we and you agree to a different
method. Any terms, policies or conditions that you include in any supplemental contract with Guests must:
(i) be consistent with these Terms, our Policies, and the information provided in your Listing, and (ii)
be prominently disclosed in your Listing description.
<br></br>


<b>6. Managing Your Listing.</b><br></br>
<b>6.1 Creating and Managing Your Listing.</b> The Nacsitar Platform provides tools that make it
easy for you to set up and manage a Listing. Your Listing must include complete and accurate
information about your Host Service, your price, other charges like cleaning fees, resort fees,
security deposits, offline fees, and any rules or requirements that apply to your Guests or Listing.
You are responsible for keeping your Listing information (including calendar availability) and content
(like photos) up-to-date and accurate at all times. We recommend that you obtain appropriate insurance
for your Host Services and suggest you carefully review policy terms and conditions including coverage
details and exclusions. You may only maintain one Listing per Accommodation, but may have multiple
Listings for a single property if it has multiple places to stay. Any offer of an Experience is subject
to our Additional Terms for Experience Hosts.<br></br>

<b>6.2 Know Your Legal Obligations.</b> You are responsible for understanding and complying with any laws,
rules, regulations, and contracts with third parties that apply to your Listing or Host Services. For example:
Some landlords and leases, or homeowner and condominium association rules, restrict or prohibit subletting,
short-term rentals and/or longer-term stays. Some cities have zoning or other laws that restrict the
short-term rental of residential properties. Some jurisdictions require Hosts to register, get a permit,
or obtain a license before providing certain Host Services (such as short-term rentals, longer-term stays,
preparing food, serving alcohol for sale, guiding tours, or operating a vehicle). In some places, the Host
Services you want to offer may be prohibited altogether. Some jurisdictions require that you register Guests
who stay at your Accommodation. Some jurisdictions have laws that create tenancy rights for Guests and
additional obligations for Hosts. For example, some places have landlord-tenant, rent control, and eviction
laws that may apply to longer stays. Check your local rules to learn what rules apply to the Host Services
you plan to offer. Information we provide regarding legal requirements is for informational purposes only
and you should independently confirm your obligations. You are responsible for handling and using personal
data of Guests and others in compliance with applicable privacy laws and these Terms, including our Host
Privacy Standards. If you have questions about how local laws apply you should always seek legal advice.<br></br>

<b>6.3 Search Ranking.</b> The ranking of Listings in search results on the Nacsitar Platform depends on a variety
of factors, including these main parameters:
<br></br>
<ul>
    <li>Guest search parameters (e.g. number of Guests, time and duration of the trip, price range),</li>
    <li>Listing characteristics (e.g. price, calendar availability, number and quality of images, Reviews, type of Host Service, Host status, age of the Listing, average Guest popularity),</li>
    <li>Guest booking experience (e.g. customer service and cancellation history of the Host, ease of booking),</li>
    <li>Host requirements (e.g. minimum or maximum nights, booking cut-off time), and</li>
    <li>Guest preferences (e.g. previous trips, saved Listings, location from where the Guest is searching).</li>
</ul>
<br></br>

Search results may appear different on our mobile application than they appear on our website.
 Nacsitar may allow Hosts to promote their Listings in search or elsewhere on the Nacsitar Platform
 by paying an additional fee. More information about the factors that determine how your Listing
 appears in search results, our current promotional programs (if any)
 <br></br>

 <b>6.4 Your Responsibilities.</b> You are responsible and liable for your own acts and omissions and are
 also responsible for the acts and omissions of anyone you allow to participate in providing your Host
 Services. You are responsible for setting your price and establishing rules and requirements for your
 Listing. You must describe any and all fees and charges in your Listing description and may not collect
 any additional fees or charges outside the Nacsitar Platform except those expressly authorized by our
 Offline Fee Policy. Do not encourage Guests to create third-party accounts, submit reviews, provide
 their contact information, or take other actions outside the Nacsitar Platform in violation of our
 Off-Platform Policy.

 <br></br>

 <b>6.5 Hosting as a Team or Organization.</b> If you work with a co-host or host as part of a team,
 business, or other organization, the entity and each individual who participates in providing Host
 Services is responsible and liable as a Host under these Terms. If you accept terms or enter into
 contracts, you represent and warrant that you are authorized to enter into contracts for and bind
 your team, business or other organization, and that each entity you use is in good standing under the
 laws of the place where it is established. If you perform other functions, you represent and warrant
 that you are authorized to perform those functions. If you instruct Nacsitar to transfer a portion of
 your payout to a co-host or other Hosts, or to send payments to someone else, you must be authorized
 to do so, and are responsible and liable for the payment amounts and accuracy of any payout information
 you provide.
 <br></br>

 <b>6.6 Your Assumption of Risk. You acknowledge that hosting carries inherent risks and agree that you
 assume the entire risk arising out of your access to and use of the Nacsitar Platform, offering Host Services,
 or any interaction you have with other Members whether in person or online. You agree that you have had the
  opportunity to investigate the Nacsitar Platform and any laws, rules, regulations, or obligations that may
  be applicable to your Listings or Host Services and that you are not relying upon any statement of law
  made by Nacsitar.</b>
  <br></br>
  <b>7. Cancellations, Travel Issues, and Booking Modifications.</b>
  <br></br>

  <b>7.1 Cancellations and Travel Issues.</b> In general, if a Guest cancels a reservation, the
  amount paid to you is determined by the cancellation policy that applies to that reservation.
  As a host, you should not cancel on a Guest without a valid reason under our Extenuating
  Circumstances Policy or applicable law. If you cancel on a Guest without such a valid reason,
  we may impose a cancellation fee and other consequences. If: (i) a Guest experiences a Travel
  Issue (as defined by the Guest Refund Policy), (ii) an Extenuating Circumstance arises, or (iii)
  a reservation is cancelled under Section 13 of these Terms, the amount you are paid will be reduced
   by the amount we refund or otherwise provide to the Guest, and by any other reasonable costs we
   incur as a result of the cancellation. If a Guest receives a refund after you have already been
   paid, or the amount of the refund and other costs incurred by Nacsitar exceeds your payout, Nacsitar
   (via Nacsitar Payments) may recover that amount from you, including by offsetting the refund against
   your future payouts. You agree that Nacsitar's Guest Refund Policy, Extenuating Circumstances Policy,
   and these Terms preempt the cancellation policy you set in situations where they allow for the
   cancellation of a reservation and/or the issuance of refunds to Guests. If we reasonably expect to
   provide a refund to a Guest under one of these policies, we may delay release of any payout for
   that reservation until a refund decision is made. If you Host an Experience please note that the
   Experience Cancellation Policy, Experiences Guest Refund Policy and different cancellation fees and
   consequences apply to your reservations. See each Policy for details about what is covered, and what
   your payout will be in each situation.<br></br>

   <b>7.2 Booking Modifications.</b> Hosts and Guests are responsible for any Booking Modifications they
   agree to make via the Nacsitar Platform or direct Nacsitar customer service to make on their behalf, and
   agree to pay any additional amounts, fees or taxes associated with a Booking Modification.

   <br></br>
   <b>8 Reporting Violations. </b>If you believe that a Member, Listing or Content poses an imminent
   risk of harm to a person or property, you should immediately contact local authorities before
   contacting Nacsitar. In addition, if you believe that a Member, Listing or Content has violated
   our Standards, you should report your concerns to Nacsitar. If you reported an issue to local authorities,
   Nacsitar may request a copy of that report. Except as required by law, you agree that we are not
   obligated to take action in response to any report.
   <br></br>

   <b>9 Termination.</b> You may terminate this agreement at any time by sending us an email or by
   deleting your account. Nacsitar may terminate this agreement and your account for any reason by giving
   you 30 days' notice via email or using any other contact information you have provided for your
   account. Nacsitar may also terminate this agreement immediately and without notice and stop providing
   access to the Nacsitar Platform if you breach these Terms, you violate our Policies, you violate
   applicable laws, or we reasonably believe termination is necessary to protect Nacsitar, its Members,
   or third parties. If your account has been inactive for more than two years, we may terminate your
   account without prior notice.<br></br>

   <b>10 Member Violations.</b> If (i) you breach these Terms, our Policies, or our Standards, (ii)
   you violate applicable laws, regulations, or third-party rights, or (iii) Nacsitar believes it is
   reasonably necessary to protect Nacsitar, its Members, or third parties; Nacsitar may, with or without
   prior notice:
   <br></br>
   <ul>
       <li>suspend or limit your access to or use of the Nacsitar Platform and/or your account;</li>
       <li>suspend or remove Listings, Reviews, or other Content;</li>
       <li>cancel pending or confirmed bookings; or</li>
       <li>suspend or revoke any special status associated with your account.</li>
   </ul>
   <br></br>
   For minor violations or where otherwise appropriate as Nacsitar determines in its sole discretion,
   you will be given notice of any intended measure by Nacsitar and an opportunity to resolve the issue.
   You may appeal actions taken by us under this Section by contacting customer service. If a reservation
   is cancelled under this Section, the amount paid to the Host will be reduced by the amount we refund
   or otherwise provide to the Guest, and by any other costs we incur as a result of the cancellation.
   <br></br>

   <b>10 Legal Mandates.</b> Nacsitar may take any action it determines is reasonably necessary to
   comply with applicable law, or the order or request of a court, law enforcement, or other
   administrative agency or governmental body.
   <br></br>
   <b>11 Effect of Termination.</b> If you are a Host and terminate your Nacsitar account, any confirmed
   booking(s) will be automatically cancelled and your Guests will receive a full refund. If you
   terminate your account as a Guest, any confirmed booking(s) will be automatically cancelled and
   any refund will depend upon the terms of the reservation's cancellation policy. When this agreement
   has been terminated, you are not entitled to a restoration of your account or any of your Content.
   If your access to or use of the Nacsitar Platform has been limited, or your Nacsitar account has been
   suspended, or this agreement has been terminated by us, you may not register a new account or
   access or use the Nacsitar Platform through an account of another Member.<br></br>

   <b>12 Survival.</b> Parts of these Terms that by their nature survive termination,
   will survive termination of this agreement<br></br>

   <b>13. Modification.</b> <br></br>

Nacsitar may modify these Terms at any time. When we make material changes to these Terms, we will
post the revised Terms on the Nacsitar Platform and update the "Last Updated" date at the top of
these Terms. We will also provide you with notice of any material changes by email at least 30
days before the date they become effective. If you disagree with the revised Terms, you may
terminate this agreement immediately as provided in these Terms. If you do not terminate your
agreement before the date the revised Terms become effective, your continued access to or use
of the Nacsitar Platform will constitute acceptance of the revised Terms.<br></br>

<b>14. Resolving Complaints and Damage Claims.</b>

If a Member provides evidence that another Member damaged their real or personal property
("Damage Claim"), the complaining Member can seek compensation through the Resolution Center.
If the complaining Member escalates a Damage Claim to Nacsitar, the other Member will be given
an opportunity to respond. If the responding Member agrees to pay, or Nacsitar determines in
its sole discretion that they are responsible for the Damage Claim, Nacsitar via Nacsitar Payments
can collect any sums required to cover the Damage Claim from the responding Member and/or against
any security deposit. You agree that Nacsitar may seek to recover from you under any insurance
policies you maintain and that Nacsitar may also pursue against you any remedies it may have
available under applicable law. You agree to cooperate in good faith, provide any information
Nacsitar requests, execute documents, and take further reasonable action, in connection with Damage
Claims, Member complaints, claims under insurance policies, or other claims related to your
provision or use of Host Services.<br>s</br>

<b>15. Nacsitar's Role.</b><br></br>

We offer a platform that enables Members to publish, offer, search for, and book Host
Services. While we work hard to ensure our Members have great experiences using Nacsitar,
we do not and cannot control the conduct of Guests and Hosts. You acknowledge that Nacsitar
has the right, but does not have any obligation, to monitor the use of the Nacsitar Platform
and verify information provided by our Members. For example, we may review, disable
access to, remove, or edit Content to: (i) operate, secure and improve the Nacsitar
Platform (including for fraud prevention, risk assessment, investigation and customer
support purposes); (ii) ensure Members' compliance with these Terms; (iii) comply with
applicable law or the order or requirement of a court, law enforcement or other administrative
agency or governmental body; (iv) address Content that we determine is harmful or objectionable;
(v) take actions set out in these Terms; and (vi) maintain and enforce any quality or eligibility
criteria, including by removing Listings that don't meet quality and eligibility criteria. Members
acknowledge and agree that Nacsitar administers its Policies (such as our Extenuating Circumstances
Policy) and Standards (such as basic requirements for hosts), including decisions about whether and
how to apply them to a particular situation, at its sole discretion. Members agree to cooperate
with and assist Nacsitar in good faith, and to provide Nacsitar with such information and take such
actions as may be reasonably requested by Nacsitar with respect to any investigation undertaken by
Nacsitar regarding the use or abuse of the Nacsitar Platform. Nacsitar is not acting as an agent for
any Member except for where Nacsitar Payments acts as a collection agent as provided in the Payments Terms.
<br></br>

<b>16. Member Accounts.</b> <br></br>

You must register an account to access and use many features of the Nacsitar Platform. Registration
is only permitted for legal entities, partnerships and natural persons who are 18 years or older.
You represent and warrant that you are not a person or entity barred from using the Nacsitar Platform
under the laws of the United States, your place of residence, or any other applicable jurisdiction.
You must provide accurate, current, and complete information during registration and keep your account
information up-to-date. You may not register more than one account or transfer your account to someone
else. You are responsible for maintaining the confidentiality and security of your account credentials
and may not disclose your credentials to any third party. You are responsible and liable for activities
conducted through your account and must immediately notify Nacsitar if you suspect that your credentials
have been lost, stolen, or your account is otherwise compromised. If and as permitted by applicable law,
we may, but have no obligation to (i) ask you to provide identification or other information, (ii)
undertake checks designed to help verify your identity or background, (iii) screen you against third-party
databases or other sources and request reports from service providers, and (iv) obtain reports from public
records of criminal convictions or sex offender registrations or their local equivalents.<br></br>

<b>17. Disclaimer of Warranties.<br></br>

We provide the Nacsitar Platform and all Content "as is" without warranty of any kind and we disclaim
all warranties, whether express or implied. For example: (i) we do not endorse or warrant the existence,
conduct, performance, safety, quality, legality or suitability of any Guest, Host, Host Service, Listing
or third party; (ii) we do not warrant the performance or non-interruption of the Nacsitar Platform; and
(iii) we do not warrant that verification, identity or background checks conducted on Listings or Members
(if any) will identify past misconduct or prevent future misconduct. Any references to a Member or Listing
being "verified" (or similar language) indicate only that the Member or Listing or Nacsitar has completed a
 relevant verification or identification process and nothing else. The disclaimers in these Terms apply to
  the maximum extent permitted by law. If you have statutory rights or warranties we cannot disclaim, the
  duration of any such statutorily required rights or warranties, will be limited to the maximum extent
  permitted by law.

18. Limitations on Liability.<br></br>

Neither Nacsitar (including its affiliates and personnel) nor any other party involved in creating, producing,
 or delivering the Nacsitar Platform or any Content will be liable for any incidental, special, exemplary or
  consequential damages, including lost profits, loss of data or loss of goodwill, service interruption,
  computer damage or system failure or the cost of substitute products or services, or for any damages
  for personal or bodily injury or emotional distress arising out of or in connection with (i) these Terms,
  (ii) the use of or inability to use the Nacsitar Platform or any Content, (iii) any communications,
  interactions or meetings you may have with someone you interact or meet with through, or as a result
  of, your use of the Nacsitar Platform, or (iv) publishing or booking of a Listing, including the
  provision or use of Host Services, whether based on warranty, contract, tort (including negligence),  1
  product liability or any other legal theory, and whether or not Nacsitar has been informed of the
  possibility of such damage, even if a limited remedy set out in these Terms is found to have failed
  of its essential purpose.
  <br></br>

Except for our obligation to transmit payments to Hosts under these Terms, or make payments under the
Nacsitar Host Guarantee or Japan Host Insurance, in no event will Nacsitar's aggregate liability for any
claim or dispute arising out of or in connection with these Terms, your interaction with any Members,
or your use of or inability to use the Nacsitar Platform, any Content, or any Host Service, exceed: (A)
to Guests, the amount you paid as a Guest during the 12-month period prior to the event giving rise to
the liability, (B) to Hosts, the amount paid to you as a Host in the 12-month period prior to the event
giving rise to the liability, or (C) to anyone else, one hundred U.S. dollars (US$100).
<br></br>
These limitations of liability and damages are fundamental elements of the agreement between you and Nacsitar.
If applicable law does not allow the limitations of liability set out in these Terms, the above limitations
may not apply to you.

19. Indemnification.<br></br>

To the maximum extent permitted by applicable law, you agree to release, defend (at Nacsitar's option),
indemnify, and hold Nacsitar (including Nacsitar Payments, other affiliates, and their personnel) harmless
from and against any claims, liabilities, damages, losses, and expenses, including, without limitation,
reasonable legal and accounting fees, arising out of or in any way connected with: (i) your breach of
these Terms (including any supplemental or additional terms that apply to a product or feature) or our
Policies or Standards, (ii) your improper use of the Nacsitar Platform, (iii) your interaction with any
Member, stay at an Accommodation, participation in an Experience or other Host Service, including without
limitation any injuries, losses or damages (whether compensatory, direct, incidental, consequential or
otherwise) of any kind arising in connection with or as a result of such interaction, stay, participation or
use, (iv) your failure, or our failure at your direction, to accurately report, collect or remit Taxes, or
(v) your breach of any laws, regulations or third party rights such as intellectual property or privacy
rights.</b>

</div>



</div>


<?php include 'bottom_mobile.php' ?>

