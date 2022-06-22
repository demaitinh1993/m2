<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
        // Hàm tính giá trị của phần tử thứ $n của dãy Fibonacci
function Fibo($n)
{
    if ($n <= 2){
        return 1;
    }
    else {
        return (Fibo($n - 2) + Fibo($n - 1));
    }
}
 
// Truyền 100 vào để test
echo Fibo(3);
   ?>

    
</body>
</html>