<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Shopping Cart</title>
    <style>
      @media only screen and (max-width: 400px)
      {
        .nav-link
        {
         /* display:none; */
         display:none;
         padding-right:10px;

         
        }
      }
      #image{
          display:block;
        }
        .navbar-brand
        {
          display:block;
          
        }
       .bow{
         width:100%;
         text-align:center;
       }
       .dbow{
         width:100%;
         text-align:center;
       }
       .square{
         /* display:inline-block; */
         width:300px;
         height:500px;
         padding:10px;
       }
       .navbar{
         width:100%;
       }
      </style>
        
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-3 ">
  <!-- Brand -->
  <img id="image" src="images/logo.jpg" style=" height-300px;margin-right:10px; width:40px;border-radius:50%;">
  <a class="navbar-brand" href="#">FashionCart</a>

  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link px-5" href="#" >Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Services</a>
    </li>
    <li class="nav-item px-5">
      <a class="nav-link" href="#">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
    <li class="nav-item px-5">
      <a class="nav-link" href="../Web_Development_Projects/Login_page/index.php">Logout</a>
    </li>
    <li class="nav-item px-5 "style="color:white">
    <a class="nav-link" >Items in the cart:
      <span class="nav-link" id="car">0</span></a>
      </li>

    
  </ul>
</nav>
<!-- <div id="container">
<div class="cart" id="cart" >
Items in the cart:
<span id="car">0</span>
</div>
</div>
<div> -->
<?php
$conn=mysqli_connect('localhost','root','','shopping_cart');
if(!$conn)
{ die("Connection was not successful");
}
  $query="SELECT name,image,price,discount FROM `shopping_cart` order by id ASC";
  $res=mysqli_query($conn,$query);
  $num=mysqli_num_rows($res);
  ?>
  <div id="dbow">
  <div class="bow">
  <?php
  if($num>0)
    { $j="0";
        while($product=mysqli_fetch_array($res))
        {?>
     <div class="square" id="sq<?php echo $j ?>" style="display:block; float:left;outline:none;">
    <div class="card" style="width:100%;border:1px solid black; border-radius:10px;">
      <img class="card-img-top img-fluid" style="height:250px" src="<?php echo $product[1];?>" alt="There's an image here">
      <div class="card-body text-center" style=" background-color:grey;">
          <h4 class="card-title"><?php echo $product[0];?></h4>
          <p class="card-text">Price: <?php echo $product[2];?>    Discount:<?php
          echo $product[3];?>%</p>
          <button class="btn btn-primary button " id="Button<?php echo $j;?>" >Add to the Cart</a>
          <h1>Button<?php echo $j;?></h1>
      </div>
    </div>
  </div>   
       <?php $j++; }
    }
?>
<?php
$conn=mysqli_connect('localhost','root','','shopping_cart');
if(!$conn)
{ die("Connection was not successful");
}
  $query="SELECT name,image,price,discount FROM `shopping_cart` order by id ASC";
  $res=mysqli_query($conn,$query);
  $num=mysqli_num_rows($res);
  if($num>0)
    { $j="0";
     $n=1;
     function mysqli_result($res,$row,$field=0)
     {
       $res->data_seek($row);
       $datarow=$res->fetch_array();
       return $datarow[$field];
     }
      
  ?>
<script>
var a="";
var flag=false;
  var button0=document.getElementById('Button0');
  button0.addEventListener('click',function(){
    button0.disabled=true;
    flag=true;
    a=a+",";
    a=a+"<?php $product=mysqli_result($res, 0 , 0);echo $product;?>";
   })
    var button1=document.getElementById('Button1');
  button1.addEventListener('click',function(){
    button1.disabled=true;
    flag=true;
    a=a+",";
    a=a+"<?php $product=mysqli_result($res, 1 , 0);echo $product;?>";
  })
    var button2=document.getElementById('Button2');
  button2.addEventListener('click',function(){
    button2.disabled=true;
    flag=true;
    a=a+",";
    a=a+"<?php $product=mysqli_result($res, 2 , 0);echo $product;?>";
    })
    var button3=document.getElementById('Button3');
  button3.addEventListener('click',function(){
    button3.disabled=true;
    flag=true;
    a=a+",";
    a=a+"<?php $product=mysqli_result($res, 3 , 0);
    echo $product;?>";
    
  
  })
  
   
</script>
<?php }?>
</div>
  </div>

  </div>


  <section>
  <button id="buy" style="background-color:black;width:250px;border-radius:10px;height:50px;color:white;float:right;margin-top:500px;font-size:25px" >Buy</button>
  </section>
  <script>

  var butt=document.getElementById("buy");
  butt.addEventListener('click',function(){
    butt.disabled=true;
    window.location.href="buy1.php?w1=" + a;
  })
    </script>







<script src="index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="css3-mediaqueries.js"></script>
</body>
</html>
