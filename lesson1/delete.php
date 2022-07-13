<?php
include "connect.php";
$id=$_REQUEST['id'];
global $conn;
$sql ="DELETE FROM `tb_sinhvien` WHERE sv_id = '$id'" ;
$conn->query($sql);
header('location:index.php');

?>
