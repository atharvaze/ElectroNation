<?php

if($_POST)
{
	include 'dbconnect.php';
	$username=$_POST['username'];
	$pwd=$_POST['password'];
	$check_admin="SELECT * FROM admin WHERE name='$username' and password='$pwd'";
	$result=mysqli_query($conn,$check_admin);

	If(mysqli_num_rows($result)>0)
	{
		header("Location:adminpage.php");
		

	}
	else
	{
		echo '<script language="javascript">
			  alert("Error during Login!! Try again!!")
			  window.location.replace("adminlogin.php");
			  </script>';
	}
}
?>