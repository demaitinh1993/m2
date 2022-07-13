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

        label {
            color: brown;

        }

        /* body {
            background-image: url(picture/img3.jpg);
            background-size: cover;
        } */
    </style>
</head>

<body>
    <?php
    $i = $_REQUEST['id'];
    $old_data =  file_get_contents('user.json'); ///lay dlieu trong file json
    $old_data = json_decode($old_data); ///chuyen dlieu ve mang 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name_1 = $_POST['ten'];
        $email_1 = $_POST['email'];
        $phone_1 = $_POST['sdt'];
        $pw = $_POST['password'];
        $err = [];

        if (empty($name_1)) { /////nếu name rỗng thì báo lỗi
            $err['name'] = 'bạn cần nhập tên';
        }
        if (empty($phone_1)) { /////nếu phone rỗng thì báo lỗi
            $err['phone'] = 'bạn cần nhập số điện thoại';
        }
        if (empty($pw)) { /////nếu password rỗng thì báo lỗi
            $err['password'] = 'bạn cần nhập mật khẩu';
        }
        if (empty($email_1)) { /////nếu email rỗng thì báo lỗi
            $err['err_email'] = "bạn cần nhập email";
        }
        if ($old_data[$i][3] != $pw) { /////nếu k n hập đúng mật khẩu thì báo lỗi
            $err['pw'] = 'mật khẩu không đúng';
        }


        for ($j = 0; $j < count($old_data); $j++) { //////nếu email đã được dùng thì báo lỗi
                    // global $i;
                if (in_array($email_1, $old_data[$j]) && $j!=$i) {
                    global $erro;
                    $erro['email12'] = 'Email này đã được sử dụng';
                }
            
        }
        if (empty($err) && empty($erro)) {
            $contact = [$name_1, $email_1, $phone_1, $pw]; //dua cac ptu vao mang
            $old_data[$i] = $contact;
            $old_data = json_encode($old_data); ///chuyen kdl mang => json
            file_put_contents('user.json', $old_data); ///chuyen dlieu vao file json
            
            ////thông báo edit thành công
            $new_data =  file_get_contents('tb.json'); ///lay dlieu trong file json
            $new_data = json_decode($new_data); ///chuyen dlieu ve mang 
            $err_susses="Edit success";
            // $susses=[$err_susses];
            array_push($new_data, $err_susses); ///them ptu vao mang
            $new_data = json_encode($new_data); ///chuyen kdl mang => json
            file_put_contents('tb.json', $new_data); ///chuyen dlieu vao file json

            header('Location:formnguoidung.php'); ////quay lại form người dùng
        }
    }
    ?>

    <div class="container">
        <form method='post' action=''>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Use name</label>
                <input type="text" name='ten' class="form-control" value="<?= $old_data[$i][0] ?>">
                <span><?php if (isset($err['name'])) {
                            echo $err['name'];
                        }
                        if (isset($error['name1'])) {
                            echo $error['name1'];
                        }  ?></span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="text" name='email' class="form-control" value="<?= $old_data[$i][1] ?>">
                <span><?php if (isset($err['err_email'])) {
                            echo $err['err_email'];
                        }  ?></span>
                <span><?php if (isset($err['email'])) {
                            echo $err['email'];
                        }
                        if (isset($erro['email12'])) {
                            echo $erro['email12'];
                        }
                        ?></span>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone</label>
                <input name='sdt' type="text" class="form-control" value="<?= $old_data[$i][2] ?>">
                <span><?php if (isset($err['phone'])) {
                            echo $err['phone'];
                        }  ?></span>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Enter the Password</label>
                <input name='password' type="password" class="form-control" value="">
                <span><?php if (isset($err['pw'])) {
                            echo $err['pw'];
                        }  ?></span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="formnguoidung.php" class="btn btn-danger">cancel</a>
    </div>
</body>

</html>