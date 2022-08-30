<?php
// $books =["van", "su", "dia"];
// echo "<pre>";
// print_r($books);
// echo "</pre>";
// $temp=$books[0];
// $books[0]=$books[1];
// $books[1]=$temp;
// echo "<pre>";
// print_r($books);
// echo "</pre>";

// echo "----------------------------";
// $arr=[6,5,34,22,40,11,18,23,44];
// echo "<pre>";
// print_r($arr);
// echo "</pre>";
// $n=count($arr)-1;
// for($i=0;$i<count($arr);$i++)
// {
//     for($j=$n;$j>$i;$j--)
//     {
//         if($arr[$j]<$arr[$i])
//         {
//             $temp=$arr[$i];
//             $arr[$i]=$arr[$j];
//             $arr[$j]=$temp;
//         }
//     }
// }
// echo "<pre>";
// print_r($arr);
// echo "</pre>";


// echo "----------------------------";
// $arr=[6,5,34,22,40,11,18,23,44];
// echo "<pre>";
// print_r($arr);
// echo "</pre>";
// for($i=1;$i<count($arr);$i++)
// {
//     $j=$i-1;
//     $temp=$arr[$i];
//     while($temp<$arr[$j] && $j>0)
//     {
//         $arr[$j+1]=$arr[$j];
//         $j--;
//     }
//     $arr[$j+1]=$temp;
// }
// echo "<pre>";
// print_r($arr);
// echo "</pre>";


echo "----------------------------";
$arr=[6,5,34,22,40,11,18,23,44];
echo "<pre>";
print_r($arr);
echo "</pre>";
for($i=0;$i<count($arr);$i++)
{
    $min=$i;
    for($j=$i+1;$j<count($arr);$j++)
    {
        if($arr[$j]<$arr[$min])
        {
            $min=$j;
        }
    }
    $temp=$arr[$i];
    $arr[$i]=$arr[$min];
    $arr[$min]=$temp;
}
function sort_ascending( $arr,$element )
{
    for($i=0;$i<(int)(count($arr)/2);$i++)
    {
        $temp=$arr[$i];
        $arr[$i]=$arr[count($arr)-1-$i];
        $arr[count($arr)-1-$i]=$temp;

    }
    $element=[];
    $element=$arr;

    return $element;
}
$arr=[1,3,5,7,9];
$element=[];
echo "<pre>";
print_r(sort_ascending($arr,$element));



function insert_first_position( $arr, $element )
{
array_unshift($arr,$element);
return $arr;
}
$arr=[1,2,3,4];
$element=6;
echo "<pre>";
print_r(insert_first_position( $arr, $element ));
