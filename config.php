<?php 

$servername = "localhost";
$username = "root";
$password = "";
$table = "employees";

try {
  // start connection with database
  $db = new PDO("mysql:host=$servername;dbname=crudphp", $username, $password);

  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //select type error
 
  
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

?>