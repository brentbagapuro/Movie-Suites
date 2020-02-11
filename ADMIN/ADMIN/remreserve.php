<?php
	include("includes/connection.php");

	$id = $_POST['rrid'];

	$sql="DELETE FROM tblreservation WHERE reserve_id='".$id."'";
	$del=$con->query($sql);
?>