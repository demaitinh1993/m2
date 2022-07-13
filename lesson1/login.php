<?php
include 'connect.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $errors = [];

    if (empty($email)) { /////nếu name rỗng thì báo lỗi
        $errors['email'] = 'bạn cần nhập email';
    }
    if (empty($password)) { /////nếu name rỗng thì báo lỗi
        $errors['password'] = 'bạn cần nhập password';
    }
    if (empty($errors)) {
        $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
        // print_r($sql);
        // die();
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //fetch se tra ve du lieu 1 ket qua
        $result = $stmt->fetch();

        if ($result){
            $_SESSION['login_user'] = $result->name;
            header("location: index.php");
        } else {
            $error = "Your Login Name or Password is invalid";
        }
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
            color: brown;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method='post' action=''>
            <div class="mb-3">
                <span><?php if (isset($errors['login'])) {
                            echo $errors['login'];
                        }  ?></span>
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" name='email' class="form-control" id="exampleInputPassword1">
                <span><?php if (isset($errors['email'])) {
                            echo $errors['email'];
                        }  ?></span>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input name='password' type="password" class="form-control" value="">
                <span><?php if (isset($errors['password'])) {
                            echo $errors['password'];
                        }  ?></span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">cancel</a>