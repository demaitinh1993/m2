<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phonenumber_1 = [];
    $viettel = [];
    $mobifone = [];
    $vina = [];
    $phone = $_REQUEST['phone'];
    $phonenumber = explode(" ", $phone);
    for ($i = 0; $i < count($phonenumber); $i++) {
        $phones = str_split($phonenumber[$i]);
        array_push($phonenumber_1, $phones);
    }
    // print_r($phonenumber);
    // print_r($phonenumber_1);
    for ($i = 0; $i < count($phonenumber_1); $i++) {
        if (
            $phonenumber_1[$i][1] == 8 && $phonenumber_1[$i][2] == 6 ||
            $phonenumber_1[$i][1] == 9 && $phonenumber_1[$i][2] == 6 ||
            $phonenumber_1[$i][1] == 9 && $phonenumber_1[$i][2] == 7 ||
            $phonenumber_1[$i][1] == 9 && $phonenumber_1[$i][2] == 8 ||
            $phonenumber_1[$i][1] == 3 && $phonenumber_1[$i][2] == 2 ||
            $phonenumber_1[$i][1] == 3 && $phonenumber_1[$i][2] == 3 ||
            $phonenumber_1[$i][1] == 3 && $phonenumber_1[$i][2] == 4 ||
            $phonenumber_1[$i][1] == 3 && $phonenumber_1[$i][2] == 5 ||
            $phonenumber_1[$i][1] == 3 && $phonenumber_1[$i][2] == 6 ||
            $phonenumber_1[$i][1] == 3 && $phonenumber_1[$i][2] == 7 ||
            $phonenumber_1[$i][1] == 3 && $phonenumber_1[$i][2] == 8 ||
            $phonenumber_1[$i][1] == 3 && $phonenumber_1[$i][2] == 9
        ) {
            array_push($viettel, $phonenumber_1[$i]);
        }  if (
            $phonenumber_1[$i][1] == 9 && $phonenumber_1[$i][2] == 0 ||
            $phonenumber_1[$i][1] == 9 && $phonenumber_1[$i][2] == 3 ||
            $phonenumber_1[$i][1] == 1 && $phonenumber_1[$i][2] == 2 ||
            $phonenumber_1[$i][1] == 8 && $phonenumber_1[$i][2] == 9 && $phonenumber_1[$i][3] == 6 && $phonenumber_1[$i][4] == 6
        ) {
            array_push($mobifone, $phonenumber_1[$i]);
        }  if (
            $phonenumber_1[$i][1] == 8 && $phonenumber_1[$i][2] == 8 ||
            $phonenumber_1[$i][1] == 9 && $phonenumber_1[$i][2] == 1 ||
            $phonenumber_1[$i][1] == 9 && $phonenumber_1[$i][2] == 4 ||
            $phonenumber_1[$i][1] == 8 && $phonenumber_1[$i][2] == 3 ||
            $phonenumber_1[$i][1] == 8 && $phonenumber_1[$i][2] == 4 ||
            $phonenumber_1[$i][1] == 8 && $phonenumber_1[$i][2] == 5 ||
            $phonenumber_1[$i][1] == 8 && $phonenumber_1[$i][2] == 1 ||
            $phonenumber_1[$i][1] == 8 && $phonenumber_1[$i][2] == 2
        ) {
            array_push($vina, $phonenumber_1[$i]);
        }
    
    }
    // echo "<pre>";
    // print_r($vina);
    
    // echo "<br>";
    // print_r($mobifone);
    // echo "<br>";
    // print_r($vina);

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
    <form action="" method="post">
        <td>Nhập các số điện thoại và cách nhau bỡi khoảng trắng</td><br>
        <textarea name="phone" placeholder="Nhập số điện thoại vào đây"></textarea><br>
        <input type="submit">
    </form>
    
</body>

</html>
<?php
echo"Những số Viettel<br>";
  foreach($viettel as $key=>$val){
    foreach($viettel[$key] as $k=>$v){
        echo $v;
      }
      echo"<br>";
  }
  echo"Những số Mobifone <br>";
  foreach($mobifone as $key=>$val){
    foreach($mobifone[$key] as $k=>$v){
        echo $v;
      }
      echo"<br>";
  }
  echo"Những số Vina <br>";
  foreach($vina as $key=>$val){
    foreach($vina[$key] as $k=>$v){
        echo $v;
      }
      echo"<br>";
  }

?>
