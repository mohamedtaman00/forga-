<?php

$con = mysqli_connect('localhost','root','','userregistration');

if(!$con)
{
    echo 'Not Connected To Server';
}

if(!mysqli_select_db($con,'userregistration'))
{
    echo "Database Not Selected";
}

$name= $_POST['username'];
$email=$_POST['email'];
$pwd =$_POST['password'];
$password=md5($pwd);

$sql = "INSERT INTO user(username,email,password) VALUES('$name','$email','$password')";

if(!mysqli_query($con,$sql))
{
    echo 'Not Inserted';
} else{
    echo 'inserted';
}

header("refresh:2; url=index.html");



?>