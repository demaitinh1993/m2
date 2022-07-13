<?php
include_once "Models/Product.php";
include_once "Services/productManager.php";

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager->add(new product("laptop"));
$productManager->add(new product("Mobile"));
$productManager->add(new product("toro"));

$products= $productManager->getProducts();
foreach($products as $product){
    echo $product->getName()."<br>";
}

class User
{
    protected string $name;
    protected string $email;
    public int $role;

    public function setName($name_1)
    {
        $this->name=$name_1;
    }
    public function setEmail($email_1)
    {
        $this->email=$email_1;
    }
    public function setRole($role_1)
    {
        $this->role=$role_1;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getName()
    {
        return $this->email;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function getInfo()
    {
        return $this->name."<br>".$this->email;
    }
    public function isAdmin()
    {
        if($this->role==1){
            return "Admin";
        }else if($this->role==2){
            return "nguoi binh thuong";
        }
    }
}
$user_1=new User;
$user_1->setName("cuong");
$user_1->setEmail("cuong@gmail.com");
$user_1->setRole(2);
echo $user_1->getInfo();
echo "<br>";
echo $user_1->isAdmin();
echo "<br>";





echo "-----"."<br>";
$em=new EmployeeManager;
$em->add(new Employee('phan','cường','04/10/2003','quảng trị','deginer'));
$em->add(new Employee('lê','phi','06/6/2002','quảng trị','doctor'));
$em->add(new Employee('nguyễn','thắng','01/12/2002','quảng trị','dancer'));
////////hiển thị danh sách nhân sự
// $employee1= $em::getEmployee1();
// foreach($employee1 as $key=> $b){
//     echo $key." ";
//     echo $b->getFirst()." ";
//     echo $b->getName()."<br>";
// }
echo "------"."<br>";
////hiển thị thông tin chi tiết của nhân sự
$employee= $em->getEmployee();
foreach($employee as $key=> $a){
    echo $key."<br>";
    echo $a->getFirst()." ";
    echo $a->getName()."<br>";
    echo $a->getBirthday()."<br>";
    echo $a->getAddress()."<br>";
    echo $a->getJob()."<br>";
    echo "-----"."<br>";
}



?>