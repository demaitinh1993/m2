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
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $so1=$_GET['so1'];
            $so2=$_GET['so2'];
            $tong=$so1+$so2;
            $hieu=$so1-$so2;
            $tich=$so1*$so2;
            // $thuong=$so1/$so2;
            $pheptinh=$_GET['pheptinh'];
            switch($pheptinh){
                case 'cong' :
                    $error=[];
                    if($so2==0 || $so1==0 && $so2==0){
                        $error['ngoaile']='loi roi ban ei';
                    }else {
                        echo $so1."+".$so2."=".$tong;}
                    break;
                case 'tru' :
                    $error=[];
                    if($so2==0 || $so1==0 && $so2==0){
                        $error['ngoaile']='loi roi ban ei';
                    }else{
                        echo $so1."-".$so2."=".$hieu;}
                    break;
                case 'nhan' :
                    $error=[];
                    if($so2==0 || $so1==0 && $so2==0){
                        $error['ngoaile']='loi roi ban ei';
                    }else{
                        echo $so1."*".$so2."=".$tich;}
                    break;
                case 'chia' :
                    $error=[];
                    if($so2==0 || $so1==0 && $so2==0){
                        $error['ngoaile']='loi roi ban ei';
                    }else{
                        echo $so1."/".$so2."=".$so1/$so2;}
                    break;
            }
            // $error=[];
            // if($so2==0 || $so1==0 && $so2==0){
            //     $error['ngoaile']='loi roi ban ei';
            // }
        }


    ?>
    <form method="get">
        May tinh:<br>
        nhap so thu nhat:
        <input type="text" name="so1" id=""><br>
        lua chon phe tinh:
        <select name="pheptinh">
            <option value="cong">cong</option>
            <option value="tru">tru</option>
            <option value="nhan">nhan</option>
            <option value="chia">chia</option>
        </select><br>
        nhap so thu 2:
        <input type="text" name="so2" id=""><br>
        <input type="submit" value="tinhtoan"><br>
        <span><?php if(isset($error['ngoaile'])){echo $error['ngoaile'];} ?></span>

    </form>
</body>
</html>