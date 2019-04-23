<?php
include 'dbconnect.php';
$rid=$_GET['id'];
$sql = "UPDATE review set  authorize=1 where rid='$rid'";
$res_data = mysqli_query($conn,$sql);

header("location: reviewvalidate.php");
?>