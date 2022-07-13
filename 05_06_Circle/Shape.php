<?php
class Shape
{
    public int $side1;
    public int $side2;
    public int $side3;

    // public function __construct($side1,$side2,$side3)
   
    // {
    //     $this->side1=$side1;
    //     $this->side2=$side2;
    //     $this->side3=$side3;
    // }
    public function getSide1()
    {
        return $this->side1;
    }
    public function getSide2()
    {
        return $this->side2;
    }
    public function getSide3()
    {
        return $this->side3;
    }
    public function setSide123($side1,$side2,$side3)
    {
        $this->side1=$side1;
        $this->side2=$side2;
        $this->side3=$side3;

    }
    
    public function getPerimeter()
    {
        $cv= $this->side1 + $this->side2 + $this->side3;
         return $cv;
    }
    public function getArea()
    {
        $a=$this->side1+$this->side2+$this->side3;
        $d=$this->side1+$this->side2-$this->side3;
        $b=$this->side2+$this->side3-$this->side1;
        $c=$this->side1+$this->side3-$this->side2;
        $dt=(sqrt($a*$b*$c*$d))/4;
        return $dt;
    }
    public function toString()
    {
        return $this->side1." ".$this->side2." ".$this->side3." ".$this->getPerimeter()." ".$this->getArea();
    }
}
$Triangle=new Shape;
$Triangle->setSide123(3,4,5);
// echo $Triangle->getSide1();
echo $Triangle->getPerimeter();
echo "<br>";
echo $Triangle->getArea();
echo "<br>";
echo $Triangle->toString();

