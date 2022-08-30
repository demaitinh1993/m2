<?php
include "../layout/header.php";
include "../db.php";
/////////////thống kê
$sql = "SELECT COUNT(categories.id) AS tong_loai_sach,
 COUNT(books.id) as tong_sach
FROM categories 
LEFT JOIN books ON categories.id=books.category_id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetch();
// var_dump($rows);


$sql = "SELECT COUNT(students.id) AS tong_hs, 
COUNT(orders_book.id) as tong_don
FROM students 
LEFT JOIN orders_book ON students.id=orders_book.student_id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$items = $stmt->fetch();
?>
      <tr>
    <table class="table" border="1px"><br>
        <span>Home</span><br><br>
        <thead class="thead-light">
            <tr>
                <th scope="col">Total Categories</th>
                <th scope="col">Total Books</th>
                <th scope="col">Total Students</th>
                <th scope="col">Total Orders</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$rows->tong_loai_sach;?></td>
                <td><?=$rows->tong_sach;?></td>
                <td><?=$items->tong_hs;?></td>
                <td><?=$items->tong_don;?></td>
            </tr>
        </tbody>

    </table>
</tr>
<?php
include "../layout/footer.php";
?>