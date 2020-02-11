<?php
	$qry = "SELECT * FROM tblcomment WHERE mid = '".$mid."'";
	$result=$con->query($qry);
	while ($row = $result->fetch_array())
    {
    	$cname = $row['cust_name'];
    	$comment = $row['comment'];
?>
		<div id="com">
			<b style="color: blue;"><?php echo $cname; ?></b>
			<br>
			<p><?php echo $comment; ?></p>
			<br>
		</div>
<?php
    }
?>