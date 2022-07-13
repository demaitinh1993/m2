<?php
class Point
{
    public int|float $x;
    public int|float $y;
    // public function __construct($x,$y)
    // {
    //     $this->x=$x;
    //     $this->y=$y;
    // }
    public function setX($x)
    {
        $this->x=$x;
    }
    public function setY($y)
    {
        $this->y=$y;
    }
    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setXY($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }
    public function getXY()
    {
        return [$this->x,$this->y];
    }
    public function toString()
    {
        return $this->x." ".$this->y;
    }
}
class MoveablePoint extends Point
{
    public int|float $xSpeed;
    public int|float $ySpeed;
    // public function __construct($x,$y,$z)
    // {
    //     $this->x=$x;
    //     $this->y=$y;
    //     $this->z=$z;
    // }
    public function getZ()
    {
        return $this->z;
    }
    public function setZ($z)
    {
        $this->z=$z;
    }
    public function setXYZ($x,$y,$z)
    {
        $this->x=$x;
        $this->y=$y;
        $this->z=$z;
    }
    public function getXYZ()
    {
        return [$this->x,$this->y,$this->z];
    }
    public function toString()
    {
        return $this->x." ".$this->y." ".$this->z;
    }
    
}
$point=new Point();
$point->setXY(3,4);
echo $point->toString();
echo "<br>";

$point_1=new MoveablePoint;
$point_1->setXYZ(4,5,6);
echo $point_1->toString();
?>