<?php
ini_set('display_errors',"1");
require_once('config.php');



$pdo=connect();

$sql = 'SELECT * FROM PRODOTTO ORDER BY IDProdotto';
try {
    $stmt = $pdo->query($sql);
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $stmt->fetch()) {
      //echo $row[0] . "\n" . $row[1] . "\n" . $row[2] . "\n" . $row[3] . "\n" . $row[4] . "\n" . $row[5] . "\n";
      echo  "<div class='getData' style='padding:12px; background-color:#ddd; color:green;margin:1px;'>" .$row['IDProdotto']. " " .$row['Nome']. " " .$row['Marca']. " " .$row['Prezzo']."</div><br />\n";
    }
  }
  catch (PDOException $e) {
    print $e->getMessage();
  }




?>