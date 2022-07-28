<?php
include "./MVC_training/Model/admin/CategoryModel.php";
class  Categorycontrollers
{
    function Categoryindex()
    {
        $obj = new Categorymodel();
        $object = $obj->getAll();
        include "./MVC_training/Views/admin/categories/index.php";
    }
    
}

?>