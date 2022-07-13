<?php
$i=$_REQUEST['id'];
$old_data =  file_get_contents('user.json'); ///lay dlieu trong file json
$old_data = json_decode($old_data); ///chuyen dlieu ve mang 
unset($old_data[$i]);
$old_data=  array_values($old_data);
$data = json_encode($old_data);
file_put_contents('user.json', $data);

////thông báo delete thành công
$new_data =  file_get_contents('tb.json'); ///lay dlieu trong file json
$new_data = json_decode($new_data); ///chuyen dlieu ve mang 
$err_susses="Delete success";
// $susses=[$err_susses];
array_push($new_data, $err_susses); ///them ptu vao mang
$new_data = json_encode($new_data); ///chuyen kdl mang => json
file_put_contents('tb.json', $new_data); ///chuyen dlieu vao file json

header('Location:formnguoidung.php');
?>