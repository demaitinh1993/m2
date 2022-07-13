<?php
include '../db.php';
session_start();
$sql = "SELECT * FROM products";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetchAll();
// $name=$gender=$birthday=null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $color = $_REQUEST['color'];
    $breed = $_REQUEST['breed'];
    $gender = $_REQUEST['gender'];
    $price = $_REQUEST['price'];
    $img = $_REQUEST['img'];
    $errors = [];
    if ($name==''){
        $errors['name']="You need to enter your name";
    }if ($age==''){
        $errors['age']="You need to enter your age";
    }if ($color==''){
        $errors['color']="You need to enter your color";
    }if ($breed==''){
        $errors['breed']="You need to enter your breed";
    }if ($gender==''){
        $errors['gender']="You need to enter your gender";
    }if ($price==''){
        $errors['price']="You need to enter your lại price";
    }if ($img==''){
        $errors['img']="You need to enter your lại img";
    }
    if (empty($errors)) {
        $sql = "INSERT INTO products  (name,age,color,breed,gender,price,image) VALUES ('$name', '$age', '$color', '$breed', '$gender', '$price','$img')";
        $conn->query($sql);
        $_SESSION['dn'] = "Added success";
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
            <legend>Add Product</legend>
          
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($errors['name'])) {
                            echo $errors['name'];
                        }
                          ?></span>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Age</label>
                <input type="text" name="age" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($errors['age'])) {
                            echo $errors['age'];
                        }
                          ?></span>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Color</label>
                <input type="text" name="color" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($errors['color'])) {
                            echo $errors['color'];
                        }
                          ?></span>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Breed</label>
                <input type="text" name="breed" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($errors['breed'])) {
                            echo $errors['breed'];
                        }
                          ?></span>
            </div>
            <label for="disabledTextInput" class="form-label">Gender</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="" value="Male_Dog" checked/>Male Dog
                <label class="form-check-label" for="inlineRadio1"></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="" value="Bitch" />Bitch
                <label class="form-check-label" for="inlineRadio2"></label>
            </div><br>
            <span><?php if (isset($errors['gender'])) {
                            echo $errors['gender'];
                        }
                          ?></span>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Price($)</label>
                <input type="text" name="price" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($errors['price'])) {
                            echo $errors['price'];
                        }
                          ?></span>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Images</label>
                <input type="file" name="img" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($errors['img'])) {
                            echo $errors['img'];
                        }
                          ?></span>
            </div>
            <!-- <div class="mb-3">
                <label for="disabledTextInput" class="form-label">ngay sinh</label>
                <input type="date" name="birthday" class="form-control" value="">
            </div> -->
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">cancel</a>


        </form>
    </div>
</body>

</html>