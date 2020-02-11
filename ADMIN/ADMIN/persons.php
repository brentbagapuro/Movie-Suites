<?php
	session_start();
	include("../../includes/connection.php");

  	$pers = $_POST['persons'];
  	$_SESSION['persons']=$pers;
 ?>