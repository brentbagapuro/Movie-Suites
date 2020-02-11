<?php
	session_start();
	include("../../includes/connection.php");

  	$name = $_POST['name'];
  	$_SESSION['name']=$name;
 ?>