<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            text-align: center;
        }

        th {
            text-align: center;
        }

        .container {
            width: 500px;
            margin: auto;
            /* text-align: center; */
        }

        .pagination {
            width: 400px;
            margin-left: 50px;
        }

        .pagination a {
            display: block;
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
</head>

<body>

    <tr>
        <td colspan="6">
            <h2>Library Manager</h2>
        </td>
    </tr>
    <tr>
        <td> <a href="./../index/index.php">Home</a></td>
        <td> <a href="./../categories/index.php">Categories</a></td>
        <td> <a href="./../book/index.php">Book</a></td>
        <td> <a href="./../students/index.php">Students</a></td>
        <td> <a href="./../orders/index.php">OrdersBook</a></td>
        <td> <a href="./../order_detail/index.php">OrderDetail</a></td>

    </tr>
    <hr>