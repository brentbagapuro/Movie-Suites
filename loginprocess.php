<?php

$username = $_POST['username'];
$password = $_POST['password'];

	if(isset($_POST['remember'])){
		$remember = $_POST['remember'];
	}

if($username == ""&& $password==""){
echo '<script type="text/javascript">alert("Please input your username and password!");window.history.go(-1);</script>'; 
$username.val('');
$username.val('');
header("Location: login.php");
}
else
{
include("includes/connection.php");

$retrieve = "SELECT * FROM tblcustomer WHERE (username='$username') AND (password = '$password')";
$res=$con->query($retrieve);

while ($row = $res->fetch_array()){
		$uname = $row['username'];
		$cust_id = $row['cust_id'];
		$pword = $row['password'];
		}

	$retrieve1 = "SELECT * FROM tblemployee WHERE (uname='$username') AND (pword= '$password')";
	$res1=$con->query($retrieve1);

	while ($row = $res1->fetch_array()){
		$a = $row['uname'];
		$emp_id = $row['emp_id'];
		$b = $row['pword'];
		$pos = $row['position'];
		}		



	if ($username == $a && $password == $b && $pos == "admin"){
		
			if(isset($remember)){

			setcookie('adm_id',$emp_id,time()+60*60*60);
			header("Location: ADMIN/ADMIN/admin.php");

		}
			session_start();
			$_SESSION['adm_id'] = $emp_id;
			header("Location:ADMIN/ADMIN/admin.php");


	}
	else if($username == $a && $password == $b && $pos == "Receptionist"){
		if(isset($remember)){

			setcookie('emp_id',$emp_id,time()+60*60*60);
			header("Location: ADMIN/ADMIN/receptionist.php");

		}
			session_start();
			$_SESSION['emp_id'] = $emp_id;
			header("Location:ADMIN/ADMIN/receptionist.php");

	}
	else if ($username == $uname && $password == $pword){
		if(isset($remember)){

			setcookie('cust_id',$cust_id,time()+60*60*60);
			 header("Location:homepage.php");

		} 
			session_start();
			$_SESSION['cust_id'] = $cust_id;
			header("Location:homepage.php");

	
}
	else{
	$error="Invalid Account!";
	header("Location:login.php?error=".$error);
	}

}

 
?>