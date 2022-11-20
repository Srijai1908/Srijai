<?php
$conn=mysqli_connect('localhost','root','');
if(!$conn){
    echo "server not connected";
}
if(mysqli_select_db($conn,'tcs'))
{
    echo "database selected";
}
$name=$_POST['fname'];
$lastname=$_POST['lname'];
$year=$_POST['yrs'];
$marks=$_POST['mrks'];
$contact=$_POST['num'];
$email=$_POST['eml'];

$sql="INSERT INTO tcs_form(Name,Lastname,Year,Marks,Contact,Email) VALUES('$name','$lastname','$year','$marks','$contact','$email')";

if(mysqli_query($conn,$sql)){
    echo "Registration Completed Please check your mail for further process";
}
else{
    echo "error";
}













?>