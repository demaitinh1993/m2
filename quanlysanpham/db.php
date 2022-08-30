<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'quan_ly_san_pham';
global $conn;
try {

    $conn = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
    // echo "kết nối thành công";
} catch(Exception $e)
{
    echo " kết nối thất bạo".$e->getMessage();
}
?>