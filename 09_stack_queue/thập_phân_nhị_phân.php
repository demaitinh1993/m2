<?php
class Stack
{
    public array $stack;
    public function __construct()
    {
        $this->stack=[];
    }
    public function push($item)
    {
            array_push($this->stack, $item);   
    }
    public function pop()
    {
        if(!empty($this->stack))
        {
           return array_pop($this->stack);
        }
    }
    public function top()
    {
            return end($this->stack);   
    }
    public function Empty()
    {
        if(empty($this->stack))
        {
            return "rỗng";
        }else{
            return "không rỗng";
        }
    }
    public function getstack()
    {
        return $this->stack;
    }
    public function Decimal_Binary($number)
    {
        while($number!=0)
        {
            $Number=$number%2;
            $this->push($Number);
            $number=floor($number/2);
        }
    }
    public function Binary_Decimal($str)
    {
        $array=str_split($str);
        $array_1=array_reverse($array);
        $sum=0;
        for($i=0;$i<count($array_1);$i++)
        {
            $sum+=$array_1[$i]*pow(2,$i);
        }
        return $sum;
    }
}
$stack=new Stack;
$stack->Decimal_Binary(40);
while(!empty($stack->stack))
{
    echo $stack->pop();
}
echo "<br>";
// print_r($stack->getstack());
// echo $stack->pop();
// echo $stack->pop();
// echo $stack->pop();
// echo $stack->pop();
// echo $stack->pop();
// echo $stack->pop();
// echo $stack->pop();

// $str="101000";
// echo "<br>";
// // $array= explode("0",$str);
// $array= str_split($str);
// print_r($array);

print_r($stack->Binary_Decimal(1010000));

?>