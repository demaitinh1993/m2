<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phone = $_POST['phone'];
    $pattern = '/^\d{2}-0\d{9}$/';
    if (preg_match($pattern, $phone)) {
        echo $phone." là số điện thoại đúng định dạng!"; 
    } else {
        try {
            if (!preg_match($pattern, $phone)) {
                throw new Exception(" không đúng định dạng! <br> Ví dụ số điện thoại đúng định dạng : 84-0978489648");
            }
        } catch (Exception $e) {
            echo $phone . " là số điện thoại" . $e->getMessage();
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
</head>

<body>
    <form action="" method="post">
        <td>Nhập số điện thoại vào ô dưới đây:</td><br>
        <textarea name="phone" placeholder="Nhập phone"></textarea><br>
        <input type="submit">
    </form>
</body>

</html>