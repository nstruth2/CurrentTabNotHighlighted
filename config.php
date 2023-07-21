<?php
$server = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
try{
  $conn = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
}catch(PDOException $e){
  die('Unable to connect with the database');
}
?>
