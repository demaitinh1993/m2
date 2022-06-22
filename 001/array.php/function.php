<?php
// global $name;
$name = 'nguyễn văn a';

function callname(){
    // c1
    // global $name;
    // echo $name;

    // c2
    echo $GLOBALS['name'];
}
callname();