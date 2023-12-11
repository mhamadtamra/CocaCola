<?php
session_start(); // Starting Session

$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}else{
		$username=$_POST['username'];
		$password=$_POST['password'];		
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		
		$con= mysqli_connect("localhost", "root","", "cocacola");
		$sql="select * from login
		      where password='".$password."' 
			   AND username='".$username."'";
		$result=mysqli_query($con,$sql);
		$rows=mysqli_num_rows($result);
		if ($rows == 1) {
			$_SESSION['user']=$username; // Set the Session
			$res=mysqli_num_rows($result);
			if($res['roleId']=="admin"){
				$_SESSION['role']="admin";
			header("location: profileAdmin.php"); // Redirecting To Other Page
		}else if($res['roleId']=="client"){
			$_SESSION["role"]= "user";
			header("location:profileUser.php");
		}
		} else {
			$error = "Username or Password is invalid";
		}
		mysqli_close($con); // Closing Connection
	}
}
?>