<?php
class Node
{
    public $value=null;
    public $next=null;
}
class Queue
{
    public $front;
    public $back;
    public function isEmpty()
    {
        if(empty($this->front))
        {
            return "rỗng";
        }else{
            return "không rỗng";
        }
        // return is_null($this->front);
    }
    public function enqueue($value)
    {
        $oldBack=$this->back;
        $this->back=new Node();
        $this->back->value=$value;
        if(empty($this->front))
        {
            $this->front=$this->back;
        }else{
            $oldBack->next=$this->back;
        }
    }
    public function dequeue()
    {
        if(empty($this->front))
        {
            return null;
        }
        $removedValue=$this->front->value;
        $this->front= $this->front->next;
        return $removedValue;
    }
}
$queue=new Queue;
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->dequeue();
$queue->dequeue();
echo $queue->isEmpty();
echo "<br>";
$queue->enqueue(4);
$queue->enqueue(5);
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
echo $queue->isEmpty();
echo "<br>";
$queue->enqueue(4);
$queue->enqueue(5);
$queue->enqueue(6);
while(!empty($queue->front)){
    echo $queue->dequeue()." ";
}
?>