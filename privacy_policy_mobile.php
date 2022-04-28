

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


h3 {
    font-size:56px;
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
    <h1><center><b>Privacy Policy<br></br></b></center></h1>
    <h3>Last Updated: October 30, 2020</h3>
    </div>
<div style="width:100%; float:left; border-bottom:2px solid lightgray; padding-bottom:100px; margin-bottom:20px;">

Nacsitar exists to help build connections between people and make the world more open and inclusive.
In short-to build a world where anyone can belong anywhere. We are a community built on trust.
A fundamental part of earning that trust means being clear about how we use your information and
protect your human right to privacy.
<br></br>

<h3><b>1. DEFINITIONS</b></h1>

Undefined terms in this Privacy Policy have the same definition as in our<a href="Terms"> Terms of Service </a>("Terms").

<h3><b>2. PERSONAL INFORMATION WE COLLECT</b></h1>
<h3><b>2.1 Information needed to use the Nacsitar Platform.</b></h1>
We collect personal information about you when you use the Nacsitar Platform.
Without it, we may not be able to provide you with all services requested. This information includes:

<ul>
    <li><b>Contact Information, Account, Profile Information.</b> Such as your first name,
        last name, phone number, postal address,
        email address, date of birth, and profile photo, some of
    which will depend on the features you use.</li>

    <li><b>Identity Verification and Payment Information.</b> Such as images of your government issued ID
    (as permitted by applicable laws), your ID number or other verification information.</li>
</ul><br></br>

<h3><b>2.2 Information you choose to give us.</b></h3>
You can choose to provide us with additional personal information. This information may include:
<br></br>
<ul>
    <li><b>Additional Profile Information.</b> Such as gender, preferred language(s), city,
    and personal description. Some of this information as indicated in your account settings is
    part of your public profile page and will be publicly visible.</li>
    <li><b>Address Book Contact Information.</b> Address book contacts you import or enter manually.</li>
    <li><b>Other Information.</b> Such as when you fill in a form, add information to your account,
        respond to surveys, post to community forums, participate in promotions,
         communicate with our customer care team and other Members, or share your
    experience with us. This may include health information if you choose to share it with us.</li>
</ul>

<h3><b>2.3 Information Automatically Collected by Using the Nacsitar Platform and our Payment Services.</b></h3>
<br></br>
When you use the Nacsitar Platform and Payment Services, we automatically collect personal information.
This information may include: <br></br>
<ul>
    <li><b>Geo-location Information.</b> Such as precise or approximate location determined from your IP
    address or mobile device's GPS depending on your device settings. We may also collect this
    information when you're not using the app if you enable this through your settings or device permissions.</li>

    <li><b>Usage Information.</b> Such as the pages or content you view, searches for Listings,
    bookings you have made, and other actions on the Nacsitar Platform.</li>

    <li><b>Log Data and Device Information.</b> Such as details about how you've used the Nacsitar Platform
    (including if you clicked on links to third party applications), IP address, access dates and times,
    hardware and software information, device information, device event information, unique identifiers,
    crash data, cookie data, and the pages you've viewed or engaged with before or after using the Nacsitar
    Platform. We may collect this information even if you haven't created an Nacsitar account or logged in.</li>
</ul>
<br></br>
<h3><b>2.4 Personal Information We Collect from Third Parties.</b></h3> <br></br>
We collect personal information from other sources, such as:.

<ul>
    <li><b>Third-Party Services.</b> If you link, connect, or login to the Nacsitar Platform with
        a third party service (e.g. Google, Facebook, WeChat), you direct the service to
        send us information such as your
        registration, friends list, and profile information as controlled by
    that service or as authorized by you via your privacy settings at that service.</li>


    <li><b>Background Information.</b> For Members in the United States,
        to the extent permitted by applicable laws, we may obtain
        reports from public records of criminal convictions or sex
        offender registrations. For Members outside of the United States, to the extent permitted
        by applicable laws and with your consent where required, we may obtain the local version of
       police, background or registered sex offender checks.
    We may use your information, including your full name and date of birth, to obtain such reports.</li>



    <li><b>Enterprise Product Invitations and Account Management.</b> Organizations that use our Enterprise
        products may submit personal information to facilitate account management and invitations to
        use enterprise products.</li>

    <li><b>Referrals and co-travelers.</b> If you are invited to the Nacsitar Platform such as a
        co-traveler on a trip, the person who invited you can submit personal information
        about you such as your email address or other contact information.</li>

    <li><b>Other Sources.</b> To the extent permitted by applicable law, we may receive additional
        information about you, such as references, demographic data or information to help detect
        fraud and safety issues from third party service providers and/or partners, and combine it
        with information we have about you. For example, we may receive background check results or
        fraud warnings from identity verification service providers for use in our fraud prevention
        and risk assessment efforts. We may receive information about you and your activities on and
        off the Nacsitar Platform, or about your experiences and interactions from our partners. We may
        receive health information, including but not limited to health information related to contagious
        diseases.</li> <br></br>
</ul>


<h3><b>3. HOW WE USE INFORMATION WE COLLECT</b></h3>
        <b>3.1 Provide, Improve, and Develop the Nacsitar Platform.</b> We use personal information to:

        <br></br>
        <ul>
            <li>enable you to communicate with other Members,</li>
            <li>perform analytics, debug and conduct research,</li>
            <li>provide customer service,</li>
            <li>send you messages, updates, security alerts, and account notifications,</li>
            <li>if you provide us with your contacts' information such as your friends or co-travellers,
                we may process this information: (i) to facilitate your referral invitations, (ii) to share
                 your trip details and facilitate trip planning, (iii) for fraud detection and prevention,
                 and (iv) to facilitate your
                requests or for any other purpose you authorize,</li>
                <li>personalize and customize your experience based on your interactions with the Nacsitar
                Platform, your search and booking history, your profile information and preferences, and
                other content you submit, and</li>
                <li>enable your use of our enterprise products.</li>
        </ul>

        <br></br>
        <b>3.2 Create and Maintain a Trusted and Safer Environment.</b> We use personal information to:

        <ul>
            <li>detect and prevent fraud, spam, abuse, security and safety incidents, and other harmful activity,</li>
            <li>study and combat discrimination consistent with our Nondiscrimination Policy,</li>
            <li>conduct security investigations and risk assessments,</li>
            <li>verify or authenticate information provided by you,</li>
            <li>conduct checks against databases and other information sources, including background or police checks,</li>
            <li>comply with our legal obligations, protect the health and well-being of our Guests, Hosts, Hosts' employees and members of the public,</li>
            <li>resolve disputes with our Members,</li>
            <li>enforce our agreements with third parties,</li>
            <li>comply with law, respond to legal requests, prevent harm and protect our rights (see section 4.5)</li>
            <li>enforce our <a href="Terms">Terms</a> and other policies (e.g. Nondiscrimination Policy), and</li>
            <li>in connection with the activities above, we may conduct profiling based on your
                interactions with the Nacsitar Platform, your profile information and other content you
                submit to Nacsitar, and information obtained from third parties. In limited cases, automated
                processes could restrict or suspend access to the Nacsitar Platform if such processes detect
                activity that we think poses a safety or other risk to Nacsitar, our community, or third parties.
                If you would like to challenge the decisioning based on the automated process, please contact us
                via the Contact Information section below.</li>
        </ul>
        <br></br>
<b>3.3 Provide, Personalize, Measure, and Improve our Advertising and Marketing.</b> We may use personal
information to:
<ul>
    <li>send you promotional messages, marketing, advertising, and other information based on your preferences and social media advertising through social media platforms,</li>
    <li>personalize, measure, and improve our advertising,</li>
    <li>administer referral programs, rewards, surveys, sweepstakes, contests, or other promotional
        activities or events sponsored or managed by Nacsitar or its third-party partners,</li>
    <li>analyze characteristics and preferences to send you promotional messages, marketing,
    advertising and other information that we think might be of interest to you, and</li>
    <li>invite you to events and relevant opportunities.</li>
</ul>

<br></br>

<h3><b>4. SHARING & DISCLOSURE</b></h3>
<h3><b>4.1 Sharing With Your Consent or at Your Direction.</b></h3>
<br></br>
Where you provide consent, we share your information as described at the time of consent, such as when
 authorizing a third-party application or website to access your Nacsitar account or participating in promotional
 activities by Nacsitar partners or third parties.<br></br>

Where permissible with applicable law, we may use certain information about you, such as your email
address, de-identify it, and share it with social media platforms, to generate leads, drive traffic to
Nacsitar or otherwise promote our products and services.
<br></br>
<h3><b>4.2 Sharing Between Members.</b></h3>
<br></br>
To help facilitate bookings or other interactions between Members, we may need to share certain information
such as:
<br></br>
<ul>
<li>When a booking request is made or dispute is submitted, certain information may be shared between Guest(s)
    and Host(s), including profile, name, names of any additional Guests, cancellation history, review information
    , age of guest (unless prohibited by applicable law), dispute outcome (when applicable) and other information you choose to share and submit. When a booking is confirmed, additional information is shared to assist with coordinating the trip, like profile photo and phone number. When you as a Host have a confirmed booking, certain information is shared with the Guest (and the additional Guests they invite, if applicable) to coordinate the booking, such as your profile, full name, phone number, and Listing address.</li>

<li>When you as a Host invite another Member to host with you, you authorize that person to access and
    update your information and Member Content, including but not limited to certain information like
    your full name, phone number, Accommodation address, calendar, Listing information, Listing photos,
    and email address.</li>
    <li>When you as a Guest invite additional Guests to a booking, your full name, travel dates, Host name,
    Listing details, the Accommodation address, and other related information will be shared with each
    additional Guest.</li>

</ul>
<br></br>

<h3><b>4.3 Information You Publish in Profiles, Listings, and other Public Information.</b></h3>
<br></br>
You can make certain information publicly visible to others, such as:
<br></br>
<ul>
    <li>Your public profile page, which includes your profile photo, first name, description, and city.</li>
    <li>Listing pages that include information such as the Accommodation or
    Experience's approximate or precise location description, calendar availability,
    profile photo, aggregated demand information (like page views over a period of time),
    and additional information you choose to share.</li>
    <li>Reviews, ratings and other public feedback.</li>
    <li>Content in a community or discussion forum, blog or social media post.</li>
    <br></br>

</ul>

We may display parts of your public profile and other Content you make available to the public
like Listing details on third-party sites, platforms and apps.<br></br>

Information you share publicly on the Nacsitar Platform may be indexed through third-party search engines.
In some cases, you may opt-out of this feature in your account settings.



<h3><b>4.4 Host Service Providers.</b></h3>
<br></br>
Hosts may use third-party services to help manage or deliver their services, such as cleaning
services or lock providers. Hosts may use features on the Nacsitar Platform to share information
about the Guest (like check-in and check-out dates, Guest name, Guest phone number) with such
third-party service providers.<br></br>

<h3><b>4.5 Complying with Law, Responding to Legal Requests, Preventing Harm and Protecting our Rights.</b></h3>
<br></br>
We may disclose your information to courts, law enforcement,
governmental or public authorities, tax authorities, or authorized third parties,
if and to the extent we are required or permitted to do so by law or where disclosure
is reasonably necessary: (i) to comply with our legal obligations, (ii) to comply with a
valid legal request or to respond to claims asserted against Nacsitar, (iii) to respond to a
valid legal request relating to a criminal investigation to address alleged or suspected illegal
activity, or to respond to or address any other activity that may expose us, you, or any other of
our users to legal or regulatory liability,
(iv) to enforce and administer our agreements with Members, or (v) to protect the rights, property or
personal safety of Nacsitar, its employees, its Members, or members of the public. For example, if
permitted due to the forgoing circumstances,
Host tax information may be shared with tax authorities or other governmental agencies.
<br></br>

Where appropriate, we may notify Members about legal requests unless: (i)
providing notice is prohibited by the legal process itself, by court order
we receive, or by applicable law, or (ii) we believe that providing notice would be
futile, ineffective, create a risk of injury or bodily harm to an individual or group,
or create or increase a risk of fraud upon or harm to Nacsitar, our Members, or expose Nacsitar
to a claim of obstruction of justice.

<br></br>

For jurisdictions where Nacsitar facilitates the collection and remittance of Taxes
where legally permissible according to applicable law, we may disclose Hosts' and Guests'
information about transactions, bookings, Accommodations and occupancy Taxes to the applicable
tax authority, such as Host and Guest names, Listing addresses, transaction dates and amounts,
tax identification number(s), the amount of taxes received (or due) by Hosts from Guests, and
contact information.
<br></br>

In jurisdictions where Nacsitar facilitates or requires a registration, notification, permit,
or license application of a Host with a local governmental authority through Nacsitar in accordance
with local law, we may share information of participating Hosts with the relevant authority, both
during the application process and, periodically thereafter, such as the Host's full name and contact
details, Accommodation address, tax identification number, Listing details, and number of nights booked.
<br></br>

<h3><b>4.6 Programs with Managers and Owners.</b></h3>

We may share personal information of Hosts and Guests such as booking information, and
information related to compliance with applicable laws such as short-term rental laws with
landlords, management companies, and/or property owners (the "Building Management"), in order
to facilitate programs with Building Management. For example, guest booking and personal information,
including guest contact information, may be shared with the Building Management of the building, complex,
or community where a host lives and/or the listing is located, to facilitate hosting services, compliance
with applicable laws, security, billing, and other services.
<br></br>


 <h3><b>4.7 Host Information Provided to Nacsitar for Work Customers.</b></h3>
 If a booking is designated as being for business or work purpose and (1) is made by a Guest
 affiliated with an Enterprise, (2) the Enterprise is enrolled in Nacsitar for Work, we may disclose
 information related to the booking to the Enterprise (e.g., name of the Host, Accommodation address,
 booking dates, Listing details, etc.) to the extent necessary for the adequate performance of Nacsitar's
  contract with the Enterprise and to provide the services. At the request of the Enterprise or the
  Guest, we may also share this information with third parties engaged by the Enterprise to provide
  support services.
  <br></br>
  <h3><b>4.8 Service Providers.</b></h3>
  <br></br>
  We share personal information with affiliated and unaffiliated service providers to help us run
  our business, including service providers that help us: (i) verify your identity or authenticate
  your identification documents, (ii) check information against public databases, (iii) conduct
  background or police checks, fraud prevention, and risk assessment, (iv) perform product
  development, maintenance and debugging, (v) allow the provision of the Nacsitar Services through
  third-party platforms and software tools (e.g. through the integration with our APIs), (vi)
  provide customer service, advertising, or payments services, (vii) process, handle or assess
  insurance claims or similar claims, or (viii) facilitate non-profit and charitable activities
  consistent with Nacsitar's mission. These providers are contractually bound to protect your personal
  information and have access to your personal information to perform these tasks.
 <br></br>

 <h3><b>4.9 Business Transfers.</b></h3>

 If Nacsitar undertakes or is involved in any merger, acquisition, reorganization, sale of assets,
 bankruptcy, or insolvency event, then we may sell, transfer or share some or all of our assets,
 including your information in connection with such transaction or in contemplation of such
 transaction (e.g., due diligence). In this event, we will notify you before your personal
 information is transferred and becomes subject to a different privacy policy.
 <br></br>


 <h3><b>4.10 Corporate Affiliates.</b></h3>
 <br></br>
 To support us in providing, integrating, promoting and improving the Nacsitar Platform, Payment
 Services, and our affiliates' services, we may share personal information within our corporate
 family of companies that are related by common ownership or control. Some examples are:
 <br></br>
 <ul>
     <li><b>Sharing with Nacsitar, Inc.</b> Even if your country of residence is not the United
     States, your information will be shared with Nacsitar, Inc. which provides the technical
     infrastructure for the Nacsitar Platform.</li>

     <li><b>Sharing with Nacsitar Payments.</b> In order to facilitate payments on or through the Nacsitar
     Platform, certain information as described in the "Outside of the United States" section, will be
     shared with the relevant Nacsitar Payments entity.</li>

     <li><b>Sharing with Nacsitar Ireland.</b> Even if your country of residence is the United States,
     Japan or China, your information may be shared with Nacsitar Ireland which provides customer support
     and other business operation services to other Nacsitar entities.</li>

     <li><b>Sharing with Nacsitar GSL.</b> Even if your country of residence is not Japan, your
     information may be shared with Nacsitar GSL which provides customer support and other business
     operation services to other Nacsitar entities.</li>

     <li>Sharing with Nacsitar China. Even if your country of residence is not China, some of your information
     will be shared with Nacsitar China in the following circumstances:
     <ul>
         <li><b>Public data.</b> Information you share publicly on the Nacsitar Platform.</li>
         <li><b>Creating a Listing.</b> If you create a Listing in China, information shared includes:
         (i) your name, phone number, email address, and passport/ID details, (ii) information relating
         to the Listing (e.g., address), (iii) booking and check-in information relating to the Listing,
         such as Guest details as set out below in Host Services, dates, time and payment amounts, and (iv)
         messages between you and prospective and confirmed Guests at the Listing.</li>

         <li>Host Services. If you book a Host Service located in China, information shared includes: (i)
         your name, phone number, and email address (ii) booking and check-in information, including dates
         and time, (iii) messages between the Host and you or other Guests on the same booking, and (iv) the
         names, nationalities, gender, date of birth, and passport/ID details of any Guests.</li>

         <li><b>Sending Messages.</b> If you send a message to a Host in relation to that Host's Listing in
         China, information shared includes your name, profile picture and message content.</li>
     </ul></li>
 </ul>

 <br></br>
 The data sharing described above is necessary for the performance of the contract between you and
 us to enable you to list or book Host Services in China and connect with Members in China, and vice
 versa. Where required under law or if you have expressly granted permission, Nacsitar China will disclose
 your information to Chinese government agencies without further notice to you. We'll notify you in advance
 in specific situations where we apply any practices that differ from what is described in this Privacy
 Policy (including practices pertaining to disclosures to government agencies).

 <br></br>
<h1><b>5. OTHER IMPORTANT INFORMATION</b></h1>

<br></br>
<h1><b>5.1 Analyzing your Communications.</b></h1>
<br></br>

We may review, scan, or analyze your communications on the Nacsitar Platform for reasons
outlined in the "How We Use Information We Collect" section of this policy, including
fraud prevention, risk assessment, regulatory compliance, investigation, product development,
research, analytics, enforcing our Terms of Service, and customer support purposes. For example,
as part of our fraud prevention efforts, we scan and analyze messages to mask contact information
 and references to other sites. In some cases, we may also scan, review, or analyze messages to debug,
 improve, and expand product offerings. We use automated methods where reasonably possible. Occasionally
 we may need to manually review communications, such as for fraud investigations and customer support,
 or to assess and improve the functionality of these automated tools. We will not review, scan, or
 analyze your messaging communications to send third-party marketing messages to you and we will not
 sell reviews or analyses of these communications.

 <br></br>
 <h3><b>5.2 Linking Third-Party Accounts.</b></h3>
 <br></br>
 You can link your Nacsitar account with certain third-party services like social networks.
 Your contacts on these third-party services are referred to as "Friends." When you direct
 the data sharing by creating this link:
 <br></br>
 <ul>
     <li>some of the information provided to us from linking accounts may be published on your public profile,</li>
     <li>your activities on the Nacsitar Platform may be displayed to your Friends on the Nacsitar Platform
     and/or that third-party service,</li>
     <li>a link to your public profile on that third-party service may be included in your Nacsitar public profile,</li>
     <li>other Nacsitar users may be able to see any Friends that you may have in common with them, or
     that you are a Friend of their Friend if applicable,</li>
     <li>a link to your public profile on that third-party service may be included in your Nacsitar public profile,</li>
     <li>other Nacsitar users may be able to see any Friends that you may have in common with them, or that you are a
     Friend of their Friend if applicable,</li>
     <li>publication and display of information that you provide to the Nacsitar Platform through this
     linkage is subject to your settings and authorizations on the Nacsitar Platform and the third-party service.</li>
 </ul>
 <br></br>

 <h3><b>5.3 Third-Party Partners & Integrations.</b></h3>

 Parts of Nacsitar may link to third-party services, not owned or controlled by Nacsitar, such as
 Google Maps/Earth. Use of these services is subject to the privacy policies of those providers,
 such as Google Maps/Earth Additional Terms of Use, Google Privacy Policy (see here for more information
 on how Google uses information), and Citi Privacy Policy. Nacsitar does not own or control these third
 parties and when you interact with them you are providing your information to them.
 <br></br>

 <h3><b>6. YOUR RIGHTS</b></h3>
 <br></br>
 You can exercise any of the rights described in this section consistent with applicable law.Please
 note that we may ask you to verify your identity and request before taking further action on your request.

<h3><b>6.2 Data Access and Portability.</b></h3>
In some jurisdictions, applicable law may entitle you to request certain copies of your personal information
or information about how we handle your personal information, request copies of personal information that
you have provided to us in a structured, commonly used, and machine-readable format, and/or request that
we transmit this information to another service provider (where technically feasible).
<br></br>

<h3><b>7. SECURITY</b></h3>
<br></br>
While no organization can guarantee perfect security, we are continuously implementing and updating
administrative, technical, and physical security measures to help protect your information against
unauthorized access, loss, destruction, or alteration.
<br></br>
<h3><b>8. CHANGES TO THIS PRIVACY POLICY</b></h3>
<br></br>
We reserve the right to modify this Privacy Policy at any time in accordance with applicable law.
If we do so, we will post the revised Privacy Policy and update the "Last Updated" date at the top.
In case of material changes, we will also provide you with notice of the modification by email at
least thirty (30) days before the effective date. If you disagree with the revised Privacy Policy,
you can cancel your Account. If you do not cancel your Account before the date the revised Privacy
Policy becomes effective, your continued access to or use of the Nacsitar Platform will be subject to
the revised Privacy Policy.
</div>



</div>


<?php include 'bottom_mobile.php' ?>

