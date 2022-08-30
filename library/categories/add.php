<?php
include "../layout/header.php";
include "../db.php";

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_REQUEST['name'];
    $sql="INSERT INTO categories (name_category) VALUE ('$name')";
    $conn->query($sql);
    header('location:index.php');
}
?>
<span>Category Add</span><br>
<a href="index.php">Back to Categories</a><br><br>
<form action="" method="post">
Name Of Category<br>
    <input type="text" name="name"><br>
    <button type="submit">Submit</button>
</form>

<?php
include "../layout/footer.php";
?>