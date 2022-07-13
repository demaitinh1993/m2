<?php
$servername = "localhost";
$username = "root";
$password = "";


try {
  // global $conn;
  $conn = new PDO("mysql:host=$servername;dbname=student", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // set the PDO error mode to exception
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>