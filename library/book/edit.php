<?php
include "../layout/header.php";
include "../db.php";
$id=$_REQUEST['id'];
$sql = "SELECT * FROM books WHERE id='$id'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetch();
///////////lấy bảng category để tạo selected
$sql = "SELECT * FROM categories ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$items = $stmt->fetchAll();


if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_REQUEST['name'];
    $category=$_REQUEST['category'];
    $price=$_REQUEST['price'];
    $sql = "UPDATE books SET name = '$name', category_id='$category',price='$price' WHERE id = '$id'";
    $conn->query($sql);
    header('location:index.php');
}
?>
<span>Book Edit</span><br><br>
<a href="index.php">Back to Books</a>
<form action="" method="post">
    Name<br>
    <input type="text" name = "name" value="<?=$rows->name;?>"><br>
    Category<br>
    <select name="category" id="">
        <?php if(isset($items)) : ?>
        <?php foreach($items as $key => $item) : ?>
        <option <?=$item->id==$rows->category_id ? "selected" : ''?> value="<?=$item->id;?>"><?=$item->name_category;?></option>
        <?php  endforeach; ?>
        <?php else : ?>
            <td>categories is empty</td>
        <?php endif; ?>
    </select><br>

    Price<br>
    <input type="text" name = "price" value="<?=$rows->price;?>"><br>
<button type="submit">Submit</button>
</form>

<?php
include "../layout/footer.php";
?>