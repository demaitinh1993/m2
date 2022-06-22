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
        $mang=[
            [4,5,6,7],
            [7,6,5,4],
            [1,4,7,9],
            [4,6,0,7]
        ];
        $sum=0;
        $cot=1;
        for($i=0;$i<count($mang);$i++){
            for($j=0;$j<count($mang[$i]);$j++){
                if($j==$cot){
                    $sum+=$mang[$i][$j];
                }
            }
        }
        echo $sum;



    ?>
</body>
</html>