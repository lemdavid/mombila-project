
<?php

include 'top2.php';
?>




<?php if ($user_mombile == 'device')


{
   include 'info_mobile.php';
}
else
{
   include 'info_desktop.php';

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
