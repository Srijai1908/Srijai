<?php

$a=$_POST['a'];

for($i=2;$i<=$a;$i++)
{

    if($a%$i==0){
        echo "$a is not prime";
        break;

    }
    else{
        echo "$a is a prime number";
        break;
    }
}









?>