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
        $max=[];
        function max_1($max){
            $max_2=$max[0][0];
            for($i=0;$i<count($max);$i++){
                for($j=0;$j<count($max[$i]);$j++){
                    if($max[$i][$j]>$max_2){
                        $max_2=$max[$i][$j];
                    }
                }
            }
            echo $max_2;
        }

        $max_3=[
            [1,3,5,7,9],
            [2,4,6,8,10]
        ];
        max_1($max_3);


    ?>
</body>
</html>