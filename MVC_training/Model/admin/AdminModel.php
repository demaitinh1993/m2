<?php

include './dp.php';

class LoginAdmin
{
  function login($email, $password)
  {
    global $connect;
    $sql = " SELECT * FROM user WHERE email = '$email' AND password = '$password'"; //truy vấn vào database
    // $query = mysqli_query($connect, $sql);
    $query = $connect->query($sql);
    $query->setFetchMode(PDO::FETCH_OBJ);
    $rows = $query->fetch();
    print_r($rows);
    die();
    if (isset($rows)) {
      return $rows;
    } else {
      return false;
    }
  }
}