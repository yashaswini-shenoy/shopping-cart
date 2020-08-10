<?php
session_start();
// header('location:login.php');
$con=mysqli_connect('localhost','root');
if($con)
{ 
    mysqli_select_db($con,'test');
    $name=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from login_page where name='$name'";
    $result=mysqli_query($con,$query);
    $num=mysqli_num_rows($result);
    if($num)
    echo "Your email account is already present";
    else{
    $query="insert into login_page (name,password) values( '$name','$password')";
    mysqli_query($con,$query);
    echo $query;


    }
   
}


?>