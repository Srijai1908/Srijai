<?php
$conn=mysqli_connect('localhost','root','');
if(!$conn){
    echo "server not connected";
}
if(mysqli_select_db($conn,'my_database'))
{
    echo "database selected";
}
$roll=$_POST["rollno"];
$name=$_POST["name"];

$sql="INSERT INTO student_details(Rollno,Name) VALUES('$roll','$name')";

if(mysqli_query($conn,$sql)){
    echo "Record added sucesfully";
}
else{
    echo "error";
}


?>
