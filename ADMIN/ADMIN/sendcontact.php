<?php
	include("includes/connection.php");

	$contact = $_POST['Phone'];

    $sql = "INSERT INTO tblsms VALUES (' ', '$contact')";
    $insert=$con->query($sql);
?>