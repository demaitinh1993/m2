<?php
// function hello()
// {
//     echo "hello world";
// }
// hello();
// echo "<br>";
// function sum($a,$b)
// {
//     return $a+$b;
// }
// echo sum(3,4);
// echo "<br>";

// $result=sum(4,5);
// echo $result;
// echo "<br>";
 function cong($a,$b)
 {
    return $a+$b;
 }
 function tru($a,$b)
 {
    return $a-$b;
 }
 function nhan($a,$b)
 {
    return $a*$b;
 }
 function chia($a,$b)
 {
    return $a/$b;
 }
 function tinh($pheptinh,$a,$b)
 {
    switch($pheptinh){

        case "cong" :
            echo $a."+".$b." = ".cong($a,$b);
            break;
        case "tru" :
            echo $a."-".$b." = ".tru($a,$b);
            break;
        case "nhan" :
            echo $a."*".$b." = ".nhan($a,$b);
            break;
        case "chia" :
            echo $a."/".$b." = ".chia($a,$b);
            break;
    }
 }
 tinh("cong",3,5);



$books = ["van", "su", "dia"];


///in ra
echo "<pre>";
print_r($books);
echo "</pre>";
///do dai
echo count($books);
/////////duyet mang
for($i=0;$i>count($books);$i++)
{
    echo $books[$i]."<br>";
}
////them
$books[3]="sinh";////count($books)
array_push($books,"ly");
$books[]="anh";
////sua
$books[0]="van hoc";
$books[1]="su hoc";
///////xoa
unset($books[3]);
/////xoa xong duyet mang se bi loi? nen phai dung isset de kiem tra co ton tai hay khong 
///xoa dau
array_shift($books);
///xoa cuoi
array_pop($books);
//////













?>