<?php
$arr=['a','b','c','d','e','f','g','h','i','j','k','l','m'];
$find = "j";
for($i=0;$i<count($arr);$i++)
{
    if($arr[$i]==$find)
    {
        echo $find." ở vị trí ".$i;
    }
}
