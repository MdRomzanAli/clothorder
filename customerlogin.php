<?php
include('login_u.php'); 

if(isset($_SESSION['login_user2'])){
header("location: clothlist.php"); 
}
?>

<!DOCTYPE html>
<html>

  <head>
    <title> Tashreeh </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
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
            <li ><a href="index.php">Home</a></li>
            
          </ul>

         
        </div>

      </div>
    </nav>

    <div class="container">
    <div class="jumbotron">
     <h1>Hi Guest,<br> Welcome to <span class="edit"> Tashreeh </span></h1>
     <br>
   <p>Kindly LOGIN to continue.</p>
    </div>
    </div>

    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-5 col-md-offset-4">
        <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
      <div class="panel panel-primary">
        <div class="panel-heading"> Login </div>
        <div class="panel-body">
          
        <form action="" method="POST">
          
        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;"></span> Username: </label>
            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
              <span class="input-group-btn">
                <label class="btn btn-primary"><s" aria-hidden="true"></label>
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;"></span> Password: </label>
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
              <span class="input-group-btn">
                <label class="btn btn-primary"></label>
            </span>
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-5">
              <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button></br>
             
             
          </div>

        </div>
        <label style="margin-left: 5px; ">or</label> <br>
       <label style="margin-left: 5px; "><a href="customersignup.php">Create a new account.</a></label>

        </form>
        </div>     
      </div>      
    </div>
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