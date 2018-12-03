<?php
ini_set('display_errors',"1");
session_start();
setlocale(LC_TIME, "it_IT");
/* DATABASE CONFIGURATION */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Chemer9.');
define('DB_DATABASE', 'DatabaseTecnologieWeb');
//define("BASE_URL", "http://localhost/newphp/"); // Eg. http://yourwebsite.com
//$config['base_url'] = 'http://localhost/newphp/';

function connect() 
{
$dbhost=DB_SERVER;
$dbuser=DB_USERNAME;
$dbpass=DB_PASSWORD;
$dbname=DB_DATABASE;
try {
$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
$dbConnection->exec("set names utf8");
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected successfully";
return $dbConnection;



}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
die();
}

}
//session_destroy();
?>