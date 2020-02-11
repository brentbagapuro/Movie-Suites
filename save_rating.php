<?php
	include("includes/connection.php");

	$rating = $_POST['rating'];
	$mid = $_POST['Mid'];
	$cid = $_POST['Cid'];

	$arr = array($cid, $rating);
	$car = implode(",", $arr);
	$qry = "SELECT * FROM tblrating WHERE movie_id = '".$mid."'";
	$result=$con->query($qry);
	while($row=$result->fetch_array())
	{
		$ca = $row['cars'];
	}
	if(isset($ca))
	{
		$cars = explode(" ", $ca);
		foreach($cars as $key => $c)
		{
			$n = explode(",", $c);
			if($n[0]==$cid)
			{
				unset($cars[$key]);
			}
		}
		if(!empty($cars))
		{
			$nca = implode(" ", $cars);
			$ncars = $nca . " " . $car;
		}
		else
		{
			$ncars = $car;
		}
		
		$update = "UPDATE tblrating SET cars='".$ncars."' WHERE movie_id='".$mid."'";
		$result=$con->query($update);
	}
	else
	{
		$insert = "INSERT INTO tblrating VALUES (' ', '$mid', '$car')";
		$result=$con->query($insert);
	}

	if(isset($ncars))
	{
		$carex = explode(" ", $ncars);
	
		$cnt=0;
		$total=0;
		foreach($carex as $rat)
		{
			$cnt++;
			$r = explode(",", $rat);
			$total+=$r[1];
		}
		$nrat = round($total/$cnt, 0, PHP_ROUND_HALF_DOWN);
		$update2 = "UPDATE tblmovie SET rating='".$nrat."' WHERE movie_id='".$mid."'";
		$result=$con->query($update2);
	}
	else
	{
		$update2 = "UPDATE tblmovie SET rating='".$rating."' WHERE movie_id='".$mid."'";
		$result=$con->query($update2);
	}

   
?>