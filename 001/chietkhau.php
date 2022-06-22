<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $namesp=$_POST['name'];
        $giasp=$_POST['gia'];
        $chietkhau=$_POST['tyle'];
        $tienchietkhau=$giasp*$chietkhau/100;
        $tongtien=$giasp-$tienchietkhau;
        echo "số tiền chiết khấu:".$tienchietkhau.'<br>'."tổng tiền phải trả:".$tongtien;
}

    ?>
    <form method='post'>
        tên sản phẩn:
        <input type="text" name="name" id=""><br>
        giá niêm yết của sản phầm:
        <input type="text" name="gia" id=""><br>
        tỷ lệ chiết khấu(%):
        <input type="text" name="tyle" id=""><br>
        <input type="submit" value="tính">

    </form>
</body>
</html>