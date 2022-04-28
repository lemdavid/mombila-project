
<?php
session_start();

include 'top2.php';
unset ($_SESSION['loading']);
$_SESSION['scroll_loading'] = 0;

?>




<?php if ($user_mombile == 'device')


{
   include 'ShowProfile_mobile.php';
}
else
{
   include 'ShowProfile_desktop.php';

 } ?>

<style>
    #fix_header_container
    {
      display:block;
    }

      #header_container
    {
      display:none;
    }

    #search_link_container
    {
      display:none;
    }
</style>
