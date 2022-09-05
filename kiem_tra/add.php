<?php
include_once "db.php";
$sql = "SELECT * FROM class";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
// print_r($rows);
// die();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
    $class = $_REQUEST['class'];
    $birthday = $_REQUEST['birthday'];
    $gender = $_REQUEST['gender'];
    $info = $_REQUEST['info'];
    // print_r($info);
    // die();
    $errors = [];
    if ($name==''){
        $errors['name']="bạn không thể đê trống mục này";
    }
    if ($class==''){
        $errors['class']="bạn không thể đê trống mục này";
    }
    if ($birthday==''){
        $errors['birthday']="bạn không thể đê trống mục này";
    }
    if ($gender==''){
        $errors['gender']="bạn không thể đê trống mục này";
    }
    if ($info==''){
        $errors['info']="bạn không thể đê trống mục này";
    }

    if (empty($errors)) {
        $sql= "INSERT INTO `students`( `Ten_hoc_sinh`, `Lop`, `Ngay_sinh`, `Gioi_tinh`, `Thong_tin`) 
        VALUES ('$name','$class','$birthday','$gender','$info')";
        $conn->query($sql);

        header('location:index.php');
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
            <legend>Thêm sinh viên</legend>
          
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Tên học sinh</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($errors['name'])) {
                            echo $errors['name'];
                        }
                          ?></span>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Lớp</label>
                <select name="class" id="breed">
                    <?php if (isset($rows)) : ?>
                        <?php foreach ($rows as $row) { ?>
                            <option value="<?= $row->id ?>"><?= $row->ten_lop ?></option>
                        <?php  } ?><br>
                    <?php else : "";
                    endif; ?>
                        <!-- <option value="h1">H1</option>
                        <option value="h2">H2</option>
                        <option value="h3">H3</option>
                        <option value="h4">H4</option> -->
                </select>
                <span><?php if (isset($errors['class'])) {
                            echo $errors['class'];
                        }
                          ?></span>
            </div>
               
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Ngày sinh</label>
                <input type="date" name="birthday" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($errors['birthday'])) {
                            echo $errors['birthday'];
                        }
                          ?></span>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Giới tính</label>
                <select name="gender" id="">
                        <option value="nam">Nam</option>
                        <option value="nữ">Nữ</option>
                        <option value="khác">Khác</option>
                </select>
                <span><?php if (isset($errors['gender'])) {
                            echo $errors['gender'];
                        }
                          ?></span>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Thông tin sinh viên</label>
                <textarea type="text" name="info" id="" class="form-control" placeholder="" value=""></textarea>
                <span><?php if (isset($errors['info'])) {
                            echo $errors['info'];
                        }
                          ?></span>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a href="index.php" class="btn btn-danger">Quay lại</a>


        </form>
    </div>
</body>

</html>