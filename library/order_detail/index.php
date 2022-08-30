<?php
include "../layout/header.php";
include "../db.php";
if(isset($_REQUEST['id'])){

    $id= $_REQUEST['id'];
    $sql = "SELECT categories.name_category,books.name,books.price,orders_detail.quantity, 
    books.price*orders_detail.quantity as totalprice, orders_book.id 
    FROM categories JOIN books ON categories.id=books.category_id
    JOIN orders_detail ON books.id=orders_detail.book_id
    JOIN orders_book ON orders_detail.orders_book_id=orders_book.id 
    WHERE orders_book.id = '$id'";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //fetchALL se tra ve du lieu nhieu hon 1 ket qua
    $rows = $stmt->fetchAll();
}
?>
<tr>
    <table class="table" border="1px"><br>
        <span>Order Detail</span><br><br>
        <a href="./../orders/index.php">Back to Orders</a>
        <thead class="thead-light">
            <tr>
                <th scope="col">Code</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <?php if(isset($rows)) : ?>
        <?php foreach($rows as $key => $item) :  ?>
        <tbody>
            <tr>
                <th scope="row"><?=$item->id;?></th>
                <td><?=$item->name;?></td>
                <td><?=$item->name_category;?></td>
                <td><?=number_format($item->price);?> đồng</td>
                <td><?=$item->quantity;?></td>
                <td><?=number_format($item->totalprice);?> đồng</td>
            </tr>
        </tbody>
        <?php endforeach; ?>
        <?php else : ?>
            <td>Order Detail is empty</td>
        <?php endif; ?>
        </table>
</tr>
<?php
include "../layout/footer.php";
?>