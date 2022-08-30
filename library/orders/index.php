<?php
include "../layout/header.php";
include "../db.php";
$sql = "SELECT orders_book.*, students.name FROM orders_book
JOIN students ON orders_book.student_id=students.id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();

?>
<tr>
    <table class="table" border="1px"><br>
        <span>Orders</span><br><br>
        <thead class="thead-light">
            <tr>
                <th scope="col">Code</th>
                <th scope="col">Student</th>
                <th scope="col">Date Borrow</th>
                <th scope="col">Date Pay</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <?php if(isset($rows)) : ?>
        <?php foreach($rows as $key=>$item) : ?>
        <tbody>
            <tr>
                <th scope="row"><?=$item->id;?></th>
                <td><?=$item->name;?></td>
                <td><?=$item->date_borrow;?></td>
                <td><?=$item->date_pay;?></td>
                <td>
                    <a href="./../order_detail/index.php?id=<?=$item->id;?>">Detail</a>
                </td>
            </tr>
        </tbody>
        <?php endforeach; ?>
        <?php else : ?>
            <td>Orders are empty</td>
                <?php endif; ?>
    </table>
</tr>
<?php
include "../layout/footer.php";
?>