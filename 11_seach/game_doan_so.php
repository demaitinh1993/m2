<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $_POST['lớn hơn']=$a;
    $_POST['nhỏ hơn']=$b;
    $l=1;
    $r=100;
    $rand=rand($l,$r);
    // echo $rand."<br>";
    if(isset($a))
    {
        $r=$rand-1;
        $l=$l;
        $rand=rand($l,$r);
        echo $rand;
    }
    if(isset($b))
    {
        $l=$rand+1;
        $r=$r;
        $rand=rand($l,$r);
        echo $rand;
    }
   
    

   

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Lucky Number<br>
           Nghĩ 1 số từ 1->100
        <input type="submit" name="lớn hơn" value="lớn hơn">
        <input type="submit" name="nhỏ hơn" value="nhỏ hơn">
        <input type="submit" name="kiểm tra" value="đoán">
    </form>
    </body>
</html>