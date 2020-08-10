<html>
    <head>
      <style>a{
  width:250px;
  height:80px;
  text-decoration:none;
  font-size:30px;
  background-color:green;
  margin:10px;
  padding:5px;
  border-radius:10px;
  outline:none;
  color:black;
}</style>

    <link rel="stylesheet" href="form.css">
    </head>
    <body>

    <?php 
    if(isset($_GET["w1"]))
{
    $user4=$_GET["w1"];
}?>


<div id="imm" >
<h5>FILL IN YOUR SHIPPING DETAILS</h5>
<form id="form" action="userinfo.php" method="post">
  <label class="float">Name</label>
  <input class="gg" type="text" name="name"  required>
  <label class="float">Email</label>
  <input   class="gg"  type="email" name="email"  required>
<label class="float">Phone</label>

  <input   class="gg"  type="phone" name="phone" required>
  <label class="float">Address</label>
  <textarea   class="gg"  type="text" name="address"></textarea required>
  <button type="submit" style="width:250px;height:50px;border-radius:10px;font-size:25px;outline:none;">Submit</a></button>
</form>
</body>

  </div>
</html>
