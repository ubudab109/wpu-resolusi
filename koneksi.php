<?php
$dbhost ='localhost';
$dbuser ='id12014649_root';
$dbpass ='sasasa';
$dbname ='id12014649_zeonstore';
$db_dsn = "mysql:dbname=$dbname;host=$dbhost";
try {
  $db = new PDO($db_dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
  echo 'Connection failed: '.$e->getMessage();
}
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//mysql_connect($dbhost,$dbuser,$dbpass);mysql_select_db($dbname);
?> 
