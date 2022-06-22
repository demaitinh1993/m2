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
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $tien=$_POST["tien"];
            $ls=$_POST["ls"];
            $nam=$_POST["nam"];
            $tong=$tien+(($tien*$ls/100));

            for($i=1;$i<=$nam;$i++){
                $tong+=($tong*$ls/100);
            };
            
            echo $tong;
        }


    ?>
    <form method="post">
        Nhập lượng tiền đầu tư:
        <input type="text" name="tien" id=""><br>
        Nhập lãi suất năm:
        <input type="text" name="ls" id=""><br>
        Nhập số năm đầu tư:
        <input type="text" name="nam" id=""><br>
        <input type="submit" value="tính">
    </form>
</body>
</html>