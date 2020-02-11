<?php
	$result = mysql_query("SELECT * FROM tblsms");
	while($row=mysql_fetch_array($result))
    {
        $phone = $row['contact'];
    }

	send_sms($phone);

	function send_sms($phone)
        {
            $username = "639056939267";
            $password = "6413";
            $mobile = $phone;
            $sender = "SenderID";
            $message = "Thank you for visiting Movie Suites. We hope you enjoyed your time here and we would very appreciate if you would visit our website to rate the movie you've watched and your experience here. Have a good day.";
            $url = "http://sendpk.com/api/sms.php?username=".$username."&password=".$password."&mobile=".$mobile."&sender=".urlencode($sender)."&message=".urlencode($message)."";

            $ch = curl_init();
            $timeout = 30;
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
            $responce = curl_exec($ch);
            curl_close($ch);
            /*Print Responce*/
            echo $responce;
        }
        $res2 = mysql_query("DELETE FROM tblsms");
?>