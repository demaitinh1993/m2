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
        $dictionary=[
            "hello"=>"xin chào thằng ngu",
            "how"=> "muốn thế nào",
            "book"=> "sách, quyển vở",
            "computer"=> "máy tính"
        ];
    if(empty($_REQUEST['K3'])){
        // echo "123";
        $searchword= $_REQUEST['search'];
        // echo $searchword;
        $flag=0;
        foreach ($dictionary as $k => $k2){
            if($k ==$searchword){
                echo "Từ " . $k . ".<br/>Nghĩa của từ: " . $k2;
                echo "<br/>";
                $flag =1;
            }
        }
        if($flag ==0){
            echo "không tìm thấy từ cần tra.";
        }
    }
    ?>
    <h2>Từ điển anh việt<h2>
<form method="get" action="">
        <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
        <input type="submit" id ="submit" name="k3" value="tìm"/>
</form>
</body>
</html>