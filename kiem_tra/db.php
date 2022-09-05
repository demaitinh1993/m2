<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'students';
global $conn;
$conn = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>