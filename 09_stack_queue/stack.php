<?php
class Stack
{
    public array $stack;
    public int $limit;
    public function __construct($limit)
    {
        $this->limit=$limit;
        $this->stack=[];
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
        // if(!empty($this->stack))
        // {
            return end($this->stack);
        // }
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
}
$stack_1=new Stack(5);
/////////////////////thêm ptu
$stack_1->push(1);
$stack_1->push(2);
$stack_1->push(3);
$stack_1->push(4);
$stack_1->push(5);
//////////////////xóa ptu
$stack_1->pop();
$stack_1->pop();
// echo $stack_1->Empty();
$stack_1->pop();
// $stack_1->pop();
// $stack_1->pop();
// $stack_1->pop();
///////////kiểm tra rỗng
echo $stack_1->Empty();
echo "<br>";
//////////////////lấy ptu cuối cùng;
print_r($stack_1->top()) ;
// print_r($stack_1->getstack());


?>