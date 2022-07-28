<?php
session_start();
$controllers = (isset($_REQUEST['controllers'])) ? $controllers = $_REQUEST['controllers'] : [];
$action = (isset($_REQUEST['action'])) ? $action = $_REQUEST['action'] : [];
switch ($controllers) {

   case 'category':
      include './Controllers/admin/Catagorycontrollers.php';
      $obj = new Categorycontrollers();
      break;
   default:
      include './Controllers/admin/AdminController.php';
      $obj = new AdminController();
      break;
}

switch ($action) {
   case 'product':
      $obj->ProductManagement();
      break;
   case 'delete':
      $obj->delete();
      break;
   case 'edit':
      $obj->edit();
      break;
   case 'add':
      $obj->add();
      break;
   case 'personal':
      $obj->profile();
      break;
   case 'update':
      $obj->update();
      break;
   case 'index':
      $obj->index();   
      break;
   case 'search':
      $obj->search();
      break;
   case 'customer':
      $obj->customerindex();     
      break;
   case 'addcustomer':
      $obj->addcustomer();
      break;
   case 'editcustomer':
      $obj->editcustomer();
      break;
   case 'searchcustomer':
      $obj->searchcustomer();
      break;
   case 'deletecustomer':
      $obj->deletecustomer();
      break;
   case 'catagoryproduct':
      $obj->catagoryindex();
      break;
   case 'addcatagory':
      $obj->addcatagory();
      break;
   case 'deletecatagory':
      $obj->deletecatagory();
      break;
   case 'editcatagory':
      $obj->editcatagory();
      break;
   case 'searchcatagory':
      $obj->searchcatagory();
      break;
      // case 'login':
   default:
      $obj->logincontrollers();
      break;
}