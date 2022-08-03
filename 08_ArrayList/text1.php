<?php
class Arraylist
{
    public $elements = [];
    
    public function add($item)
    {
        array_push($this->elements, $item);
    }
    public function get($index)
    {
        if(count($this->elements)!=0){
            
            return $this->elements[$index];
        }else{
            return "phần tử không tồn tại trong mảng";
        }
    }
    public function size()
    {
        return count($this->elements);
    }
    public function isEmpty()
    {
        if(count($this->elements)==0){
            return true;
        }else{
            return false;
        }
    }
    public function find($item)
    {
        for($i=0;$i<count($this->elements);$i++){
            if($this->elements[$i]==$item){
                return $item."có trong mảng ở vị trí ".$i;
            }else if($this->elements[$i]!=$item && $i=count($this->elements)-1)
            {
                return $item." không có trong mảng";
            }
        }
    }
    public function removeItemByIndex($index)
    {
        if(count($this->elements)!=0){
            unset($this->elements[$index]);
        }

    }
    public function toArray()
    {
        return $this->elements;
    }
    public function addAtPos($item,$index)
    {
        // for($i=0;$i<count($this->elements);$i++){
        //     $this->elements[$index]=$item;
        //     for($j=$i;$j<count($this->elements)+1;$j++){
        //         $this->elements[$j+1]=$this->elements[$j];
        //     }
        // }
        array_splice($this->elements,$index,0,$item);
    }
}
$Element=new Arraylist;
$Element->add("phi");
$Element->add("thang");
$Element->add("tam");
$Element->add("cuong");
echo "<pre>";
print_r($Element->toArray());
$Element->addAtPos("tan",2);
echo "<pre>";
print_r($Element->toArray());
echo $Element->find("tam1");
echo "<br>";
var_dump($Element->isEmpty());
?>