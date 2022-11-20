<?php

// $rows=$_POST["num"];
$rows=4;

for($i=1;$i<=$rows;$i++)
{
    for($j=1;$j<=$i;$j++){

        if(($i+$j)%2==0){

            echo "1";

        }else{
            echo"0";
        }

    }echo "<br>";
}











?>