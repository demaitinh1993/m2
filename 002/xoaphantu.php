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
        $mang = [1,2,3,4,5,6,7,8,9,0];
        $xoa=6;
        for($i=0;$i<count($mang);$i++){
            if($mang[$i]==$xoa){
                // $j=0;
                for($i;$i<count($mang);$i++){
                    $mang[$i]=$mang[$i+1];
                }
            }
        }
        $mang[count($mang)-1]=$mang[count($mang)-2];
        // $mang=array_pad($mang,10,0);
        // print_r($kq);

        echo '<pre>';
        print_r($mang);
        echo '</pre>';
        $mang_1=[1,2,3,4,5];
        $mang_2=array_pad($mang_1,10,0);
        echo '<pre>';
        print_r($mang_2);
        echo '</pre>';
        $a=2;
        var_dump(in_array($a, $mang_2)) ;



    ?>
</body>
</html>