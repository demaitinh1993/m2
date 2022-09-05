<?php
include_once "db.php";
if(isset($_REQUEST['search'])){
$search=$_REQUEST['search'];
// print_r($search);
// die();
$sql="SELECT students.*, class.ten_lop FROM students JOIN class ON students.Lop=class.id 
WHERE students.Ten_hoc_sinh LIKE '$search' OR class.ten_lop LIKE '$search'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
// print_r($rows);
// die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        h1{
            text-align: center;
        }
        table{
            text-align: center;
        }
    </style>
</head>
<body>
    
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Kết quả tìm kiếm</h1>
                <a class="btn btn-success" href="index.php">Xem danh sách học sinh</a>
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="search.php" method="post">
                            <div class="input-group">
                                <input name="search" type="text" class="form-control bg-light border-0 small"  aria-label="Search" aria-describedby="basic-addon2" style="left:860px; right: inherit">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" style="left:860px;">Tìm
                                    </button>
                                </div>
                            </div>
                        </form>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên học sinh</th>
                            <th scope="col">Lớp</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <?php if(isset($rows)) : ?>
                    <?php foreach ($rows as $key => $item) : ?>
                       
                        <tbody>
                            <tr>
                                <td width="170px"><?php echo $key + 1; ?></td>
                                <td><?php echo $item->Ten_hoc_sinh; ?></td>
                                <td><?php echo $item->ten_lop; ?></td>
                               <td width="250px" >
                               <a class="btn btn-success" href="edit.php?id=<?php echo $item->Ma_hoc_sinh; ?>">Chỉnh sửa</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $item->Ma_hoc_sinh; ?>" onclick="return confirm('Bạn có chắc muốn xóa <?php echo $item->Ten_hoc_sinh; ?> không?');">Xóa</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                    <?php else : ""; endif;  ?>
                </table>
            </div>
        </main>
    </div>
</div>
</body>
</html>
