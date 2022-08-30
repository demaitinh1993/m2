<?php
include "../layout/header.php";
include "../db.php";
$id=$_REQUEST['id'];
$sql = "SELECT * FROM categories WHERE id='$id'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetch();


if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_REQUEST['name'];
    $sql = "UPDATE categories SET name_category = '$name' WHERE id = '$id'";
    $conn->query($sql);
    header('location:index.php');
}
?>

<span>Category Edit</span><br><br>
<a href="index.php">Back to Categories</a><br><br>
<form action="" method="post">
    <input type="text" name = "name" value="<?=$rows->name_category;?>"><br><br>
<button type="submit">Submit</button>
</form>

<?php
include "../layout/footer.php";
?>