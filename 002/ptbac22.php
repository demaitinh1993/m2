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
        class  Ractangle {
            public int $width;
            public int $height;
                public function __construct($width, $height){
                    $this->width = $width;
                    $this->height = $height; 
                }

                public function getArea() {
                  return  $this->width * $this->height;
                }
                public function getPrimeter(){
                  return ($this->width + $this->height)*2;
                }
                public function display(){
                    echo  $this->getArea()."<br>";
                    echo  $this->getPrimeter()."<br>";
                }
        }
        $dtich=new Ractangle(2,4);
        $dtich->width=9;
        $dtich->display();



    ?>
    <?php
        class ptbac1{
            public $number1;
            public $number2;
                public function __construct($number1, $number2){
                    $this->number1 = $number1;
                    $this->number2 = $number2;
                }
                public function root(){
                    return -$this->number2/$this->number1;
                }
                public function display(){
                    if($this->number1==0 || $this->number2==0){
                        echo "phương trình vô nghiệm";
                    }else {
                        echo "nghiệm phương trình là: ".$this->root()."<br>";
                    }
                }
        }
        $ptbac1_1=new ptbac1(0,1);
        $ptbac1_1->number1=4;
        $ptbac1_1->display();


    ?>

    <?php
        class QuadraticEquation {
            private $a;
            private $b;
            private $c;
            private $delta;
                public function __construct($a, $b, $c){
                    $this->a= $a;
                    $this->b=$b;
                    $this->c=$c;
                }
                public function getDiscriminant(){
                     $this->delta= (($this->b * $this->b)-(4*$this->a * $this->c));
                     return $this->delta;
                }
                public function getroot1(){
                    return (-$this->b - sqrt($this->getDiscriminant()))/2*$this->a;
                }
                public function getroot2(){
                    return (-$this->b + sqrt($this->getDiscriminant()))/2*$this->a;
                }
                public function display(){
                    $this->getDiscriminant();
                    if($this->delta<0){
                        echo " phương trình vô nghiệm";
                    }else if($this->delta==0){
                        echo "phương trình có 1 nghiệm kép x1=x2= ".-$this->b/2*$this->a;
                    }else {
                        echo "phương trình có 2 nghiệm x1= ".$this->getroot1() ."và x2= ".$this->getroot2();
                    }
                }

        }
        $bac2 = new QuadraticEquation(2,2,2);
        $bac2->display();


    ?>
</body>
</html>