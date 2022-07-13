<?php
class Mylist
{
    public function __construct($size)
    {
        $this->elements=[];
        $this->size=$size;
    }
    public int $size;
    public array $elements;

    function insert($index,$obj)
    {
        if(array_key_exists($index, $this->elements)){
            $this->elements[$index]=$obj;
        }else{
            return "không tồn tại phần tử";
        }
    }
    function add($obj)
    {
        array_push($this->elements,$obj);
    }
    function remove($index)
    {
        if(array_key_exists($index,$this->elements)){
            unset($this->elements[$index]);
        }else{
            return "không tồn tại phần tử";
        }
    }
    function get($index)
    {
        if(array_key_exists($index,$this->elements)&& $index<$this->size){
            return $this->elements[$index];
        }else{
            return "không tồn tại phần tử";
        }
    }
    function clear()
    {
        $this->elements=[];
    }
    function addAll(array $arr)
    {
        $this->elements=$arr;
        return $this->elements;
    }
    function indexOf($obj)
    {
        for($i=0;$i<count($this->elements);$i++){
            if($this->elements[$i]==$obj){
                return $i;
            }
        }
    }
    function isEmpty()
    {
        if(empty($this->elements)){
            return "List rong";
        }else {
            return "List khong rong";
        }
    }
    function sort()
    {
        $array= sort($this->elements);
        return $array;
    }
    function reset()
    {
        
    }
    function size()
    {
        return count($this->elements);
    }
    function display()
    {
        return $this->elements;
    }
}
$arr=new Mylist(5);
$arr->add("toàn");
$arr->add("phi");
$arr->add("cường");
$arr->add("tâm");
// $arr->sort();
print_r($arr->display());
echo "<br>";
echo $arr->indexOf("cường");
echo "<br>";
echo $arr->isEmpty();
echo "<br>";
$arr->remove(2);
print_r($arr->display());
echo "<br>";
echo $arr->get(1);
echo "<br>";
echo $arr->size();
echo "<br>";
print_r($arr->addAll(['linh','viet','vinh','thuan']));
?>