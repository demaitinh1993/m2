<?php
function count_seach(int $number,array $arr)
{
    $counts=0;
    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i]==$number)
        {
            $counts++;
        }
    }
    return $counts;
}
$number1=2;
$arr=[1,2,4,2,3,2,2,6];
echo count_seach($number1,$arr);
echo "<br>";
// echo "<pre>";
// $arr=[1,2,4,2,3,2,2,6];
// echo "<pre>";
// print_r($arr);
// echo "<br>";
// echo "<pre>";
// arsort($arr);
// echo "<pre>";
// print_r($arr);
$taxRates = [
    'NC' => 8.75,
    'CA' => 8.25,
    'NY' => 8.875
];
asort($taxRates);
echo "<pre>";
print_r($taxRates);
ksort($taxRates);
echo "<pre>";
print_r($taxRates);
arsort($taxRates);
echo "<pre>";
print_r($taxRates);
krsort($taxRates);
echo "<pre>";
print_r($taxRates);


?>