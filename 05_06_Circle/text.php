<?php
class Parents 
{
    public function car()
    {
        echo "xe của ba mẹ";
    }
    public function house()
    {
        echo "nhà của ba mẹ";

    }
}

class Child extends Parents {
    public function car()///////ghi đè phương thức
    {
        echo "xe của con";
    }
    public function house()////////ghi dđè phương thức
    {
        echo "nhà của con";
    }
}
$chield_1 = new Child();
$chield_1->car();
echo "<br>";
$chield_1->house();




?>