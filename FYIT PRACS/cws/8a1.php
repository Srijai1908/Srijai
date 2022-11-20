<?php
$conn=mysqli_connect('localhost','root','');
if(!$conn){
    echo "server not connected";
}
if(mysqli_select_db($conn,'college'))
{
    echo "database selected";
}

$a=$_POST['dname'];
$b=$_POST['dno'];
$c=$_POST['no'];
$sql="INSERT INTO department(departmentname,departmentnumber,numberfac) VALUES('$a','$b','$c')";

if (mysqli_query($conn,$sql))
{
    echo "Registration Completed Please check your mail for further process";
}
else{
    echo "error";
}

?>