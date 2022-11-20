<?php

$bikes=array("HARLEY","NINJA","KTM");
echo "I am fond of bikes such as  ".$bikes[0].",".$bikes[1]." "."and" ." ".$bikes[2].".";
echo "<br>";
echo count($bikes);
echo "<br>";
$arrylength=count($bikes);


for($x=0;$x<$arrylength;$x++){
    echo $bikes[$x];
    echo "<br>";
}











?>