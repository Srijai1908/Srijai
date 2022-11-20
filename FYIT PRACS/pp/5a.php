<?php

$a=$_POST['a'];
$fact=1;

for($i=1;$i<=$a;$i++){

    $fact=$fact*$i;
}
echo "The factorial of $a is $fact";




?>