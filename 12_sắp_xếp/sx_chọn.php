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

$string = " CodeGym_Viet_Nam ";
$trim_string = trim($string, " ");
$index = stripos($trim_string, "_");
$sub_string = substr($trim_string, 0, $index);
echo "$sub_string";
echo "<br>";
echo "$trim_string";
echo "<br>";
echo "$index";

$subject = "CodeGym@gmail.com";
$pattern = '/^\w+@\w+(\.\w+){1,3}$/';
if (preg_match($pattern, $subject, $matches)) {
    echo 'Khớp';
} else {
    echo 'Không khớp';
};

?>