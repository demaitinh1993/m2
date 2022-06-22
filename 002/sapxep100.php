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
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $number_1=$_POST['number'];
            $mang=[];
            for($i=0;$i<101;$i++){
                array_push($mang, $i);
            }
            shuffle($mang);
            for($i=0;$i<count($mang);$i++){
                if($number_1==$mang[$i]){
                    echo $i;
                    break;
                }else if($number_1!=$mang[$i] && $i== (count($mang)-1)){
                    echo "không tồn tại".$number_1;
                }
            }
        //     echo '<pre>';
        // print_r($mang);
        // echo '</pre>';
        }


    ?>
    <form method='post'>
        nhập sô:
        <input type="text" name="number" id=""><br>
        <input type="submit" value="tìm">
        <span></span>
    </form>
</body>
</html>