<?php
 $pattern = '/^[0-9]{4}+\-[0][2]+\-[0][0-9]{1}$/';
 $pattern1 = '/^[0-9]{4}+\-[0][2]+\-[1][0]$/';
 $subject="2022-02-10";
 if (preg_match($pattern, $subject) || preg_match($pattern1, $subject)) {
    echo 'Chuỗi regex so khớp';
}else{
    echo ' chuối không khớp';
}
    $text ="ngày 2022-01-29 mua hàng 100,000 đ,ngày 2022-02-02 mua hàng 300,000 đ,ngày 2022-02-07 thanh toán 200,000 đ,ngày 2022-02-10 mua hàng 250,000 đ,ngày 2022-02-15 thanh toán 400,000 đ,";

    $arr = explode("ngày",$text);
    echo "<hr>";
    echo "<pre>";
    print_r($arr);
    $mang=[];
    foreach($arr as $ar)
    {
        $array=explode(" ",$ar);
        array_push($mang,$array);
    }
    $aluy=[];
    foreach($mang as $key=>$values)
    {
        foreach($values as $ki=>$value)
        {
            $pattern = '/^[0-9]{4}+\-[0][2]+\-[0][0-9]{1}$/';
            $pattern1 = '/^[0-9]{4}+\-[0][2]+\-[1][0]$/';
            if (preg_match($pattern, $value) || preg_match($pattern1, $value)) {
                array_push($aluy,$key);
            }
        }
    }
    echo "<pre>";
    print_r($aluy);
foreach($aluy as $key=>$value)
{
    echo $arr[$value]."<br>";
}
?>