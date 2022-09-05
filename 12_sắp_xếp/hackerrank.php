<?php
function kangaroo($x1, $v1, $x2, $v2)
{
    $count=0;
    for($i=1;$i<1000;$i++)
    {
        if(($x1 + ($v1*$i))==($x2+($v2*$i)))
        {
            $count++;
        }
        
    }
    if($count !=0)
    {
        return "YES";
    }else
    {
        return "NO";
    }
}
echo(kangaroo(0,2,5,3));
