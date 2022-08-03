<?php
///khởi tạo đối tượng từ lớp SplStack từ thư viện
$obj= new SplStack;
/////dùng phương thức push để thêm ptu vao mảng
$obj->push(5);
$obj->push(4);
$obj->push(3);
//////////lấy ptu trên cùng của stack
echo $obj->top()."<br>";
//////chuyển con trỏ tới vị trí
$obj->rewind();
while($obj->valid())
{
    echo $obj->current()."<br>";
    $obj->next();
}