<?php
class person
{
    public static $name = "phi";
    public $age=20;

    public static function getName()
    {
        return self::$name;
    }
}
class hurman extends person
{
    // public static function getName()
    // {
    //     return self::$name;
    // }
    public static function getname()
    {
        return 1;
    }
}
define('a',5);
echo a;

// echo person ::$name;
// echo person :: getName();
$huy=new person;
// echo $huy->getName();
echo $huy::$name;
echo $huy->getName();


// $trung=new hurman;
// echo $trung->getname();
?>