<?php
	include("includes/connection.php");

	$id = $_POST['id'];

	if($id==NULL)
	{
		$sql="DELETE FROM tbltempmovies";
		$del=$con->query($sql);
	}
	else
	{
		$sql="DELETE FROM tbltempmovies WHERE mid='".$id."'";
		$del=$con->query($sql);
	}
?>