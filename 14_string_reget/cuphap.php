<?php
$a=5;
$b=0;
// try {
//     if($b==0)
//     {
//         throw new Exception('số chia = 0');
//     }
//     $c=$a/$b;
//     echo $c;
// } catch (Exception $e) {
//     echo $e->getMessage();
// }
// ////try catch có thể bắt theo các bên dưới
// function sum($a,$b)
// {
//     if($b==0)
//     {
//         throw new Exception('số chia = 0');
//     }
//     $c=$a/$b;
//     echo $c;
// }
// try{
//     sum($a,$b);
// }catch (Exception $e) {
//     echo $e->getMessage()."<br>";
// }

class Custom extends Exception
{
    public function hienthiloi()
    {
        $err="";
        $err.="<br> loi ".$this->getMessage();
        $err.="<br> code ".$this->getCode();
        $err.="<br> file ".$this->getfile();
        $err.="<br> line ".$this->getline();
        return $err;
    }
}

function sum1($a,$b)
{
    if($b==0)
    {
        throw new Custom('số chia = 0');
    }
    $c=$a/$b;
    echo $c;
}
try{
    sum1($a,$b);
}catch (Custom $e) {
    echo $e->hienthiloi();
}
