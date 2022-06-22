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
        $arr=[];
        function min1($arr){
            $min=$arr[0][0];
            for($i=0;$i<count($arr);$i++){
                for($j=0;$j<count($arr[$i]);$j++){
                    if($arr[$i][$j]<$min){
                        $min=$arr[$i][$j];
                    }
                }
            }
            
            echo $min;
        }


        $min_1=[
            [1,3,5,7,9],
            [2,4,6,8,10]
        ];
        min1($min_1);

    ?>
</body>
</html>