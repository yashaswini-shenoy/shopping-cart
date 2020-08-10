<?php

$con=mysqli_connect('localhost','root');
if($con)
{

    mysqli_select_db($con,'test');
    $name=$_POST['username'];
    $password=$_POST['password'];
    $query="select password from login_page where name='$name'";
    $result=mysqli_query($con,$query);
    $num=mysqli_num_rows($result);
    if($num==0)
  die ("your email id is not registered");
    if($num!=0)
    $row=mysqli_fetch_array($result);

    if($row[0]!=$password)
    die ("Try again. Your password is wrong");
    header('location:index1.php');
 
}

?>