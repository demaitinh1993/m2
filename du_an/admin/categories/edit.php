<?php
include '../db.php';
$id=$_REQUEST['id'];
$sql = "SELECT * FROM categories WHERE id='$id'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
   
    $errors = [];
    if ($name==''){
        $errors['name']="You need to enter your name";
    }
    if (empty($errors)) {
        $sql = "UPDATE categories SET name = '$name' WHERE id = '$id'";
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
            <legend>Add Product</legend>
          
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" value="<?=$rows->name; ?>">
                <span><?php if (isset($errors['name'])) {
                            echo $errors['name'];
                        }
                          ?></span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">cancel</a>
        </form>
    </div>
</body>

</html>