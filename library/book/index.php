<?php
include "../layout/header.php";
include "../db.php";

$sql = "SELECT COUNT(id) AS total_records FROM `books`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$pagination = $stmt->fetch();
// echo '<pre>';
// print_r($pagination);die;

$total_records = $pagination['total_records']; //45
$current_page = isset($_GET['page']) ? $_GET['page'] : 1; //2
$limit = 2;
$total_page = ceil($total_records / $limit);
if ($current_page > $total_page) {
    $current_page = $total_page;
} else if ($current_page < 1) {
    $current_page = 1;
}
$start = ($current_page - 1) * $limit;




$sql = "SELECT books.*,categories.name_category 
FROM books JOIN  categories ON books.category_id=categories.id  LIMIT $start, $limit";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
?>
<tr>
    <table class="table" border="1px"><br>
        <span>Books</span><br><br>
        <a href="add.php">Add</a>
        <thead class="thead-light">
            <tr>
                <th scope="col">Code</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <?php if (isset($rows)) : ?>
            <?php foreach ($rows as $key => $item) : ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $item->id; ?></th>
                        <td><?= $item->name; ?></td>
                        <td><?= $item->name_category; ?></td>
                        <td><?= number_format($item->price); ?>đồng</td>
                        <td>
                            <a href="edit.php?id=<?= $item->id; ?>">Edit</a>
                            <a href="delete.php?id=<?= $item->id; ?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete</a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        <?php else : ?>
            <label>Books are empty</label>
        <?php endif; ?>
    </table>
    <div class="container">
        <!-- <nav class="pagination"> -->
            <div class="pagination">
                <?php
                if ($current_page > 1 && $total_page > 1) {
                    echo '<a href="index.php?page=' . ($current_page - 1) . '">Prev</a>';
                }
                for ($i = 1; $i <= $total_page; $i++) {
                    if ($i == $current_page) {
                        echo '<a class="active">' . $i . '</a>';
                    } else {
                        echo '<a href="index.php?page=' . $i . '">' . $i . '</a>';
                    }
                }
                if ($current_page < $total_page && $total_page > 1) {
                    echo '<a href="index.php?page=' . ($current_page + 1) . '">Next</a>';
                }
                ?>
            </div>
        <!-- </nav> -->
    </div>
</tr><br>
<?php
include "../layout/footer.php";
?>