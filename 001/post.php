<?php

///kiem tra ng dung gui dlieu di
if($_SERVER['REQUEST_METHOD']=="POST"){
    //in ra du lieu de gui
    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';

    $usename= $_REQUEST['usename'];
    $password= $_REQUEST['password'];


    ///in ra bien
    echo $usename;
    echo '<br>';
    echo $password;
}

?>





<form action="" method="post">
    ten dang nhap : <br>
    <input type="text" name="usename" id=""><br>
    mat khau : <br>
    <input type="text" name="password" id=""><br>
    <input type ="submit" value = "login">

</form>