<?php
	session_start();
	include("includes/connection.php");
	if (isset($_COOKIE['cust_id']) && !isset($_SESSION['cust_id'])) {
       $id = $_COOKIE['cust_id'];

     }else {
          $id = $_SESSION['cust_id'];
          
        }

    $mid=$_GET['mid'];

    $sql = "INSERT INTO tblwatchlist VALUES(' ', '$mid', '$id')";

    $insert=$con->query($sql);
    header("Location: homepage.php");
?>