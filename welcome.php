
<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: other.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/mystyles.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
</head>
<body>
  <nav>
<div class="topnav" id="myTopnav">
  <a href="index.html" class="active">Kathy's Cakes</a>
  <a href="order.html">Order Now</a>
  <a href="story.html">Our Story</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <i class="fa fa-bars"></i>
  </a>
</div>
</nav>
<section>
<div class="topimg">Kathy's Cakes<br><article><p>


</p></article></div>


<div class="wrapper">
  <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b><br> Welcome to your site.</h1>
     <p>
         <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
         <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
     </p>
   </div>


</section>


<script>

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
<footer>
  <h4>Kathy's Cakes inc. /Maya Multimedia LLC</h4><br>
</footer>
</html>
