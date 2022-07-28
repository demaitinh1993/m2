<?php
include './Model/admin/AdminModel.php';
include './Views/admin/login.php';
class AdminController
{
   function logincontrollers()
   {

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $email = $_POST['email'];
         $password = $_POST['password'];
         $obj = new LoginAdmin();
         $check = $obj->login($email,$password);
        //  print_r($obj);
        //  die();
         $_SESSION['admin']=$check;       
        //  echo '<pre>';
        //  print_r(  $_SESSION['admin']);                 
        //  die();        
         if($check){ 
            header('location:MVC_training/web/layout/index.php');
         }
   }
    
}
}