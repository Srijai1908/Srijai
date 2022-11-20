<?php

$cars=array("honda","bmw","skoda");

  echo count($cars);

echo "I am fond cars such as ".$cars[0].",".$cars[1]."and".$cars[2].".";

$arraylength=count($cars);


for($x=0;$x<$arraylength;$x++){

    echo $cars[$x];
}

// $bikes=array("HARLEY","NINJA","KTM");
// echo "I am fond of bikes such as  ".$bikes[0].",".$bikes[1]."and".$bikes[2].".";
// $arrylength=count($bikes);


// for($x=0;$x<$arrylength;$x++){
//     echo $bikes[$x];
//     echo "<br>";
// }



?>