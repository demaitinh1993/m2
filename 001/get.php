<?php


///kiem tra ng dung gui dlieu di
if(isset($_REQUEST['submit'])){
     //in ra du lieu de gui
    //  echo '<pre>';
    //  print_r($_REQUEST);
    //  echo '</pre>';
 
     $usename= $_REQUEST['usename'];
     $password= $_REQUEST['password'];
 
 
     ///in ra bien
     echo $usename;
     echo '<br>';
     echo $password;
}


?>





<form action="" method="get">
    ten dang nhap : <br>
    <input type="text" name="usename" id=""><br>
    mat khau : <br>
    <input type="text" name="password" id=""><br>
    <input type ="submit" name ="submit" value = "login">

</form>