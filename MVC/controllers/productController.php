<?php
include_once 'models/productModel.php';
class productController {
    public function list(){
        echo __METHOD__;
        include_once 'views/products/list.php';
    }

    public function add(){
        echo __METHOD__;
        include_once 'views/products/add.php';
    }

    public function edit(){
        echo __METHOD__;
        include_once 'views/products/edit.php';
    }

    public function delete(){
        echo __METHOD__;
        include_once 'views/products/delete.php';
    }
}