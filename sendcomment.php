<?php
	include("includes/connection.php");

	$comment = $_POST['Comment'];
	$cust_id = $_POST['Cust_id'];
	$mid = $_POST['Mid'];

	$qry = "SELECT * FROM tblcustomer WHERE cust_id = '".$cust_id."'";
	$result=$con->query($qry);
	while($row=$result->fetch_array()) 
    {
    	$fname = $row['fname'];
    	$lname = $row['lname'];
    	$mname = $row['mname'];
    	$fullname = $fname . " " . $lname;
    }

//    $filtdcom = wordFilter($comment);

//    function wordFilter($comment)
//	{
	    $filter_terms = array('\bass(es|hole|holes?)?\b', '\bshit(e|ted|ting|ty|head)?\b', '\bfuck(er|ed|ing)?\b', '\bbitch(es|ing)?\b', '\bcunt(s)?\b', '\bpussy\b', '\bpussies\b', '\bpiste(ng)?\b', '\bpeste(ng)?\b', '\byawa(r|rd|rds|rdz)?\b', '\byati\b', '\byate\b', '\bputa(ng)?\b', '\bpota(ng)\b', '\btangina\b', '\bgago\b', '\bpunyeta\b', '\boten\b', '\botin\b', '\bbilat\b');
	    $filtered_text = $comment;
	    foreach($filter_terms as $word)
	    {
	        $match_count = preg_match_all('/' . $word . '/i', $comment, $matches);
	        for($i = 0; $i < $match_count; $i++)
	            {
	                $bwstr = trim($matches[0][$i]);
	                $filtered_text = preg_replace('/\b' . $bwstr . '\b/', str_repeat("*", strlen($bwstr)), $filtered_text);
	            }
	    }
//	    return $filtered_text;
//	}

    $sql = "INSERT INTO tblcomment VALUES (' ', '$cust_id', '$fullname', '$mid', '$filtered_text')";
    $insert=$con->query($sql);
?>