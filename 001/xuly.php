<?php

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
$_SESSION['a']=[2.3,4];
print_r( $_SESSION['a']);
unset($_SESSION['a']);
print_r( $_SESSION['a']);


?>