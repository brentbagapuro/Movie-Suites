<?php
	include("includes/connection.php");
	$mid = $_GET['mid'];

	$sql = "DELETE FROM tblwatchlist WHERE movie_id='".$mid."'";
	$result=$con->query($sql);

	header("Location: homepage.php");
?>