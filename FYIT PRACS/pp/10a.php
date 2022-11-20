<?php
session_start();


?>




<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    $_SESSION["favcolor"]="blue";
    $_SESSION["favanimal"]="cow";

    echo "session variables are set";

    ?>
    
</body>
</html>