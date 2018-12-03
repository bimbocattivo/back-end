<?php
ini_set('display_errors',"1");
//session_start();
require_once('config.php');

require_once('session.php');

$userClass=new UserClass();
$userClass=$userClass->userDetails($_SESSION['uid']);
//$BASE_URL='AdminPage.php';
print_r($userClass);
?>
    <h1>HomePage: <?php echo $userClass->name;?></h1>
   

<h4><a href="logout.php">Logout</a></h4>

