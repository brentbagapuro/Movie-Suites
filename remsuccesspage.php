<?php
	session_start();

    include("includes/connection.php");
    if (isset($_COOKIE['cust_id']) && !isset($_SESSION['cust_id'])) 
    {
        $id = $_COOKIE['cust_id'];
    }
    else
    {
        $id = $_SESSION['cust_id'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie Suites - Dumaguete</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="js/bootstrap.min.js" rel="stylesheet">

    <link href="js/bootstrap.js" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

     <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

     <style type="text/css">


     body{

      background-image: url(assets/images/bg2.jpg);
     }

      .box {
        text-align: left;
        background-color:rgba(248,247,216,0.7);

        color:black;
        font-weight:bold;
        margin:120px auto;
        height: auto;
        display: inline-block;
        width: 45%;
        opacity: 0.5px;
        border-radius: 10px;


    }
     </style>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    
	<center>
		
        <div class="box">
            <center>
                 <span class="input-group-addon"><i class="fa fa-info-circle fa-3x"></i></span>
                 <h2> Thank you for making a reservation</h1><br>
                    <h4>You will be redirected to the home page in 10 seconds. If you wish, you may cancel your reservation in your profile</h3>
                 <br>
                 <br>
            </center>
        </div>		
	</center>
	<script>
		setTimeout(function(){ 
			location.href="homepage.php";
		}, 10000);
	</script>
</body>
</html>