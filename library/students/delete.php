<?php
include "../db.php";
$id=$_REQUEST['id'];
global $conn;
$sql ="DELETE FROM `students` WHERE id = '$id'" ;
$conn->query($sql);
header('location:index.php');

?>