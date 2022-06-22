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
            $a=$_POST['a'];
            $b=$_POST['b'];
            $c=$_POST['c'];
            // $d= s
            // if($a==0){
            //     echo""
            // }
            if($a=='' || $b=='' || $c==''){
                echo 'bạn cần nhập đầy đủ thông số của phương trình';
                
            }
            $delta= $b*$b-4*$a*$c;
            $n1=((-$b + sqrt($delta))/2*$a);
            $n2=((-$b - sqrt($delta))/2*$a);

            if($delta<0){
                echo "phương trình vô nghiệm";
            }else if($delta==0){
                echo"phương trình có 1 nghiệm kép x1=x2=".(-$b/2*$a);
            }else if($delta>0){
                echo 'phương trình có 2 nghiệm x1='.$n1.", x2=".$n2;
            }
        }


    ?>
<form method='post'>
        giải phương trình bậc hai:<br>
        <input type="text" name="a">x*x+
        <input type="text" name="b">x
        <input type="text" name="c">=0<br>
        <input type="submit" value="tìm nghiệm">
        <span></span> 
    </form>
</body>
</html>