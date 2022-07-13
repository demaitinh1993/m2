<?php
include "./employee.php";
include "./employeeManager.php";
// use Employee;
// use EmployeeManager;
$em=new EmployeeManager;
$em->add(new Employee('phan','cường','04/10/2003','quảng trị','deginer'));
$em->add(new Employee('lê','phi','06/6/2002','quảng trị','doctor'));
$em->add(new Employee('nguyễn','thắng','01/12/2002','quảng trị','dancer'));
$employee= $em->getEmployee();
// print_r()
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Danh sách sinh viên</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <a href="student-add.php">THÊM</a>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>ID</td>
                <td>Họ</td>
                <td>Tên</td>
                <td>Công việc</td>
                <td>Thao tác</td>
            </tr>
            <?php foreach ($employee as $key=> $item){ ?>
            <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $item->getFirst() ?></td>
                <td><?php echo $item->getName() ?></td>
                <td><?php echo $item->getJob() ?></td>
                <td>
                    <a href="show.php?id=<?php echo $key; ?>">Show</a>
                    <a href="edit.php?id=<?php echo $key; ?>">Edit</a>
                    <a href="edit.php?id=<?php echo $key; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>