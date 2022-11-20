<?php
$a=$_POST['num'];
$i;
$isprime=1;

for($i=2;$i*$i<$a;$i++){
    if($a%$i==0){
        $isprime=0;
    }
}
 if($isprime){
    echo"$a is a prime number";
}
else{
    echo"$a is not a prime number";
}




?>