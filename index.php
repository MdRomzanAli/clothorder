<?php
session_start();
?>

<html>

  <head>
    <title> tashreeh </title>
    <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <link rel="stylesheet" type = "text/css" href ="css/index.css">
  </head>

  
  
  <body>

   

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container ">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="images/tashreeh-logo.JPG" style="height: 50px;">
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav bg-primary">
            <li class="active" ><a href="index.php">Home</a></li>
            
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php">MENU </a></li>
            <li><a href="cart.php">CART
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
       
    </nav>
    <div class="orderblock">
   <h3>You can get all the aesthetic saris, three-pieces and T-shirt here at reasonable prices. </h3>
   <h5> We are always much more aware of clothing. But nowadays we are so busy, we are so busy that we don't even have time to go to the shopping mall to buy our hobby dress. That's why we are becoming more and more dependent on online shopping. Our mobile phone has become our virtual shopping mall. But when it comes to online shopping, we are mostly uncertain about quality.Tashreeh - তাশরীহ is working with all aesthetically pleasing saris, three-pieces and kurtis to overcome this uncertainty about quality in online shopping. Find the best product in your budget at "Tashreeh - তাশরীহ". </h5>
    </div>
    
    <div class="orderblock">
    <h2>Are you want to buy new cloth?</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a></center>
    </div>

  
    <div class="container bg-danger  p-5">
        <div class="row">
            <div class="col-lg-3 col-12">
            <center><img src="images/tashreeh-logo.JPG" style="height: 100px;  margin-top: 10px; margin-left: 20px;"></center>
                <center><h4 class="font-rubik font-size-20  ">tashreeh </h4></center>
                
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Newslatter</h4>
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