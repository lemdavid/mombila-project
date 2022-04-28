
<?php
session_start();

include 'top2.php';
unset ($_SESSION['loading']);
$_SESSION['scroll_loading'] = 0;

?>




<?php if ($user_mombile == 'device')


{
   include 'privacy_policy_mobile.php';
}
else
{
   include 'privacy_policy_desktop.php';

 } ?>

<style>
    #fix_header_container{
       display:block;
    }
</style>
