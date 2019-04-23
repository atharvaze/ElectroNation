<?php
if($_POST)
{
	include 'dbconnect.php';
	$email_id=$_POST['email_id'];
	$pwd=$_POST['password'];
	$check_user="SELECT * FROM user WHERE email='$email_id' and password='$pwd'";
	$result=mysqli_query($conn,$check_user);
	$row=mysqli_fetch_array($result);
	If(mysqli_num_rows($result)>0)
	{
	
		session_start();
		$_SESSION['uname'] = $row['name'];
		$_SESSION['uid'] = $row['uid'];
		//echo "Logged In";
		header("location: home.php");
	}
	else
	{
		echo '<script language="javascript">
			  alert("Error during Login!! Try again!!")
			  window.location.replace("userlogin.php");
			  </script>';
	
	}
	
}
?>