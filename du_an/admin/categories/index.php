<?php
include '../layouts/header.php';
include '../layouts/sidebar.php';
include '../db.php';
session_start();
// global $conn;
$sql = "SELECT * FROM categories ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Categories</h1>
                <a class="btn btn-success" href="add.php">Add Categories</a>
                <a class ="btn-success"><?= $_SESSION['flash_message'] ?? ''; ?></a>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php foreach ($rows as $key => $item) { ?>
                       
                        <tbody>
                            <tr>
                                <td width="170px"><?php echo $key + 1; ?></td>
                                <td><?php echo $item->name; ?></td>
                               <td width="250px" >
                                    <a class="btn btn-success" href="edit.php?id=<?php echo $item->id; ?>">Edit</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $item->id; ?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </main>
    </div>
</div>
<?php include '../layouts/footer.php'; ?>