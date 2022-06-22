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
        $chuoi='viet nam vo dich a';
        $timkiem='a';
        $count=0;
        $array= str_split($chuoi);
        for($i=0;$i<count($array);$i++){
            if($array[$i]==$timkiem){
                $count++;
            }
        }
        echo '<pre>';
        print_r($array);
        // echo '</pre>';
        echo $count;
       

    ?>
</body>
</html>