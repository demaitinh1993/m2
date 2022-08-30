<?php
//đưa model để các lớp sau sử dụng
include_once 'db.php';
include_once 'helper.php';

//index.php?controller=Product&page=create
//Controller: Product + Page: create
//index.php?controller=User&page=create

$controller = ( isset($_REQUEST['controller']) ) ? $_REQUEST['controller'] : 'listController';
$action       = ( isset($_REQUEST['action']) ) ? $_REQUEST['action'] : 'index';

//gọi controller tùy thuộc vào url
switch ($controller) {
    case 'listController':
        include 'controller/listController.php';
        $objController = new ListController();
        break;
    // case 'User':
    //     include 'controllers/UserController.php';
    //     $objController = new UserController();
    //     break;
    default:
        # code...
        break;
}

//gọi action tùy thuộc vào url
// $objController = new ListController;
switch ($action) {
    case 'index':
        // vào trang danh sách
        $objController->index();
        break;
    case 'add':
        // vào trang them moi
        $objController->add();
        break;
    case 'edit':
        // vào trang chinh sua
        $objController->edit();
        break;
    case 'delete':
        // vào trang chi tiết
        $objController->delete();
        break;
    case 'search':
        // vào trang chi tiết
        $objController->search();
        break;
    default:
        # code...
        break;
}