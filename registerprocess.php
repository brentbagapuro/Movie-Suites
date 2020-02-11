<?php 

	include("includes/connection.php");

 
		
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$contact_num = $_POST['contact_num'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "INSERT INTO tblcustomer VALUES (' ','$fname', '$mname', '$lname', '$contact_num','$username','$password','ACTIVE')";
		$insert=$con->query($sql);
		header("Location: login.php?reg=r");

	
?>