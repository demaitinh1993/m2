<?php
include 'connect.php';
$id=$_REQUEST['id'];
$sql = "SELECT * FROM tb_sinhvien WHERE sv_id='$id'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$result = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
    $gender = $_REQUEST['inlineRadioOptions'];
    $birthday = $_REQUEST['birthday'];
    $errors = [];
    $fields = ['name', 'inlineRadioOptions', 'birthday'];
    foreach ($fields as $field) {
        if (empty($_POST[$field])) {
            $errors[$field] = 'Không được để trống';
        }
        
    }
    if (empty($errors)) {
        $sql = "UPDATE tb_sinhvien SET sv_name = '$name', sv_sex = '$gender',sv_birthday = '$birthday' WHERE sv_id = '$id'";

        $conn->query($sql);
        header('location:index.php');
        // $_SESSION['flash_message'] = "Chỉnh sửa  thành công";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form method="post" action="">
            <legend>Thêm sản phẩm</legend>
          
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">SV name</label>
                <input type="text" name="name" id="disabledTextInput" class="form-control" placeholder="Disabled input" value="<?=$result->sv_name; ?>">
            </div>
            <label for="disabledTextInput" class="form-label">gender</label>
            <div class="form-check form-check-inline">
            <?php $signi= $result->sv_sex; ?> 
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Nam" <?php if($signi=='Nam'){ echo "checked=checked";}; ?>/>Nam
                <label class="form-check-label" for="inlineRadio1"></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Nữ" <?php if($signi=='Nữ'){ echo "checked=checked";};  ?>/> Nữ</td></td>
                <label class="form-check-label" for="inlineRadio2"></label>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">ngay sinh</label>
                <input type="date" name="birthday" class="form-control" value="<?= $result->sv_birthday; ?>">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">cancel</a>


        </form>
    </div>
</body>

</html>