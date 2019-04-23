<!DOCTYPE html>
<html lang="en">
<head>
<title>ElectroNation</title>
<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>

<div class="header">
  <h1>ElectroNation</h1>
  <p>A <b>Review</b> website for <b>Electronics</b>.</p>
</div>

<?php
session_start();
if(isset($_SESSION['uid']))
{
  echo " <div class='navbar'>
        <a href=''class='active'>Home</a>
        <a href='adminlogin.php'>Admin Login</a> 
        <a href='logout.php' class='right'>Logout</a> 
        </div>
        "
        ;
}
else
{
  echo"<div class='navbar'>
        <a href='' class='active'>Home</a>
        <a href='adminlogin.php'>Admin Login</a>
        <a href='userlogin.php'>User Login</a>
    
        </div>";
  
}
?>

   <div class="main">
    <div class="fakeimg" style="height:1500px;">
      <div style="height: 200;">
        <?php
          include 'displayproducts.php';
        ?>
      </div>
    </div>
    <br>
</div>

<?php
include('footer.php');
?>

</body>
</html>
