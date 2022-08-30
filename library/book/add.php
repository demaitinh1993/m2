<?php
include "../layout/header.php";
include "../db.php";
$sql = "SELECT * FROM categories ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_REQUEST['name'];
    $category = $_REQUEST['category'];
    $price = $_REQUEST['price'];
    $sql = "INSERT INTO books (name,category_id,price) 
    VALUE ('$name','$category','$price')";
    $conn->query($sql);
    header('location:index.php');
}
?>
<span>Book Add</span><br><br>
<form action="" method="post">
    Name<br>
    <input type="text" name="name"><br>
    Category<br>
    <select name="category" id="">
        <?php if (isset($rows)) : ?>
            <?php foreach ($rows as $key => $item) : ?>
                <option value="<?= $item->id; ?>"><?= $item->name_category; ?></option>
            <?php endforeach; ?>
        <?php endif; ?>
    </select><br>
    Price<br>
    <input type="text" name="price"><br>
    <button type="submit">Submit</button>
</form>

<?php
include "../layout/footer.php";
?>