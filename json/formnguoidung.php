<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        td {
            color: black;
            }
        .table {
            background-color: #8d8d8d;
            }
        .so1 {
            background-color: #269b6c;
            }
        .s5 {
            color: red;

        }
        /* body {
            background-image: url(picture/img1.jpg);
        } */

    </style>
</head>
<body>
<div class="container">
<form action="">
    <!-- in dữ liệu lấy từ json -->
    <?php
    $old_data =  file_get_contents('user.json'); ///lay dlieu trong file json
    $old_data = json_decode($old_data, true); ///chuyen dlieu ve mang 
    ?>
    <a href="add.php" class="btn btn-primary">add</a>
    <?php
    $new_data =  file_get_contents('tb.json'); ///lay dlieu trong file json
    $new_data = json_decode($new_data); ///chuyen dlieu ve mang
    $er= implode ("",$new_data);
    ?>
    <label class="s5"><?php echo $er; ?></label>
    <?php
    $new_data=[];
    $new_data = json_encode($new_data); ///chuyen kdl mang => json
    file_put_contents('tb.json', $new_data); ///chuyen dlieu vao file json
    // $old_data=  array_values($old_data);
    // $data = json_encode($old_data);
    // file_put_contents('user.json', $data);
   
    
    ?>
        <table class="table">
            <tr class="so1">
                <td>STT</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>ACTION</td>
            </tr>


            <?php if (isset($old_data)) {

                for ($i = 0; $i < count($old_data); $i++) {
            ?>
                    <tr class="so2">
                        <td><?php echo ($i + 1) ?></td>
                        <td><?php echo $old_data[$i][0]; ?></td>
                        <td><?php echo $old_data[$i][1]; ?></td>
                        <td><?php echo $old_data[$i][2]; ?></td>
                        <td>
                            <a href="json-edit.php?id=<?php echo $i; ?>" class="btn btn-warning">Edit</a>
                            <a href="json-delete.php?id=<?php echo $i; ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete</a>
                        </td>
                    </tr>
            <?php }
            }
            ?>



        </table>
   
    </div>
</form>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</html>