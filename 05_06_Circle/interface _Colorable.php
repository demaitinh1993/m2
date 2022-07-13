<?php



interface Colorable
{
    function howToColor();
}
class Square implements Colorable
{
    function __construct($x)
    {
        $this->x=$x;
    }
    function howToColor()
    {
        return "color red";
    }
    function getArea()
    {
        return "diện tích hình vuông là: ".$this->x*$this->x;
    }
    function getPreimeter()
    {
        return 4*$this->x;
    }

}
class Rectangle 
{
    function __construct($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }
    // function resize(){
    //     return $this->getArea()+floor(rand(1,100));
    // }
    // function resize_1(){
    //     return $this->getPreimeter()+floor(rand(1,100));
    // }
    function getArea()
    {
        return "diện tích hình chử nhật là: ".$this->x*$this->y;
    }
    function getPreimeter()
    {
        return 2*($this->x+$this->y);
    }

}
$hinh[0]=new Square(3);
$hinh[1]=new Square(5);
$hinh[2]=new Rectangle(4,6);
$hinh[3]=new Rectangle(5,10);
foreach ($hinh as $hinh1)
{
    echo $hinh1->getArea();
    echo "<br>";
    if($hinh1 instanceof Square)
    {
        echo $hinh1->howToColor();
        echo "<br>";
    }
}
?>