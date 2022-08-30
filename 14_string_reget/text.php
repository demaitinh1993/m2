<?php
// $str="van , sử , địa";
// $arr=explode(",",$str);

// echo "<pre>";
// print_r($arr);
// echo "</pre>";

// $str=implode(',',$arr);

// $phone="1234567";
// $phone_1= strstr($phone, "5", true);
// echo $phone_1;

$str_phones = '0943612567,0905444555,0968787878,0941888999';
$arr=explode(",",$str_phones);
// echo "<pre>";
// print_r($arr);
$vinaphone=[];
for($i=0;$i<count($arr);$i++)
{
    if(substr($arr[$i],0,3)=="094" || substr($arr[$i],0,3)=="091")
    {
        array_push($vinaphone,$arr[$i]);
    }
    // echo "<pre>";
// var_dump(substr($arr[$i],0,3));
}
$str_phone2=implode(",",$vinaphone);
echo $str_phone2;

// $id=[3,4];
// $data=[
//     '2'=>3,
//     '3'=>4
// ];
// foreach($id as $key => $value )
// {
//     echo 
// }
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date=date('Y-m-d H:i');
echo "<pre>";
print_r($date);
