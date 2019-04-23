<?php
if($_POST)
{
	include 'dbconnect.php';
	$name=$_POST['name'];
	$email_id=$_POST['email_id'];
	$pwd=$_POST['pwd'];
	$sql="INSERT INTO user (name,email,password) VALUES ('$name','$email_id','$pwd')";
	$result=mysqli_query($conn,$sql);
	If(mysqli_num_rows($result)>0)
	{ 
	
		header('Location:userlogin.php');
		

	}
	else
	{
		echo "Error".mysqli_error($conn);
		header("Location:registeruser.php");
	}
}
?>