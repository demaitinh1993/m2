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
    public $count=0;
    public function addFirst($data){
        $newNode= new Node($data);
        $newNode->next=$this->head;
        $this->head=$newNode;
        if(!$this->tail){
            $this->tail=$newNode;
        }
        $this->count++;
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
        $this->count++;

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
     //xóa 1 node dựa vào key (nhập vào giá trị node)
     public function deleteNode($key)
     {
         $current = $this->head;
         $previous = $this->head;
 
         while ($current->data != $key) {
             if ($current->next == NULL)
                 return NULL;
             else {
                 $previous = $current;
                 $current = $current->next;
             }
         }
 
         if ($current == $this->head) {
             if ($this->count == 1) {
                 $this->tail = $this->head;
             }
             $this->head = $this->head->next;
         } else {
             if ($this->tail == $current) {
                 $this->tail = $previous;
             }
             $previous->next = $current->next;
         }
         $this->count--;
     }
     /////trả về tổng số node
     public function totalNodes()
    {
        return $this->count;
    }
    public function emptyList()
    {
        $this->head = NULL;

    }
    //////////chèn 1 dữ liệu data vào vị trí thứ key
    public function insert($data, $key)
    {
        if ($key == 0) {
            $this->addFirst($data);
        } else {
            $link = new Node($data);
            $current = $this->head;
            $previous = $this->head;

            for ($i = 0; $i < $key; $i++) {
                $previous = $current;
                $current = $current->next;
            }
            $link->next = $current;
            $previous->next = $link;
            $this->count++;
        }
    }
    public function find($key)
    {
        $current = $this->head;
        while ($current->data != $key) {
            if ($current->next == NULL)
                return null;
            else
                $current = $current->next;
        }
        return $current;
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
// // $list->getList();
$list->removeLast();
echo "<br>";
$list->getList();
// // echo "<br>";
// // print_r($list->getFirst()) ;
echo "<br>";
echo($list->totalNodes());
echo "<br>";
$list->deleteNode('cuong');
$list->getList();
echo "<br>";
$list->insert("cuong", 1);
$list->getList();

?>
