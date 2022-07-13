<?php
/*
Chuc nang dang nhap
index.php?controller=user&action=login
Chuc nang dang ky
index.php?controller=user&action=register
Chuc nang quan ly san pham
index.php?controller=product&action=list
Chuc nang them san pham
index.php?controller=product&action=add
Chuc nang sua san pham
index.php?controller=product&action=edit
Chuc nang xoa san pham
index.php?controller=product&action=delete
/login
/register
*/
/*
Khi truy cap cac duong dan tren ta co 2 bien la controller va action
*/

//Lay gia tri tren url
$controller = $_REQUEST['controller'];
$action     = $_REQUEST['action'];

//kiem tra dieu kien voi controller
switch ($controller) {
    case 'product':
        //keo file controller
        include_once 'controllers/productController.php';

        //khoi tao doi tuong
        $objController = new productController();
        break;
    case 'user':
        //keo file controller
        include_once 'controllers/userController.php';

        //khoi tao doi tuong
        $objController = new userController();
        break;
    default:
        # code...
        break;
}

//kiem tra dieu kien voi action
switch ($action) {
    case 'list':
        //goi phuong thuc tuong ung
        $objController->list();
        break;
    case 'add':
        //goi phuong thuc tuong ung
        $objController->add();
        break;
    case 'edit':
        //goi phuong thuc tuong ung
        $objController->edit();
        break;
    case 'delete':
        //goi phuong thuc tuong ung
        $objController->delete();
        break;
    case 'login':
        //goi phuong thuc tuong ung
        $objController->login();
        break;
    case 'register':
        //goi phuong thuc tuong ung
        $objController->register();
        break;
    default:
        # code...
        break;
}
