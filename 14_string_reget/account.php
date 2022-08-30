<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $account = $_POST['account'];
    $pattern = '/^[a-z0-9_]{6,12}$/';
    $pattern_3 = '/^[A-Za-z0-9_]{6,12}$/';
    $pattern_1 = '/^[\Wa-z0-9]{1,12}$/';
    $pattern_2 = '/^[a-z0-9_]{1,5}$/';
    class Exception2 extends Exception
    {
        public function Message()
        {
            return $this->getMessage();
        }
    }
    class Exception3 extends Exception
    {
        public function Message()
        {
            return $this->getMessage();
        }
    }

    if (preg_match($pattern, $account)) {
        echo "Tên tài khoản đúng định dạng!";
    } else {
        try {
            if (preg_match($pattern_1, $account)) {
                throw new Exception("Tên người dùng không được chứa kí tự đặc biệt!");
            }
            if (preg_match($pattern_2, $account)) {
                throw new Exception2("Tên người dùng phải có ít nhất 6 kí tự!");
            }
            if (preg_match($pattern_3, $account)) {
                throw new Exception3("Tên người dùng không được viết hoa!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        } catch (Exception2 $d) {
            echo $d->getMessage();
        } catch (Exception3 $c) {
            echo $c->getMessage();
        }
    }
}

$x = [1,3,5];
array_push($x, 2);
array_pop($x);
echo($x);

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
        <td>Nhập tên người dùng vào ô dưới đây:</td><br>
        <textarea name="account" placeholder="Account name"></textarea><br>
        <input type="submit">
    </form>

</body>

</html>