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
        Hiển thị n số nguyên tố đầu tiên:
        <input type="text" name='so' value=""><br>
        <input type="submit" value="hiển thị">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $hienthi=$_POST['so'];
            $uoc = 0;
            $dem = 0;
            for ($i = 2; $i < 1000; $i++) {
                if ($dem < $hienthi) {
                    for ($j = 1; $j <= $i; $j++) {
                        if ($i % $j == 0) {
                            $uoc += 1;
                        }
                    }
                    if ($uoc == 2) {
                        echo $i." ";
                        $dem += 1;
                    }
                    $uoc = 0;
                } else {
                        break;
                }
            }
        }
    ?>
</body>
</html>