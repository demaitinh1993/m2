<?php
include 'connect.php';
$sql = "SELECT * FROM user";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$result = $stmt->fetchAll();
// $name=$gender=$birthday=null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $phone = $_REQUEST['phone'];
    $password = $_REQUEST['password'];
    $re_password = $_REQUEST['repassword'];
    $errors = [];
  //////xử lý rỗng 
    if ($name==''){
        $errors['name']="bạn cần nhập tên";
    }if ($email==''){
        $errors['email']="bạn cần nhập email";
    }if ($address==''){
        $errors['address']="bạn cần nhập address";
    }if ($phone==''){
        $errors['phone']="bạn cần nhập phone";
    }if ($password==''){
        $errors['password']="bạn cần nhập password";
    }if ($re_password==''){
        $errors['re_password']="bạn cần nhập lại password";
    }
    if($password != $re_password){
        $errors['pw']="mật khẩu nhập lại không đúng";
    }
    foreach($result as $item){//////xử lý trùng email thì k đăng kí được
        if($item->email==$email){
            $errors['mail'] = 'Email đã tồn tại';
        }
    }
    if (empty($errors)) {
        $sql = "INSERT INTO user  (name,email,address,phone,password) VALUES ('$name', '$email', '$address','$phone','$password')";
        $conn->query($sql);
        header('location:login.php');
        // $_SESSION['flash_message'] = "Chỉnh sửa  thành công";
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <style>
        span {
            color: red;
        }
        /* body {
            background-image: url(picture/img3.jpg);
            background-size: cover;

        } */
        label {
            color:brown;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method='post' action=''>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Use name</label>
                <input type="text" name='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <span><?php if (isset($errors['name'])) {
                            echo $errors['name'];
                        }
                          ?></span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" name='email' class="form-control" id="exampleInputPassword1">
                <span><?php if (isset($errors['email'])) {
                            echo $errors['email'];
                        } if (isset($errors['mail'])) {
                            echo $errors['mail'];
                        } ?></span>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input name='address' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <span><?php if (isset($errors['address'])) {
                            echo $errors['address'];
                        }  ?></span>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone</label>
                <input name='phone' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <span><?php if (isset($errors['phone'])) {
                            echo $errors['phone'];
                        }  ?></span>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input name='password' type="password" class="form-control"   value="">
                <span><?php if (isset($errors['password'])) {
                            echo $errors['password'];
                        }  ?></span>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
                <input name='repassword' type="password" class="form-control"   value="">
                <span><?php if (isset($errors['re_password'])) {
                            echo $errors['re_password'];
                        } if (isset($errors['pw'])) {
                            echo $errors['pw'];
                         } ?></span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">cancel</a>
