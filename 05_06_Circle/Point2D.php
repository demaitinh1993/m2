<?php
class Point2D
{
    public int|float $x;
    public int|float $y;
    
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
class Point3D extends Point2D
{
    public int|float $z;
    
    public function setZ($z)
    {
        $this->z=$z;
    }
    public function getZ()
    {
        return $this->z;
    }
    public function setXYZ($x,$y,$z)
    {
        $this->x=$x;
        $this->y=$y;
        $this->z=$z;
    }
    public function getXYZ(){
        return [$this->x, $this->y, $this->z];
    }
    public function toString()
    {
        return $this->x." ".$this->y." ".$this->z;
    }
}
$point=new Point2D;
$point->setXY(3,4);
print_r($point->getXY());
print_r($point->toString());
echo "<br>";
echo "---------------------------------------";
echo "<br>";
$point_1=new Point3D;
$point_1->setZ(5);
$point_1->setX(3);
$point_1->setY(4);
$point_1->setXYZ(6,7,8);
print_r($point_1->getXYZ());
echo $point_1->toString();
?>