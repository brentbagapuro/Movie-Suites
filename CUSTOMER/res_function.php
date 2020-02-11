<?php
	session_start();
	include("includes/connection.php");
	if (isset($_COOKIE['cust_id']) && !isset($_SESSION['cust_id'])) {
       $cid = $_COOKIE['cust_id'];

     }else {
          $cid = $_SESSION['cust_id'];
          
     }

    $mids=json_decode($_POST['mids']);
    $n=0;
    $r=mysql_query("SELECT movie_id FROM tblwatchlist WHERE cust_id='".$cid."'");
    while($row=mysql_fetch_array($r))
    {
    	$movie_id[$n] = $row['movie_id'];
    	$n++;
    }
    $m=implode(",",$movie_id);
    $nop=$_POST['nop'];
    $date=$_POST['date'];
    $time=$_POST['time'];

    $pax = 50;

    $amt=250*sizeof($movie_id);
    $status="ACTIVE";

	if(isset($_POST['btnreserve']))
	{

		

		$insert = mysql_query("INSERT INTO tblreservation VALUES (' ','$cid', '$m', '$nop', '$time', '$date','PENDING')");
		if($insert)
		{
			$del = mysql_query("DELETE FROM tblwatchlist WHERE cust_id='".$cid."'");
			header("Location: homepage.php");
		}
	}
	if(isset($_POST['btnremove']))
	{
		for($i=0; $i<sizeof($mids); $i++)
		{
			$mi=$mids[$i];
			$result = mysql_query("SELECT * FROM tblwatchlist WHERE movie_id='".$mi."'");
			if($result)
			{
				$res = mysql_query("DELETE FROM tblwatchlist WHERE movie_id='".$mi."'");
				if($res)
			        header("Location: watchlist.php");
			    else
			        echo "Error";
			}
		}
	}
?>