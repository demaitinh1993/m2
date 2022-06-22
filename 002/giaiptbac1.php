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
            if($a=='' || $b==''){
                echo 'bạn cần nhập đủ các thông số của phương trình';
            }else if($a==0 || $b==0){
                echo "phương trình vô nghiệm";
            }else {
                echo -$b/$a;
            }
        }



    ?>
    <form method='post'>
        giải phương trình bậc nhất:<br>
        <input type="text" name="a">x+
        <input type="text" name="b">=0<br>
        <input type="submit" value="tìm nghiệm">
        <span></span> 
    </form>
</body>
</html>