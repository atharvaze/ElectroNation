<!DOCTYPE html>
<html>
<head>
	<title>Validate Reviews</title>
	<link rel="stylesheet" type="text/css" href="home.css">
<style type="text/css">
	 body{
    background: white url("def.jpg");
}
</style>
</head>
<body>
<?php
include("header.php");
?>
</div>
<div class="navbar">
        <a href="home.php">Home</a>
        <a href="adminpage.php">Add Products</a>
        <a href="reviewvalidate.php" class="active">View Reviews!</a> 
        <a href='home.php' class='right'>Logout</a> 
        </div>
</body>
</html>
<?php

include 'dbconnect.php';


$sql = "SELECT * FROM review Where authorize=0";
$res_data = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($res_data))
        {
            
            echo " ".$row['review']."<br>";
            echo "posted by ".$row['uname']."<br>";
            echo $row['add_time']."<br>";
            echo "<a type='button' href=accept.php?id=".$row['rid'].">"."<button>"."Accept"."</button>"."</a>"."<br>";
            echo "<a type='button' href=reject.php?id=".$row['rid'].">"."<button>"."Reject"."</button>"."</a>"."<br>";
     
        }
include 'footer.php';
?>

