<?php

class Stack
{
    public $stack;
    public $left;
    public function __construct()
    {
        $this->stack=[];
        $this->left=[];
    }
    public function check($str)
    {
        $str=str_split($str);
        for($i=0;$i<count($str);$i++)
        {
            if($str[$i]=='(')
                {
                    array_unshift($this->stack,$str[$i]);
                }
            if($str[$i]==")")
                {
                    if(empty($this->stack))
                    {
                        return false;
                    }else{
                        array_push($this->left,$str[$i]);
                    }
                }
        }
        if(count($this->stack)==count($this->left))
        {  
            return true;
        }else{
            return false;
        }
    }
}
$checkk= new Stack;
var_dump($checkk->check("(sz)f((gvetgv)")) ;