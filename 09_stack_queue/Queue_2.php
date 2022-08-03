<?php

class Node
{
    public $name=null;
    public $code=null;
    // public $next=null;
    public function __construct($name,$code)
    {
        $this->name=$name;
        $this->code=$code;
    }
}
class Queue
{
    private $listData;
    public function __construct()
    {
        $this->listData = [];
        $this->examineds = [];
    }
    public function isEmpty()
    {
        if(empty($this->listData))
        {
            return "rỗng";
        }else{
            return "không rỗng";
        }
    }
    public function enqueue($name=null,$code=null)
    {
        $node=new Node($name,$code);
        array_push($this->listData,$node);
    }
    public function dequeue()
    {
        $result = array_shift($this->listData);
        array_push($this->examineds, $result);
    }
    function sort()
    {
        function my_sort($item_1, $item_2)
        {
            if ($item_1->code == $item_2->code) return 0;
            return ($item_1->code > $item_2->code) ? 1 : -1;
        }
        //dùng để sặp xếp một mảng dựa vào hàm so sánh do người dùng định nghĩa
        // hàm so sánh.
        usort($this->listData, "my_sort");
    }
    public function toString()
    {
        return $this->listData;
    }
    public function getexam()
    {
        return $this->examineds;
    }
}

$queue=new Queue;
$queue->enqueue("Smith",5);
$queue->enqueue("John",4);
$queue->enqueue("Fehrenbach",6);
$queue->enqueue("Behrenbach",6);
$queue->enqueue("Brown",1);
$queue->enqueue("Ingram",1);
echo "<pre>";
print_r($queue->toString());
echo "<pre>";
$queue->sort();
print_r($queue->toString());
$queue->dequeue()."<br>"; 
$queue->dequeue()."<br>";
echo "<pre>";
print_r($queue->getexam());
print_r($queue->toString());


