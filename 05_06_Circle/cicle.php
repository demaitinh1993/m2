<?php
class Circle
{
    public int $radius;
    public string $color;

    public function getRadius()
    {
        return $this->radius;
    }
    public function setRadius($radius)
    {
        $this->radius=$radius;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color=$color;
    }
    public function toString()
    {
        echo "bán kính: ".$this->radius."<br>"."màu sắc: ".$this->color;
    }

}

class Cylinder extends Circle
{
    public int $hight;
    public function getHight()
    {
        return $this->hight;
    }
    public function setHight($hight)
    {
        $this->hight=$hight;
    }
    public function toString()
    {
        echo "bán kính: ".$this->radius."<br>"."chiều cao: ".$this->hight."<br>"."màu sắc: ".$this->color;
    }
}

$cicle=new Circle;
$cicle->setRadius(5);
$cicle->setColor("red");
$cicle->toString();
echo "<br>";
echo "-------"."<br>";
$cicle_1=new Cylinder;
$cicle_1->setRadius(10);
$cicle_1->setColor("blue");
$cicle_1->setHight(5);
$cicle_1->toString();
?>