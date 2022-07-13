<?php
$id=$_REQUEST['id'];
include "./employee.php";
include "./employeeManager.php";
$em=new EmployeeManager;
$employee= $em->find($id);
echo "<pre>";
print_r($employee);
// die();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Danh sách nhân viên</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!-- <a href="student-add.php">THÊM</a> -->
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>ID</td>
                <td>Họ</td>
                <td>Tên</td>
                <td>Ngày sinh</td>
                <td>Địa chỉ</td>
                <td>Công việc</td>
            </tr>
            <?php foreach ($employee as $key=> $item){ ?>
            <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $item->getFirst() ?></td>
                <td><?php echo $item->getName() ?></td>
                <td><?php echo $item->getBirthday() ?></td>
                <td><?php echo $item->getAddress() ?></td>
                <td><?php echo $item->getJob() ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>