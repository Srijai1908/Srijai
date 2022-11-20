<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Session</title>
</head>
<body>
    <?php
    
    $_SESSION["favcolor"]="blue";
    $_SESSION["favanimal"]="cow";
    echo "session variables are set.";
    
    
    
    ?>
    
</body>
</html>







