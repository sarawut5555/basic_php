<?php
$servername = "localhost";//hosting/127.0.0.1
$user = "admin_db_member"; //userdatabass
$password = "123456"; //user password
$dbname = "db_member65"; // database name

//create connection
$conn = new mysqli($servername, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);      
  }
  else{
  echo "Connnect Successfully!";
  }

  $conn -> set_charset('utf8');

?>