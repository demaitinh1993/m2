<?php
class Node
{
    public string $data;
    public  $next=null;

    public function __construct($data)
    {
        $this->data=$data;
    }
}
class LinkerList
{
    public $head=null;
    public $tail=null;

    public function addFirst($data){
        $newNode= new Node($data);
        $newNode->next=$this->head;
        $this->head=$newNode;
        if(!$this->tail){
            $this->tail=$newNode;
        }
    }
    public function addLast($data){
        $newNode=new Node($data);
        if(!$this->head)
        {
            $this->addFirst($data);
        }else{
            $this->tail->next=$newNode;
            $this->tail=$newNode;
        }
    }
    public function removeFirst(){
        if($this->head!==null){
            if($this->head->next!==null){
                $this->head=$this->head->next;
            }
        }
    }
    public function removeLast(){
        if($this->head!==null){
            $currentNode=$this->head;
            if($currentNode->next===null){
                $this->head=null;
            }else{
                $pre=null;
                while($currentNode->next!==null){
                $pre=$currentNode;
                $currentNode=$currentNode->next;
                }
                $pre->next=null;
            }
        }
    }
    public function getFirst(){
        $currentNode = $this->head;
        $key=0;
        while($currentNode!=null)
        {
            if($key==0)
            {
                return $currentNode->data;
            }
            $currentNode=$currentNode->next;
            $key++;
        }
    }
    
    public function getLast(){
        $currentNode = $this->head;
        while ($currentNode !== null) {
            if($currentNode->next==null){
                return $currentNode;
            }
            $currentNode = $currentNode->next;
        }
    }
    public function getList(){
        $currentNode = $this->head;
        while ($currentNode !== null) {
            echo $currentNode->data."<br>"; 
            $currentNode = $currentNode->next;
        }
    }

}
$list= new LinkerList;
$list->addFirst("cuong");
$list->addFirst("cuong1");
$list->addFirst("cuong2");
$list->addLast("cuong4");
$list->addLast("cuong5");
$list->getList();
echo "<br>";
print_r($list->getLast()) ;
echo "<br>";
$list->removeFirst();
$list->getList();
echo "<br>";
// $list->getList();
$list->removeLast();
echo "<br>";
$list->getList();
echo "<br>";
print_r($list->getFirst()) ;


?>
