<?php
class Stack
{
    public array $stack;
    public array $stack_2;
    public int $limit;
    public function __construct($limit)
    {
        $this->limit=$limit;
        $this->stack=[];
        $this->stack_2=[];
    }
    public function push($item)
    {
        if(count($this->stack)<$this->limit)
        {
            array_push($this->stack, $item);
        }else{
            echo "đã đầy";
        }
    }
    public function pop()
    {
        if(!empty($this->stack))
        {
            array_pop($this->stack);
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
    public function getstack_2()
    {
        return $this->stack_2;
    }
    public function reverse()
    {
        while(count($this->stack))
        {
            $a=array_pop($this->stack);
            array_push($this->stack_2,$a);
        }
    }
}
$stack_1=new Stack(5);
/////////////////////thêm ptu
$stack_1->push(1);
$stack_1->push(2);
$stack_1->push(3);
$stack_1->push(4);
$stack_1->push(5);
//////////////////xóa ptu
// $stack_1->pop();
// $stack_1->pop();
// $stack_1->pop();
///////////kiểm tra rỗng
echo $stack_1->Empty();
echo "<br>";
//////////////////lấy ptu cuối cùng;
print_r($stack_1->top()) ;
$stack_1->reverse();
echo "<br>";
print_r($stack_1->getstack());
echo "<br>";
print_r($stack_1->getstack_2());