<head>
<style>h1{
    display:none;
}

    </style>
</head>
<h1><?php require "buy1.php";
$userr4=$user4;
?></h1>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'test');

$user0=$_POST['name'];
$user1=$_POST['email'];
$user2=$_POST['phone'];
$user3=$_POST['address'];

if(isset($_GET["w1"]))
{
    $userr4=$_GET["w1"];
}
$user4=substr($userr4,24,strlen($userr4));


$query="insert into purchase_info (name,email,phone,address,info) values('$user0','$user1','$user2','$user3','$user4');";
mysqli_query($con,$query);

?>
<button onclick="location.href='index1.php'" style="
    margin-top: 100px;
    background-color: purple;
    width: 250px;
    height: 100px;
    display: block;
    margin: auto auto auto auto;
    font-size: 25px;
    border-radius: 20px;
    outline:none;">Continue Shopping</button>