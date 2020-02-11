<?php
    include("includes/connection.php");
    session_start();
    date_default_timezone_set('Asia/Manila');

     if (isset($_COOKIE['emp_id']) && !isset($_SESSION['emp_id'])) {
       $id = $_COOKIE['emp_id'];

     }else {
          $id = $_SESSION['emp_id'];
          
        }
        
	$name = $_POST['Name'];
    $nameid = $_POST['Nameid'];
    $contactno = $_POST['Contactno'];
    $pers = $_POST['Pers'];
    $m = $_POST['Mids'];
    $mids = explode(",", $m);
    $amt = $_POST['Amt'];
    $room = $_POST['Room'];
    $room_id = $_POST['Room_id'];
    $rid = $_POST['Rid'];

    if(!isset($nameid))
    {
        $nameid="None";
    }

    $ms = array();
    $mi = array();
    $dur2 = array();
    $len = count($mids);
    $hrs=0;
    $mins=0;
    $secs=0;

    foreach($mids as $key => $val)
    {
        $qry="SELECT * FROM tbltempmovies WHERE mid='".$val."'";
        $result=$con->query($qry);
        while($row=$result->fetch_array())
        {
            $mi[] = $row['movie_id'];
            $ms[] = $row['title'];
            $dur = $row['duration'];
            $dur2[] = $dur;
            list($hours, $minutes, $seconds) = explode(':', $dur);

			$hrs += (int) $hours;
			$mins += (int) $minutes;
			$secs += (int) $seconds;

			// Convert each 60 minutes to an hour
			if ($mins >= 60) {
			    $hrs++;
			    $mins -= 60;
			}

			// Convert each 60 seconds to a minute
			if ($secs >= 60) {
			    $mins++;
			    $secs -= 60;
			}
        }
    }
    $movies = implode("^", $ms);
    $end_time2 = array();
    foreach($dur2 as $var)
    {
        list($hours2, $minutes2, $seconds2) = explode(':', $var);

        $hrs2 += (int) $hours2;
        $mins2 += (int) $minutes2;
        $secs2 += (int) $seconds2;

        // Convert each 60 minutes to an hour
        if ($mins2 >= 60) {
            $hrs2++;
            $mins2 -= 60;
        }

        // Convert each 60 seconds to a minute
        if ($secs2 >= 60) {
            $mins2++;
            $secs2 -= 60;
        }
        $end_time2[] = date("g:i A", mktime(date("G")+$hrs2, date("i")+$mins2, date("s")+$secs2, 0, 0, 0));
    }
    $durs = implode(",", $end_time2);
    $duration = $hrs.":".$mins.":".$secs;
    $end_time = date("g:i A", mktime(date("G")+$hrs, date("i")+$mins, date("s")+$secs, 0, 0, 0));
    $date = date('m/d/Y');
    $time = date("g:i A", mktime(date("G"), date("i"), date("s"), 0, 0, 0));

    $sql = "INSERT INTO tbltransactions VALUES(' ', '$name', '$nameid', '$contactno', '$pers', '$movies', '$room', '$duration', '$end_time', '$amt', '$date', '$time')";
    $insert=$con->query($sql);
    $sql = "DELETE FROM tbltempmovies";
    $del=$con->query($sql);
    $sql = "DELETE FROM tblreservation WHERE reserve_id='".$rid."'";
    $del=$con->query($sql);
    $sql = "INSERT INTO tblbilling VALUES(' ', '$room_id', '$room', '$nameid', '$name', '$movies', '$pers', '$amt', '$duration', '$durs', '$end_time', '$contactno')";
    $insert=$con->query($sql);
    $sql = "UPDATE tblrooms 
            SET status='unavailable' WHERE room_id='".$room_id."'";
    $update=$con->query($sql);

    foreach($mi as $key => $val)
    {
        $qry="SELECT * FROM tblmovie WHERE movie_id='".$val."'";
        $result=$con->query($qry);
        while($row2=$result->fetch_array())
        {
            $cnt = $row2['watched'];
        }
        $cnt++;
        $sql="UPDATE tblmovie SET watched='".$cnt."' WHERE movie_id='".$val."'";
        $update=$con->query($sql);
    }
?>