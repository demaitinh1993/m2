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
        $mang_1=[1,3,5,7];
        $mang_2=[2,4,6,8];
        $mang_3=[];
        for($i=0;$i<count($mang_1);$i++){
            array_push($mang_3, $mang_1[$i]);
        }
        for($i=0; $i<count($mang_2); $i++){
            array_push($mang_3, $mang_1[$i]);
        }
        echo '<pre>';
        print_r($mang_3);
        echo '</pre>';
      




    ?>
</body>
</html>