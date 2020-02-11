<?php

	setcookie("cust_id",$cust_id, time() - 3600);
	header("Location:index.php")

?>