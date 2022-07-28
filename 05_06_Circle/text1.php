<?php
class ConMeo implements Bird
{
    function fly(){

    }
    function sing(){

    }
}
interface Bird
{
    function fly();
    function sing();
}

interface Fish
{
    function swimming();
}
interface GiaCam extends Bird
{
    function gay();
}

class GaCon implements GiaCam,Fish
{
    function gay(){

    }
    function swimming(){
        
    }
    function fly(){
        
    }
    function sing(){
        
    }
}

abstract class HinhHoc
{
    public $name;
    public abstract function chuvi();
    public abstract function dientich();
}
class HinhChuNhat extends HinhHoc
{
    public function chuvi(){

    }
    public function dientich(){
        
    }
}



?>