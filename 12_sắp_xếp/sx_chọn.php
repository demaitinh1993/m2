<?php
function selectionSort($arr)
{
    for($i=0;$i<count($arr)-1;$i++)
    {
        $max=$i;
        for($j=$i+1;$j<count($arr);$j++)
        {
            if($arr[$j]>$arr[$max])
            {
                $max=$j;
            }
        }
        $a=$arr[$max];
        $arr[$max]=$arr[$i];
        $arr[$i]=$a;

    }
    return $arr;
}
$arr=[1,5,8,4,2,6];
echo "<pre>";
print_r(selectionSort($arr));


?>