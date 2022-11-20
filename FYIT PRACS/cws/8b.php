<?php
$conn=mysqli_connect('localhost','root','');
if(!$conn){
    echo "server not connected";
}
if(mysqli_select_db($conn,'college1'))
{
    echo "database selected";
}

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$sql="INSERT INTO student(sno,sname,percentage) VALUES('$a','$b','$c')";

if (mysqli_query($conn,$sql))
{
    echo "Registration Completed Please check your mail for further process";
}
else{
    echo "error";
}

?>