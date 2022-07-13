<?php
interface Resizeable
{
    function resize();
    
}

class Circle implements Resizeable
{
    function __construct($radius)
    {
        $this->radius=$radius;
    }
    function resize(){
        return $this->getArea()+floor(rand(1,100));
    }
    function resize_1(){
        return $this->getPreimeter()+floor(rand(1,100));
    }
    function getArea()
    {
        return $this->radius*$this->radius*M_PI;
    }
    function getPreimeter()
    {
        return 2*M_PI*$this->radius;
    }

}
class Rectangle implements Resizeable
{
    function __construct($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }
    function resize(){
        return $this->getArea()+floor(rand(1,100));
    }
    function resize_1(){
        return $this->getPreimeter()+floor(rand(1,100));
    }
    function getArea()
    {
        return $this->x*$this->y;
    }
    function getPreimeter()
    {
        return 2*($this->x+$this->y);
    }

}
class Square implements Resizeable
{
    function __construct($x)
    {
        $this->x=$x;
    }
    function resize(){
        return $this->getArea()+floor(rand(1,100));
    }
    function resize_1(){
        return $this->getPreimeter()+floor(rand(1,100));
    }
    function getArea()
    {
        return $this->x*$this->x;
    }
    function getPreimeter()
    {
        return 4*$this->x;
    }

}
$hinh[0]= new Square(2);
$hinh[1]= new Rectangle(2,4);
$hinh[2]= new Circle(2);
foreach ($hinh as $hinh_1)
{   
    echo "dien tich ban dau:";
    echo $hinh_1->getArea();
    echo "<br>";
    echo "dien tich sau khi tang: ";
    echo $hinh_1->resize();
    echo "<br>";
    echo "chu vi ban dau: ";
    echo $hinh_1->getPreimeter();
    echo "<br>";
    echo "chu vi sau khi tang:";
    echo $hinh_1->resize_1();
    echo "<br>";
}



?>