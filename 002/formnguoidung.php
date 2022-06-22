<?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $name=$_POST['ten'];
            $email=$_POST['email'];
            $phone=$_POST['sdt'];
            $err = [];
            $error=[];
            $filename='user.json';
            ///////vử lý lỗi ở các ô nhập dữ liệu
            if(empty($name)){
                $err['name']='bạn cần nhập tên';
            }
            if(empty($phone)){
                $err['phone']='bạn cần nhập số điện thoại';
            }
            if(empty($email)){
                $err['err_email'] = "bạn cần nhập email";
            }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $err['err_email'] =  "chưa đúng định dạng";
            }
            if(empty($err)){
            function saveDataJSON($filename, $name, $email, $phone){
                    $contact=[$name, $email, $phone];//dua cac ptu vao mang
                    $data= json_encode($contact);///chuyen mang ve kdl json


                    $old_data=  file_get_contents('user.json');//lay dlieu file json ve
                    $old_data=json_decode($old_data,true);///chuyen kdl json ve mang

                ///xử lý trùng lặp dữ liệu

                    for($i=0;$i<count($old_data);$i++){
                        // for($j=0;$j<count($old_data[$i]);$j++){
                            if(in_array($contact[0],$old_data[$i])){
                                global $error;
                                    $error['name1']='tên đăng nhập đã tồn tại';
                            }
                            // if($old_data[$i][$j]==$contact[0]){
                            //     global $error;
                            //     $error['name1']='tên đăng nhập đã tồn tại';
                            // }
                        // }
                    }
                  
                if(empty($error)){

                    array_push($old_data,$contact);///them ptu vao mang
                    $old_data=json_encode($old_data);///chuyen kdl mang => json
           
                    file_put_contents('user.json',$old_data);///chuyen dlieu vao file json
                }
        }
        saveDataJSON($filename, $name, $email, $phone);///goi ham
        $old_data=  file_get_contents('user.json');///lay dlieu trong file json
        $old_data=json_decode($old_data,true);///chuyen dlieu ve mang   
        
                }

        }
    ?> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <style>
        span {
            color : red;
        }
    </style>
</head>
<body>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <form method="post">
        <ul>
            <li>Tên người dùng:<input type='test' name ='ten'></li>
                <span><?php if(isset($err['name'])){echo $err['name'];}
                if(isset($error['name1'])){echo $error['name1'];}  ?></span>
                <span><?php   ?></span>
            <li>Email:<input type='test' name ='email'></li>
            <span><?php if(isset($err['err_email'])){echo $err['err_email'];}  ?></span>
            <span><?php if(isset($err['email'])){echo $err['email'];}  ?></span>
            <li>Điện thoại:<input type='test' name ='sdt'></li>
            <span><?php if(isset($err['phone'])){echo $err['phone'];}  ?></span>
        </ul>
        <input type="submit" value='submit'>
    </form>
    <!-- in dữ liệu lấy từ json -->
    <table class="table">
        <tr>
            <td>STT</td>
            <td>name</td>
            <td>email</td>
            <td>phone</td>
        </tr>
    
    <?php if(isset($old_data)){
       
     for($i=0;$i<count($old_data);$i++){
                ?>
       <tr>
        <td><?php echo $i+1?></td>
        <td><?php echo $old_data[$i][0];?></td>
        <td><?php echo $old_data[$i][1];?></td>
        <td><?php echo $old_data[$i][2];?></td>
        <td><input class="btn btn-primary" type='button' name='edit' value='Edit' onclick="edit('+ $i + ')"></td>
        <td><input class="btn btn-danger" type='button' name='delete' value='Delete' onclick="delet('+ $i + ')"></td>
        </tr>
     <?php }} ?> 
  
   
       
    </table>
</body>
</html>