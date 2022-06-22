<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST'>
        chọn hình muốn hiển thị:
        <select name='hinh'>
            <option value="hinh_chu_nhat">hình chử nhật</option>
            <option value="tgvuong_trenphai">tam giác vuông trên phải</option>
            <option value="tgvuong_trentrai">tam giác vuông trên trái</option>
            <option value="tgvuong_duoiphai">tam giác vuông dưới phải</option>
            <option value="tgvuong_duoitrai">tam giác vuông trên trái</option>
        </select><br>
        <input type='submit' value='hiển thị'>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $hinh=$_POST['hinh'];
            // print_r($hinh);
            if($hinh=='hinh_chu_nhat'){
                for($i=0;$i<=2;$i++){
                    echo "<br>";
                    for($j=0;$j<=6;$j++){
                        echo "*";
                    }
                }
            }else if($hinh=='tgvuong_trenphai'){
                // for ($i = 1; $i <= 5; $i++) {
                //     echo ("*".repeat($i).padStart(5));
                // }
            }else if($hinh=='tgvuong_trentrai'){
                for($i=4;$i>=0;$i--){
                        for($j=0;$j<=$i;$j++){
                            echo "*";
                        }
                        echo "<br>";
                    }
            }else if($hinh=='tgvuong_duoiphai'){
                // $cach= '&nbsp;';
                // for($i=0;$i<=4;$i++){ 
                //     for($j=0;$j<=$i;$j++){          
                //         echo "*";
                //         if($i=3){
                //             echo $cach;
                //         }
                //         if ($i==$j){
                //         echo "<br>";
                //         }
                        
                //     }
                    
                // }
    
            }else if($hinh=='tgvuong_duoitrai'){
                for($i=0;$i<=4;$i++){
                        for($j=0;$j<=$i;$j++){
                            echo "*";
                        }
                        echo "<br>";
                    }
            }
        }
    ?>
</body>
</html>