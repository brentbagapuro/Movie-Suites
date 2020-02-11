<?php
	include("includes/connection.php");

	$cid = $_POST['Cid'];
	$nom = $_POST['Nom'];
	$nop = $_POST['Nop'];
	$date = $_POST['Date'];
	$time = $_POST['Time'];

	$movie_id = array();
	$qry="SELECT movie_id FROM tblwatchlist WHERE cust_id='".$cid."'";
	$result=$con->query($qry);
    while($row=$result->fetch_array())
    {
    	$movie_id[] = $row['movie_id'];
    }
    $m=implode(",",$movie_id);

	$insert = "INSERT INTO tblreservation VALUES (' ', '$cid', '$m', '$nop', '$time', '$date','PENDING')";
	$result=$con->query($insert);
	$del = "DELETE FROM tblwatchlist WHERE cust_id='".$cid."'";
	$result2=$con->query($del);
?>