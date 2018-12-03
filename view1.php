<?php

ini_set('display_errors',"1");
/*
include('config.php');




class getData {

    protected $host = "localhost";
    protected $dbname = "reactDB";
    protected $user = "root";
    protected $pass = "Chemer9.";
    protected $DBH;
    */

/*
    function selectUser () {

        try {
        $DB=connect();

        $data = $pdo->query("SELECT IDProdotto,Categoria,Nome,Marca,Prezzo,DataInizio FROM PRODOTTO ")->fetchAll();
        // and somewhere later:
        foreach ($data as $row) {
            echo $row['IDProdotto']. " " .$row['Nome']. " " .$row['Marca']. " " .$row['Prezzo']."<br />\n";
        }
           
        }
        catch (PDOException $e) {

            echo $e->getMessage();
        }
    }


   
}
*/
//$stampa=new getData();
//echo $stampa->data;




require_once('config.php');



//$db=connect();
/*
$data = $pdo->query("SELECT IDProdotto,Categoria,Nome,Marca,Prezzo,DataInizio FROM PRODOTTO")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
    echo $row['IDProdotto']. " " .$row['Nome']. " " .$row['Marca']. " " .$row['Prezzo']."<br />\n";
        
}



function getFruit($pdo) {
    $sql = "SELECT username,email FROM users ORDER BY uid";
    foreach ($pdo->query($sql) as $row) {
       
        echo $row['username'] . "\t";
        echo $row['email'] . "\n";
    }
}
*/
/*
    $sql = 'SELECT * FROM PRODOTTO ORDER BY IDProdotto';
    try {
        $stmt = $pdo->query($sql);
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $stmt->fetch()) {
          //echo $row[0] . "\n" . $row[1] . "\n" . $row[2] . "\n" . $row[3] . "\n" . $row[4] . "\n" . $row[5] . "\n";
          echo  "<div class='getData' style='padding:12px; background-color:#ddd; color:green;margin:2px;'>" .$row['IDProdotto']. " " .$row['Nome']. " " .$row['Marca']. " " .$row['Prezzo']."</div><br />\n";
        }
      }
      catch (PDOException $e) {
        print $e->getMessage();
      }
      */
 class Product{

      function ViewProduct()
      {
        $db=connect();
          $result = false;
          $query = $db->prepare("SELECT * FROM PRODOTTO");
          $query->execute();
          # Iterate
          while($row = $query->fetch(PDO::FETCH_ASSOC)) {
              $result[] = $row;
          }
          return $result;
      }
    }    


    

?>