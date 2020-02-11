<?php
	include("includes/connection.php");

	$id = $_POST['rrid'];

	$result=mysql_query("DELETE FROM tblreservation WHERE reserve_id='".$id."'");
?>