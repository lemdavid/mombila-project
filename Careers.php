
<?php
session_start();

include 'top2.php';
unset ($_SESSION['loading']);
$_SESSION['scroll_loading'] = 0;

?>




<?php if ($user_mombile == 'device')


{
   include 'Careers_mobile.php';
}
else
{
   include 'Careers_desktop.php';

 } ?>

<style>
    #fix_header_container{
       display:block;
    }
</style>
