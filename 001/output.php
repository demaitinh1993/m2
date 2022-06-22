<?php
$name = 'nguyen van a';
$age = 20;
$status = true;
$book =['toan','ly','hoa'];


///echo
    ///dung voi kieu du lieu string
    echo $name;
    echo '<br>';
    ///dung voi kieu du lieu la so
    echo $age;
    echo '<br>';
///print_r
    //dung voi kieu du lieu string hoac so
        print_r ($age);

    ///dung voi kieu du lieu la mang hoac doi tuong
    echo '<pre>';
    print_r($book);
    echo '</pre>';

///var_dum
    //dung voi tat ca kieu du lieu
    var_dump($status);
