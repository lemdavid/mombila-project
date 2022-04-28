
<?php
session_start();

include 'top2.php';
unset ($_SESSION['loading']);
$_SESSION['scroll_loading'] = 0;

?>




<?php if ($user_mombile == 'device')


{
   include 'How_Nacsitar_works_mobile.php';
}
else
{
   include 'How_Nacsitar_works_desktop.php';

 } ?>

<style>
    #fix_header_container{
       display:block;
    }
</style>
