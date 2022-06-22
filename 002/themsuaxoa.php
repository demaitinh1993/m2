<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='post'>
        THÔNG TIN HỌC SINH:<br>
        họ và tên học sinh:
        <input type="text" name="name" id=""><br>
        địa chi:
        <input type="text" name="addres" id=""><br>
        số điện thoại:
        <input type="text" name="phone" id=""><br>
        <input type="submit" value="thêm">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $name=$_POST['name'];
            $addres=$_POST['addres'];
            $phone=$_POST['phone'];

        }
    ?>
</body>
</html>