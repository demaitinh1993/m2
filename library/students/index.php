<?php
include "../layout/header.php";
include "../db.php";
$sql = "SELECT * FROM students ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();


?>
<tr>
    <table class="table" border="1px"><br>
    <span>Students</span><br><br>
        <a href="add.php">Add</a>
        <thead class="thead-light">
            <tr>
                <th scope="col">Code</th>
                <th scope="col">Name</th>
                <th scope="col">Class</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <?php if(isset($rows)) : ?>
        <?php foreach($rows as $key => $item) : ?>
        <tbody>
            <tr>
                <th scope="row"><?=$item->id;?></th>
                <td><?=$item->name;?></td>
                <td><?=$item->class;?></td>
                <td><?=$item->address;?></td>
                <td><?=$item->phone;?></td>
                <td>
                    <a href="edit.php?id=<?=$item->id;?>">Edit</a>
                    <a href="delete.php?id=<?=$item->id;?>"onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete</a>
                </td>
            </tr>
           
        </tbody>
        <?php endforeach; ?>
        <?php else : ?>
            <label>Students are empty</label>
        <?php endif; ?>
        </table>
</tr>
<?php
include "../layout/footer.php";
?>