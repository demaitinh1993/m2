<?php
/////tách JAN =1....đến 12
////khi chỉnh sửa chỉ cẩn sửa 12 hằng số 
////cho màu sáng bằng a màu tối bằng b, khi chỉnh sửa chỉ cẩn sửa a và b
const JAN =1;
const FEB =2;
const MAT =3;
const APR =4;
const MAY =5;
const JUN =6;
const JUL =7;
const AUG =8;
const SEP =9;
const OCT =10;
const NOV =11;
const DEC =12;
function checkmonth($month)
{
    switch($month)
    {
        case JAN:
        case MAT:
        case MAY:
        case JUL:
        case AUG:
        case OCT:
        case DEC:
            echo "31 ngay"."<br>";
            break;
        case FEB:
            echo "28 ngày"."<br>";
            break;
        case APR:
        case JUN:
        case SEP:
        case NOV:
            echo "30 ngày"."<br>";
            break;
        default:
            echo "tháng bạn tìm không tồn tại"."<br>";
    }
}
checkmonth(2);
checkmonth(5);
checkmonth(6);
checkmonth(11);
checkmonth(22);
