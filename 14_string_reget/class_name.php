<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $classname=$_POST['class'];
    $pattern='/^[A-Z]{1}[0-9]{4}[A-Z]{1}$/';

    $pattern_1='/^[A-Z]{1,10}[0-9]{4}[a-z]{1,10}$/';
    $pattern_1_1='/^[a-z]{1,10}[0-9]{4}[A-Z]{1,10}$/';
    $pattern_1_2='/^[a-z]{1,10}[0-9]{4}[a-z]{1,10}$/';

    $pattern_3='/^[A-Z]{1}[A-Za-z0-9]{1,3}[A-Z]{1}$/';
    $pattern_2='/^[A-Z]{1}[A-Za-z]{4}[A-Z]{1}$/';
    $pattern_3_1='/^[A-Z]{1}[A-Za-z0-9]{5,100}[A-Z]{1}$/';

    $pattern_4='/^[A-Za-z0-9]{1,5}$/';
    $pattern_5='/^[A-Za-z0-9]{6,12}$/';

    class Exception_1 extends Exception
    {
        public function Message()
        {
            return $this->getMessage();
        }
    }
    class Exception_2 extends Exception
    {
        public function Message()
        {
            return $this->getMessage();
        }
    }
    if(preg_match($pattern,$classname))
    {
        echo "Tên lớp học đúng định dạng!";
    }else{
        try{
            if(preg_match($pattern_1,$classname)||preg_match($pattern_1_1,$classname)||preg_match($pattern_1_2,$classname))
            {
                throw new Exception("Tên lớp phải bắt đầu và kết thúc bằng một chữ cái viết hoa!");
            }
            if(preg_match($pattern_3,$classname)||preg_match($pattern_2,$classname)||preg_match($pattern_3_1,$classname))
            {
                throw new Exception_1("Sau kí tự đầu tiên phải là dãy 4 kí tự số!");
            }
            if(preg_match($pattern_4,$classname)|| preg_match($pattern_5,$classname))
            {
                throw new Exception_2("Tên lớp phải có 6 kí tự!");
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }catch(Exception_1 $d){
            echo $d->getMessage();
        }catch(Exception_2 $r){
            echo $r->getMessage();
        }
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
    <form action="" method="post">
        <td>Nhập tên lớp học vào ô dưới đây:</td><br>
        <textarea name="class" placeholder="Class name"></textarea><br>
        <input type="submit">
    </form>

</body>

</html>