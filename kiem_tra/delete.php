<?php
include_once "db.php";
$id=$_REQUEST['id'];
global $conn;
$sql ="DELETE FROM `students` WHERE Ma_hoc_sinh = '$id'" ;
$conn->query($sql);
header('location:index.php');
?>