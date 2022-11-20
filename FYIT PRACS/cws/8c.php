<?php
 
$name=$_POST['usr'];
$pass=$_POST['pwd'];

if ($name=='srijai' && $pass=='hello')
{
    echo "correct";
}
else{
    echo"incorrect username or password";

}


?>