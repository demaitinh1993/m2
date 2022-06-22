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
        Hiển thị số nguyên tố từ 1-100:
        <input type = 'submit' value='hiển thị'><br>

    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $uoc = 0;
            $dem = 0;
            for ($i = 2; $i <= 100; $i++) {

                    for ($j = 1; $j <= $i; $j++) {
                        if ($i % $j == 0) {
                            $uoc += 1;
                        }
                    }
                    if ($uoc == 2) {
                        echo $i." ";
                    }
                    $uoc = 0;
            }
        }
        
        



    ?>
</body>
</html>