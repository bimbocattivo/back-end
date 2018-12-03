<?php
if(!empty($_SESSION['uid']))
{
    $session_uid=$_SESSION['uid'];
    require_once('UserClass.php');
    $userClass= new UserClass();



}

if(empty($session_uid))
{
   // $url= BASE_URL. 'startPage.php';
    header("Location: AdminPage.php");
}
?>
