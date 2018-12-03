
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
<title>Amministratori</title>
    <link rel="stylesheet" href="style.css"/>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="descripion" content="Panello degli amministratori" />
    <meta name="author" content="Tecwweb&amp;nome progetto" /> <!-- project name-->
    <meta name="keywords" content="casa, cucina, sala da pranzo, casa ideale, mobili, poltrone, zona giorno, colori"
    />
    <link href="#" rel="stylesheet" type="text/css" media="handheld, screen" />
    <link href="#" type="text/css" rel="stylesheet" media="handheld, screen and (max-width:720px),only screen and (max-device-width:720px)"
    />  
<script src="javascript code" type="text/javascript" charset="utf-8"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>


<body class="body">
<div class="main_content">
    <div class="menu header">
        <div class="avatarright">
            <i class="fab fa-wordpress"></i>
        </div>
            Welcome to administrator homePage
                <div id=avatargrup>
                       <a href="profile.php"><i class="far fa-user" ></i></a>
                       <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            <div id="admin avatar">
            </div>
    </div>
<div>
</div>
<div class="navbar">
  <a class="active" href="AdminPage.php">Zona giorno</a> 
  <a href="cucina.php">Cucina</a> 
  <a href="servizi.php">Servizi</a> 
  <a href="altro.php">Altro</a>
  <a id="preventivi" href="preventivi">Preventivi</a>
</div>

<!--
<div class="divTable">
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell">ID&nbsp;</div>
<div class="divTableCell">Categoria&nbsp;</div>
<div class="divTableCell">Nome&nbsp;</div>
<div class="divTableCell">Marca&nbsp;</div>
<div class="divTableCell">Prezzo&nbsp;</div>
<div class="divTableCell">Data&nbsp;</div>
<div class="divTableCell">&nbsp;</div>
</div>
</div>
</div>
-->

<div class="product_title">
    <ul >
        <li>
            <span>ID</span>
        </li>
           
        <li>
            <span>Categoria</span>
        </li>
        <li>
            <span>Marca</span>
</li>
        <li>
        <li>
            <span>Prezzo</span>
         </li>
        </li>
        <li>
            <span>Data</span>
        </li>
        <li>
            <span>Nome</span>
        </li>
    </ul>
<?php


//require_once('config.php');
require_once('view1.php');
$con=new Product();
$tmt=$con->ViewProduct();
foreach ($tmt as $row)
{
    //echo  "<div class='getData' style='padding:12px; background-color:#ddd; color:green;margin:1px;'>".$row['IDProdotto']. " " .$row['Nome']. " " .$row['Marca']. " " .$row['Prezzo']."</div><br/>";
    
    echo "<div class='viewdata'>".$row['IDProdotto'].$row['Nome'].$row['Categoria'].$row['Marca'].$row['Prezzo'].$row['DataInizio']."</div>"; 
}


?>

<?php
ini_set('display_errors',"1");
//session_start();
require_once('config.php');

include('UserClass.php');
$userClass = new UserClass();


$errorMsgReg='';
$errorMsgLogin='';
/* Login Form */
if (!empty($_POST['loginSubmit'])) 
{
$usernameEmail=$_POST['usernameEmail'];
$password=$_POST['password'];
if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 )
{
$uid=$userClass->UserLogin($usernameEmail,$password);
if($uid)
{
$url=BASE_URL.'//';
header("Location: profile.php"); // Page redirecting to home.php 
}
else
{
$errorMsgLogin="<p style='color:red;'>Controlla i tuoi dati / oppure non ti sei registrato..!</p>";
}
}
}

/* Signup Form */
if (!empty($_POST['signupSubmit'])) 
{
$username=$_POST['usernameReg'];
$email=$_POST['emailReg'];
$password=$_POST['passwordReg'];
$name=$_POST['nameReg'];

$username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
$email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
$password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

if($username_check && $email_check && $password_check && strlen(trim($name))>0) 
{
$uid=$userClass->userRegistration($username,$password,$email,$name);
if($uid)
{
$url=BASE_URL.'Home.php';
header("Location: $url"); 
}
else
{
$errorMsgReg="Username or Email already exists.";
}
}
}
?>
<div id="login">
<h3>Login</h3>
<form method="post" action="" name="login">
<label>Username or Email</label>
<input type="text" name="usernameEmail" autocomplete="off" />
<label>Password</label>
<input type="password" name="password" autocomplete="off"/>
<div class="errorMsg"><?php echo $errorMsgLogin; ?></div>
<input type="submit" class="button" name="loginSubmit" value="Login">
</form>
</div>




</div>
</body>
</html>
