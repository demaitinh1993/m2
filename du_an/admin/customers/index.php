<?php
include '../layouts/header.php';
include '../layouts/sidebar.php';
include '../db.php';
session_start();
$sql = "SELECT * FROM customers ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Customers</h1>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Name</th>
                            <th scope="col ">Address</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <!-- <th scope="col">Email</th> -->
                        </tr>
                    </thead>
                    <?php foreach ($rows as $key => $item) { ?>
                        <tbody>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $item->name; ?></td>
                                <td><?php echo $item->address; ?></td>
                                <td><?php echo $item->email; ?></td>
                                <td><?php echo $item->phone; ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </main>
    </div>
</div>
<?php include '../layouts/footer.php'; ?>