<?php
$old_data =  file_get_contents('user.json'); ///lay dlieu trong file json
$old_data = json_decode($old_data, true); ///chuyen dlieu ve mang   
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['ten'];
    $email = $_POST['email'];
    $phone = $_POST['sdt'];
    $err = [];
    $error = [];
    $filename = 'user.json';
    $pw=$_POST['password'];
    ///////vử lý lỗi ở các ô nhập dữ liệu
    if (empty($name)) {
        $err['name'] = 'bạn cần nhập tên';
    }
    if (empty($phone)) {
        $err['phone'] = 'bạn cần nhập số điện thoại';
    }
    if (empty($pw)) {
        $err['password'] = 'bạn cần nhập mật khẩu';
    }
    if (empty($email)) {
        $err['err_email'] = "bạn cần nhập email";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err['err_email'] =  "chưa đúng định dạng";
    }
    if (empty($err)) {
        function saveDataJSON($filename, $name, $email, $phone, $pw)
        {
            $contact = [$name, $email, $phone, $pw]; //dua cac ptu vao mang
            $data = json_encode($contact); ///chuyen mang ve kdl json


            $old_data =  file_get_contents('user.json'); //lay dlieu file json ve
            $old_data = json_decode($old_data, true); ///chuyen kdl json ve mang

            ///xử lý trùng lặp dữ liệu

            for ($i = 0; $i < count($old_data); $i++) {
                if (in_array($contact[1], $old_data[$i])) {
                    global $error;
                    $error['name1'] = 'Email này đã được sử dụng';
                }
                // if($old_data[$i][$j]==$contact[0]){
                //     global $error;
                //     $error['name1']='tên đăng nhập đã tồn tại';
                // }
                // }
            }

            if (empty($error)) {

                array_push($old_data, $contact); ///them ptu vao mang
                $old_data = json_encode($old_data); ///chuyen kdl mang => json

                file_put_contents('user.json', $old_data); ///chuyen dlieu vao file json

                ////thông báo add thành công
                $new_data =  file_get_contents('tb.json'); ///lay dlieu trong file json
                $new_data = json_decode($new_data); ///chuyen dlieu ve mang 
                $err_susses="add success";
                array_push($new_data, $err_susses); ///them ptu vao mang
                $new_data = json_encode($new_data); ///chuyen kdl mang => json
                file_put_contents('tb.json', $new_data); ///chuyen dlieu vao file json

                header('Location:formnguoidung.php');
            }
        }
        saveDataJSON($filename, $name, $email, $phone, $pw); ///goi ham
        $old_data =  file_get_contents('user.json'); ///lay dlieu trong file json
        $old_data = json_decode($old_data); ///chuyen dlieu ve mang   

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
                <input type="text" name='ten' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <span><?php if (isset($err['name'])) {
                            echo $err['name'];
                        }
                          ?></span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" name='email' class="form-control" id="exampleInputPassword1">
                <span><?php if (isset($err['err_email'])) {
                            echo $err['err_email'];
                        }  ?></span>
                <span><?php if (isset($err['email'])) {
                            echo $err['email'];
                        }
                        if (isset($error['name1'])) {
                            echo $error['name1'];
                        }
                          ?></span>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone</label>
                <input name='sdt' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <span><?php if (isset($err['phone'])) {
                            echo $err['phone'];
                        }  ?></span>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input name='password' type="password" class="form-control"   value="">
                <span><?php if (isset($err['password'])) {
                            echo $err['password'];
                        }  ?></span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="formnguoidung.php" class="btn btn-danger">cancel</a>

