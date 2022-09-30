<?php
include_once "db.php";
if(isset($_REQUEST['id'])){
$id=$_REQUEST['id'];
$sql = "SELECT * FROM students WHERE Ma_hoc_sinh='$id'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetch();



$sql = "SELECT * FROM class";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$items = $stmt->fetchAll();
// print_r($rows);
// die();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
    $class = $_REQUEST['class'];
    $gender = $_REQUEST['gender'];
    $info = $_REQUEST['info'];
    $birthday = $_REQUEST['birthday'];
   
    $errors = [];
    if ($name==''){
        $errors['name']="bạn không thể để trống mục này";
    }
    if ($class==''){
        $errors['class']="bạn không thể để trống mục này";
    }
    if ($gender==''){
        $errors['gender']="bạn không thể để trống mục này";
    }
    if ($info==''){
        $errors['info']="bạn không thể để trống mục này";
    }
    if ($birthday==''){
        $errors['birthday']="bạn không thể để trống mục này";
    }

    if (empty($errors)) {
        $sql = "UPDATE `students` SET `Ten_hoc_sinh`='$name',`Lop`='$class',`Ngay_sinh`='$birthday',`Gioi_tinh`='$gender',`Thong_tin`='$info' 
        WHERE Ma_hoc_sinh='$id'";
        $conn->query($sql);
        header('location:index.php');
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            color: red;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form method="post" action="">
            <?php if(isset($rows->Ten_hoc_sinh)) : ?>
            <legend>Sửa sinh viên</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Tên học sinh</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" value="<?=$rows->Ten_hoc_sinh; ?>">
                <span><?php if (isset($errors['name'])) {
                            echo $errors['name'];
                        }
                          ?></span>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Lớp</label>
                <select name="class" id="">
                    <?php if (isset($items)) : ?>
                                <?php foreach ($items as $item) { ?>
                                    <option <?= $item->id == $rows->Lop ? 'selected' : '' ?> value="<?= $item->id ?>"><?= $item->ten_lop ?></option>
                                <?php  } ?><br>
                            <?php else : ""; 
                            endif; ?>

                </select>
                <span><?php if (isset($errors['class'])) {
                            echo $errors['class'];
                        }
                          ?></span>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Ngày sinh</label>
                <input type="date" name="birthday" id="" class="form-control" placeholder="" value="<?=$rows->Ngay_sinh; ?>">
                <span><?php if (isset($errors['birthday'])) {
                            echo $errors['birthday'];
                        }
                          ?></span>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Giới tính</label>
                <select name="gender" id="">
                        <option <?= $rows->Gioi_tinh == 'nam' ? 'selected' : '' ?> value="nam">Nam</option>
                        <option <?= $rows->Gioi_tinh == 'nữ' ? 'selected' : '' ?> value="nữ">Nữ</option>
                        <option <?= $rows->Gioi_tinh == 'khác' ? 'selected' : '' ?> value="khác">Khác</option>
                </select>
                <span><?php if (isset($errors['gender'])) {
                            echo $errors['gender'];
                        }
                          ?></span>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Thông tin sinh viên</label>
                <textarea type="text" name="info" id="" class="form-control" placeholder=""><?=$rows->Thong_tin; ?></textarea>
                <span><?php if (isset($errors['info'])) {
                            echo $errors['info'];
                        }
                          ?></span>
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
            <a href="index.php" class="btn btn-danger">Quay lại</a>
            <?php else : ""; endif ?>
        </form>
    </div>
</body>

</html>