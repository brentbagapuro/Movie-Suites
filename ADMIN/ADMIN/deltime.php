<?php
	include("includes/connection.php");

	if(isset($_POST['V']))
	{
		$v = $_POST['V'];
		$sql = "DELETE FROM tblbilling WHERE room='".$v."'";
		$del=$con->query($sql);
		$sql = "UPDATE tblrooms SET status = 'available' WHERE room_name='".$v."'";
		$update=$con->query($sql);
	}
	else if(isset($_POST['Now']))
	{
		$now = $_POST['Now'];
		$qry = "SELECT * FROM tblbilling WHERE end_time='".$now."'";
		$result=$con->query($qry);
		while($row=$result->fetch_array())
		{
			$r = $row['room_id'];
		}
		$sql = "DELETE FROM tblbilling WHERE end_time='".$now."'";
		$del=$con->query($sql);
		$sql = "UPDATE tblrooms SET status = 'available' WHERE room_id='".$r."'";
		$update=$con->query($sql);
	}
	
?>