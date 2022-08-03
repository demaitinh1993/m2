<?php
class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit)
    {
        $this->limit=$limit;
        $this->stack=[];
    }
    public function push($item)
    {
        if(count($this->stack)<$this->limit)
        {
            array_unshift($this->stack,$item);
        }
    }
    public function pop()
    {
        if(!empty($this->stack))
        {
            array_shift($this->stack);
        }
    }
    public function isEmpty()
    {
        if(count($this->stack)==0)
        {
            return true;
        }else
        {
            return false;
        }
    }
    public function peek()
    {
        if(!$this->isEmpty())
        {
            return current($this->stack);
        }
    }
    public function isFull()
    {
        if(count($this->stack)==$this->limit)
        {
            return "đầy";
        }else
        {
            return "chưa đầy";
        }
    }
    public function getstack()
    {
        return $this->stack;
    }
}
$stack=new Stack(3);
$stack->push("toan");
$stack->push("ly");
$stack->push("hoa");
echo "<pre>";
print_r($stack->getstack());
echo $stack->peek();
echo "<br>";
var_dump($stack->isEmpty());
echo "<br>";
echo $stack->isFull();
echo "<br>";
$stack->pop();
echo "<pre>";
print_r($stack->getstack());
echo "<br>";
echo $stack->isFull();