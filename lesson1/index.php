<?php
session_start();
include 'connect.php';
$sql = "SELECT * FROM tb_sinhvien " ;
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
        //fetchALL se tra ve du lieu nhieu hon 1 ket qua
$students = $stmt->fetchAll();
// session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Danh sách sinh vien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h1>Danh sách sinh vien</h1>
        <p><?= $_SESSION['login_user'] ?? '<button>đăng nhập</button>'?></p>
        <a href="student-add.php">Thêm sinh viên</a>
        <a href="register.php">Đăng ký</a>
        <a href="login.php">Đăng nhập</a>
        <a href="infomation.php">Thông tin khách hàng</a>
        <br/> <br/>
        <table class=" table table-bordered table-hover text-center">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Gender</td>
                <td>Birthday</td>
                <td>Action</td>
            </tr>
            <?php foreach ($students as $key => $item){ ?>
            <tr>
                <td><?php echo $key +1; ?></td>
                <td><?php echo $item->sv_name; ?></td>
                <td><?php echo $item->sv_sex; ?></td>
                <td><?php echo date('d/m/Y',strtotime($item->sv_birthday)); ?></td>
                <td>
                    <a class="btn btn-success" href="edit.php?id=<?php echo $item->sv_id; ?>">Edit</a>
                    <a class="btn btn-danger" href="delete.php?id=<?php echo $item->sv_id; ?>"onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>