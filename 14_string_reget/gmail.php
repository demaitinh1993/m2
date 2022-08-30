<?php

   
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <td>Nhập email vào ô dưới đây:</td><br>
        <textarea name="email" placeholder="Email"></textarea><br>
        <input type="submit">
    </form>
    
</body>

</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email=$_POST['email'];
    
 class  Exception2 extends Exception
 {
     public function Message()
     {
         return $this->getMessage();
     }
 }
 class  Exception3 extends Exception
 {
     public function Message()
     {
         return $this->getMessage();
     }
 }
 $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
 $pattern_1='/^@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
 $pattern_2='/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.)$/';
 $pattern_3='/^@[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
 if(preg_match($pattern,$email))
 {
     echo "email: ".$email." đúng định dạng";
 }else{
     try{
         if(preg_match($pattern_1,$email)){
             throw new Exception("Chưa có tên email");
         }
         if(preg_match($pattern_2,$email)){
             throw new Exception("Chưa có tên miền");
         }
         if(preg_match($pattern_3,$email)){
             throw new Exception("Tên email không đúng định dạng");
         }
 
     } catch (Exception $e){
         echo $e->getMessage();
     }catch (Exception $d){
         echo $e->getMessage();
     }catch (Exception $s){
         echo $e->getMessage();
     }finally {
         echo "Định dạng email không hợp lệ";
     }
       
     
 }
 
 }
?>