
<!DOCTYPE html>
<html>
<head>
<title >Administrator</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" />

<body class="body">
<div class="main_content">
    <div class="menu header">
        <div class="avatarright">
            <i class="fab fa-wordpress"></i>
        </div>
            Welcome to administrator homePage
                <div id=avatargrup>
                        <i class="far fa-user"></i>
                        <i class="fas fa-sign-out-alt"></i>
                </div>
            <div id="admin avatar">
            </div>
    </div>


<div class="navbar">
  <a href="PageStart.php">Zona giorno</a> 
  <a href="cucina.php">Cucina</a> 
  <a href="servizi.php">Servizi</a> 
  <a class="active" href="altro.php">Altro</a>
  <a id="preventivi" href="preventivi.php">Preventivi</a>

</div>
<div><?php include('view.php');?> </div>
<?php
?>
</div>
</body>
</html>
