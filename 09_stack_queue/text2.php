<?php
class Queue
{
    protected $queue;
    protected $limit;

    public function __construct($limit)
    {
        $this->limit=$limit;
        $this->queue=[];
    }
    public function enqueue($item)
    {
        if(count($this->queue)<$this->limit)
        {
            array_push($this->queue,$item);
        }
    }
    public function dequeue()
    {
        if(count($this->queue)!=0)
        {
            array_shift($this->queue);
        }
    }
    public function isEmpty()
    {
        if(count($this->queue)==0)
        {
            return true;
        }else
        {
            return false;
        }
    }
    public function isFull()
    {
        if($this->limit==count($this->queue))
        {
            return true;
        }else
        {
            return false;
        }
    }
    public function getqueue()
    {
        return $this->queue;
    }
}
$queue=new Queue(3);
var_dump($queue->isEmpty());
echo "<br>";
$queue->enqueue("van");
$queue->enqueue("su");
$queue->enqueue("dia");
echo "<pre>";
print_r($queue->getqueue());
echo "<br>";
var_dump($queue->isEmpty());
echo "<br>";
var_dump($queue->isFull());
echo "<br>";
$queue->dequeue();
echo "<pre>";
print_r($queue->getqueue());