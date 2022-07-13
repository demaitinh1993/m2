<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class fan {
    private int $SLOW = 1;
    private int $MEDIUM = 2;
    private int $FAST = 3;
    private int $speed;
    private $on = false;
    private int $radius = 5;
    private string $color = "blue";
    function getspeed()
    {
       
        return $this->speed;
    }
    function geton()
    {
        return $this->on;
    }
    function getradius()
    {
        return $this->radius;
    }
    function getcolor()
    {
        return $this->color;
    }
    function setspeed($newspeed)
    {
        $this->speed = $newspeed;
    }
    function seton($newon)
    {
        $this->on = $newon;
    }
    function setradius($newradius)
    {
        $this->radius = $newradius;
    }
    function setcolor($newcolor)
    {
        $this->color = $newcolor;
    }
    function toString()
    {
        if($this->on == true){
            if($this->speed==3){
               $a= "nhanh";
            }else if($this->speed==2){
                $a= "vừa";
            }else if($this->speed==1){
                $a= "chậm";
            }
            return "tốc độ: ".$a."<br>"."màu sắc: ".$this->color."<br>"."bán kính cánh quạt: ".$this->radius."<br>"."trạng thái: "."fan is on";
        }else{
            return "màu sắc: ".$this->color."<br>"."bán kính cánh quạt: ".$this->radius."<br>"."trạng thái: "."fan is off";
        }
    }

}
$fan_1=new fan();
// echo($fan_1->getspeed()."<br>");
// echo($fan_1->getradius());
// $fan_1->toString();
$fan_1->setspeed(2);

$fan_1->seton(true);
echo ($fan_1->toString());



?>
</body>
</html>
