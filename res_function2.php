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
    $qry="SELECT movie_id FROM tblwatchlist WHERE cust_id='".$cid."'";
    $result=$con->query($qry);
    while($row=$result->fetch_array())
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

		

		$insert = "INSERT INTO tblreservation VALUES (' ', '$cid', '$m', '$nop', '$time', '$date','PENDING')";
		$result=$con->query($insert);
		if($insert)
		{
			$del = "DELETE FROM tblwatchlist WHERE cust_id='".$cid."'";
			$result2=$con->query($del);
			header("Location: homepage.php");
		}
	}
	if(isset($_POST['btnremove']))
	{
		for($i=0; $i<sizeof($mids); $i++)
		{
			$mi=$mids[$i];
			$qry = "SELECT * FROM tblwatchlist WHERE movie_id='".$mi."'";
			$result=$con->query($qry);
			if($qry)
			{
				$del = "DELETE FROM tblwatchlist WHERE movie_id='".$mi."'";
				$result2=$con->query($del);
				if($del)
			        header("Location: watchlist.php");
			    else
			        echo "Error";
			}
		}
	}
?>