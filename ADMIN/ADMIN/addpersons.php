<?php
	include("includes/connection.php");

	$pers = $_POST['Pers'];
	$b1 = $_POST['B1'];

	$qry = "SELECT * FROM tblreg_price";
	$result=$con->query($qry);
    while($row=$result->fetch_array())
    {
        $pax = $row['price_pax'];
    }
    $amount = $pers * $pax;

	$qry = "SELECT * FROM tblbilling WHERE id='".$b1."'";
	$result=$con->query($qry);
	while($row=$result->fetch_array())
	{
		$num = $row['num_of_persons'];
		$cur_amt = $row['amount'];
	}
	$pers=$pers+$num;
	$amount=$amount+$cur_amt;
	$sql="UPDATE tblbilling SET num_of_persons='".$pers."', amount='".$amount."' WHERE id='".$b1."'";
	$update=$con->query($sql);
?>