<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<html>

  <head>
    <title> Tashreeh </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/cart.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  
   

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Tashreeh</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
           

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="clothlist.php">MENU </a></li>
            <li class="active" ><a href="clothlist.php"> CART
             (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
              </a></li>
            <li><a href="logout_u.php"> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>



<?php
}
?>


        </div>

      </div>
    </nav>

    
<?php
if(!empty($_SESSION["cart"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your Shopping Cart</h1>
       
        
      </div>
      
    </div>
    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="40%">cloth Name</th>
<th width="10%">Quantity</th>
<th width="20%">Price Details</th>
<th width="15%">Order Total</th>
<th width="5%">Action</th>
</tr>
</thead>


<?php  

$total = 0;
foreach($_SESSION["cart"] as $keys => $values)
{
?>
<tr>
<td><?php echo $values["cloth_name"]; ?></td>
<td><?php echo $values["cloth_quantity"] ?></td>
<td>taka <?php echo $values["cloth_price"]; ?></td>
<td>taka <?php echo number_format($values["cloth_quantity"] * $values["cloth_price"], 2); ?></td>
<td><a href="cart.php?action=delete&id=<?php echo $values["cloth_id"]; ?>"><span class="text-danger">Remove</span></a></td>
</tr>
<?php 
$total = $total + ($values["cloth_quantity"] * $values["cloth_price"]);
}
?>
<tr>
<td colspan="3" align="right">Total</td>
<td align="right"> <?php echo number_format($total, 2); ?> </td> 
<td align="right">taka  </td>  
<!-- add sign -->
<td></td>
</tr>
</table>
<?php
  echo '<a href="payment.php"><button class="btn btn-success pull-right"> Check Out</button></a>';
?>
</div>
<br><br><br><br><br><br><br>
<?php
}
if(empty($_SESSION["cart"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your Shopping Cart</h1>
        <p>Oops! We can't smell any cloth here. Go back and <a href="clothlist.php">order now.</a></p>
        
      </div>
      
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
}
?>


<?php


if(isset($_POST["add"]))
{
if(isset($_SESSION["cart"]))
{
$item_array_id = array_column($_SESSION["cart"], "cloth_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["cart"]);

$item_array = array(
'cloth_id' => $_GET["id"],
'cloth_name' => $_POST["hidden_name"],
'cloth_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_RID"],
'cloth_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][$count] = $item_array;
echo '<script>window.location="cart.php"</script>';
}
else
{
echo '<script>alert("Products already added to cart")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
else
{
$item_array = array(
'cloth_id' => $_GET["id"],
'cloth_name' => $_POST["hidden_name"],
'cloth_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_RID"],
'cloth_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][0] = $item_array;
}
}
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["cart"] as $keys => $values)
{
if($values["cloth_id"] == $_GET["id"])
{
unset($_SESSION["cart"][$keys]);
echo '<script>alercloth has been removed")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
}
}

if(isset($_GET["action"]))
{
if($_GET["action"] == "empty")
{
foreach($_SESSION["cart"] as $keys => $values)
{

unset($_SESSION["cart"]);
echo '<script>alert("Cart is made empty!")</script>';
echo '<script>window.location="cart.php"</script>';

}
}
}


?>
<?php

?>
<div class="container bg-danger  p-5">
        <div class="row">
            <div class="col-lg-3 col-12">
            <center><img src="images/tashreeh-logo.JPG" style="height: 100px;  margin-top: 10px; margin-left: 20px;"></center>
                <center><h4 class="font-rubik font-size-20  ">tashreeh </h4></center>
                
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Feedback</h4>
                <form class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Feedback *">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-warning mb-2">submit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-primary pb-1">About Us</a></br>
                    <a href="#" class="font-rale font-size-14 text-primary pb-1">Delivery Information</a></br>
                    <a href="#" class="font-rale font-size-14 text-primary pb-1">Privacy Policy</a></br>
                    <a href="#" class="font-rale font-size-14 text-primary pb-1">Terms & Conditions</a>
                </div>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a></br>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a></br>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a></br>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>