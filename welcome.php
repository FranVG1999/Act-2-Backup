<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Studio Ghibli</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{
            font: 14px sans-serif; text-align: center; 
            background-image: url('aesthetic.gif');
            background-size: 100%;
}
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hello and welcome, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
<section>
  <center>
  <img class="mySlides" src="howls_moving_castle.jpg"
  style="width:500px">
  <img class="mySlides" src="My_Neighbor_Totoro.jpg"
  style="width:500px">
  <img class="mySlides" src="Spirited_Away.jpg"
  style="width:500px">
  <img class="mySlides" src="Grave_of_the_Fireflies.jpg"
  style="width:500px">
  <img class="mySlides" src="Kiki's_Delivery_Service.jpg"
  style="width:500px">
  <img class="mySlides" src="Ponyo.jpg"
  style="width:500px">
  <img class="mySlides" src="Princess_Mononoke.jpg"
  style="width:500px">
  <img class="mySlides" src="The_Cat_Returns.jpg"
  style="width:500px">
  <img class="mySlides" src="The_Tale_of_Princess_Kaguya.jpg"
  style="width:500px">
  <img class="mySlides" src="The_Wind_Rises.jpg"
  style="width:500px">
  </center>
</section>

<center>
  <h2 class="w3-wide">Studio Ghibli</h2>
  <p class="w3-opacity"><i>株式会社スタジオジブリ</i></p>

  <audio controls autoplay>
  <source src="Howl.mp3" type="audio/mpeg">
</audio>   
  </center>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>