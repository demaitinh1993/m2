<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'test';
global $conn;
$conn = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>