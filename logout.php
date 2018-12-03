
<?php
session_start();
require_once('config.php');
$session_uid='';
$_SESSION['uid']=''; 
if(empty($session_uid) && empty($_SESSION['uid']))
{
//$url=BASE_URL.'AdminPage.php';


header("Location: AdminPage.php");
//echo "<script>window.location='$url'</script>";
}
//session_destroy();
?>