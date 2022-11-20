<?php

$a =$_POST['a'];
$i=1;
$fact=1;

for($i=1;$i<=$a;$i++){
    $fact=$fact*$i;
}
echo "the factorial of : $a is $fact";






?>
