<?php
	include("includes/connection.php");
	$mids = json_decode($_POST['Mids']);

	foreach($mids as $mi)
	{
			$sql = "DELETE FROM tblwatchlist WHERE movie_id='".$mi."'";
			$result=$con->query($sql);
	}
?>