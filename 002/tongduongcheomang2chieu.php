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
        $sum1=0;
        $sum2=0;
        for($i=0;$i<count($mang);$i++){
            for($j=0;$j<count($mang[$i]);$j++){
                if($i==$j){
                    // global $sum1;
                    $sum1+=$mang[$i][$j];
                }
                if($i+$j==(count($mang)-1)){
                    // global $sum2;
                    $sum2+=$mang[$i][$j];
                }
            }
        }
        echo $sum1."<br>";
        echo $sum2;



    ?>
</body>
</html>