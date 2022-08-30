<?php
include "../layout/header.php";
include "../db.php";

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_REQUEST['name'];
    $class=$_REQUEST['class'];
    $address=$_REQUEST['address'];
    $phone=$_REQUEST['phone'];
    $sql="INSERT INTO students (name,class,address,phone) 
    VALUE ('$name','$class','$address','$phone')";
    $conn->query($sql);
    header('location:index.php');
}
?>
<span>Student Add</span><br><br>
<a href="index.php">Back to Stundents</a><br>
<form action="" method="post">
    Name<br>
    <input type="text" name = "name"><br>
    Class<br>
    <input type="text" name = "class"><br>
    Address<br>
    <input type="text" name = "address"><br>    
    Phone<br>
    <input type="text" name = "phone"><br>
<button type="submit">Submit</button>
</form>

<?php
include "../layout/footer.php";
?>