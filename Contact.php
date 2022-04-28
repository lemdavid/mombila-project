
<?php
session_start();

include 'top2.php';
unset ($_SESSION['loading']);
$_SESSION['scroll_loading'] = 0;

?>




<?php if ($user_mombile == 'device')


{
   include 'contact_mobile.php';
}
else
{
   include 'contact_desktop.php';

 } ?>

<style>
    #fix_header_container{
       display:block;
    }
</style>
