<?php

$a=[1,3,2,4,5,6,9];
print_r($a);

for($i=0;$i<count($a);$i++)
{  
    for($j=$i-1;$j>=0;$j--)
    {
        if($a[$i]>$a[$j])
        {
            for($k=$j+2;$k<=$i;$k++)
            {
                $a[$k]=$a[$k-1];
            }
            $a[$j+1]=$a[$i];
        }
    }
}
print_r($a);
?>