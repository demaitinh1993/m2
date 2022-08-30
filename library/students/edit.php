<?php
include "../layout/header.php";
include "../db.php";
$id=$_REQUEST['id'];
$sql = "SELECT * FROM students WHERE id='$id'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetch();


if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_REQUEST['name'];
    $class=$_REQUEST['class'];
    $address=$_REQUEST['address'];
    $phone=$_REQUEST['phone'];
    $name=$_REQUEST['name'];
    $sql = "UPDATE students SET 
    name = '$name', class='$class', address='$address', phone='$phone'
     WHERE id = '$id'";
    $conn->query($sql);
    header('location:index.php');
}
?>
<span>Student Edit</span><br><br>
<a href="index.php">Back to Students</a>
<form action="" method="post">
    Name<br>
    <input type="text" name = "name" value="<?=$rows->name;?>"><br>
    Class<br>
    <input type="text" name = "class" value="<?=$rows->class;?>"><br>
    Address<br>
    <input type="text" name = "address" value="<?=$rows->address;?>"><br>    
    Phone<br>
    <input type="text" name = "phone" value="<?=$rows->phone;?>"><br>
<button type="submit">Submit</button>
</form>

<?php
include "../layout/footer.php";
?>