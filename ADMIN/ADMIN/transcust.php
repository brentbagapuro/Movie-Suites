<?php
	include("includes/connection.php");

	$id = $_POST['id'];

	$qry = "SELECT * FROM tblcustomer WHERE cust_id='".$id."'";
    $result=$con->query($qry);
	while($row=$result->fetch_array())
    {
        $fname = $row['fname'];  
        $mname = $row['mname'];
        $lname = $row['lname'];    
    }

    $sql = "INSERT INTO tbltempcust VALUES (' ','$id','$fname','$mname','lname')";
    $insert=$con->query($sql);
?>