 
 <?php
  session_start();

     include("../includes/connection.php");
     if (isset($_COOKIE['cust_id']) && !isset($_SESSION['cust_id'])) {
       $id = $_COOKIE['cust_id'];

     }else {
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

      background-image: url(../assets/images/bg2.jpg);
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



    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img style="" src="../assets/images/header.jpg"></img>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="homepage.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-play"></i> Genre</a>
                    </li>
                    <li>
                        <a href="#contact"><i class="fa fa-fw fa-phone"></i> Contact us</a>
                    </li>
                     
                </ul>

                 <?php
                        $result = mysql_query("SELECT * FROM tblcustomer WHERE cust_id = '$id'");

                        while($row=mysql_fetch_array($result)) 
                        {
                        $cust_id =  $row['cust_id'];
                         $fname =  $row['fname'];
                         $mname =  $row['mname'];
                         $lname =  $row['lname'];
                         $num =  $row['contact_num'];
                         $uname =  $row['username'];
                         $password =  $row['password'];


                        }
                        ?>


                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $fname . " " . $lname; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="watchlist.php"><i class="fa fa-fw fa-play"></i> Watchlist</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                </ul>




            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
      <!-- /.col-sm-4 -->
      <div id="page-wrapper">

         <div class="col-xs-12 text-center">
            <div class="jumbotron">
                    <h1>Hello, <?php echo $fname; ?>!</h1>
                     <p><a href="#" class="btn btn-primary btn-lg" role="button">My movies &raquo;</a>
                    </p>
              </div>
          </div>
            
            <div class="col-lg-3">
              
                       
            </div>   

             <div class="col-lg-3">
             

              <form role="form"  method="POST" action="updateprofile.php?id=<?php echo $cust_id;?>">
                 <div class="form-group input-group">
                     <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" class="form-control" placeholder="Firstname" value="<?php echo $fname; ?>" id="fname" name="fname">
                  </div>

                  <div class="form-group input-group">
                     <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" class="form-control" placeholder="Middlename"  value="<?php echo $mname; ?>" id="mname" name="mname">
                  </div>

                  <div class="form-group input-group">
                     <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" class="form-control" placeholder="Lastname"  value="<?php echo $lname; ?>" id="lname" name="lname">
                  </div>

           
                  <button type="submit" id="btnsubmit2" name="btnsubmit2" class="btn btn-lg btn-primary">Update profile</button>
 
             </div>
             <br>

              <div class="col-lg-3">

               

                <div class="form-group input-group">
                     <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                          <input type="text" class="form-control" placeholder="Contact number"  value="<?php echo $num; ?>"id="cnum" name="cnum">
                </div>

                <div class="form-group input-group">
                     <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" class="form-control" placeholder="Username"  value="<?php echo $uname; ?>" id="uname" name="uname">
                </div>

                 <div class="form-group input-group">
                     <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" class="form-control" placeholder="Your password" id="pword" name="pword">
                </div>

                <br>
                <br>
                <br>
                 </form>
              </div> 

              <div class="col-lg-3">

              </div>     

                 <!-- ongoing reservation ------>

               <div class="col-lg-12">

                <div class="col-lg-2">


                </div>
                <div class="col-lg-8">

                  <h1 class="text-control" style="color:white;"> Pending reservation </h1>
                  <div class="table-responsive">

                            <table class="table table-bordered table-hover table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th style="color:white;background-color:gray;">Movies</th>
                                        <th style="color:white;background-color:gray;">Date</th>
                                        <th style="color:white;background-color:gray;">Time</th>
                                        <th style="color:white;background-color:gray;">Status</th>
                                    </tr>


                        <?php
                       $result = mysql_query("SELECT tblmovie.movie_id, tblmovie.title, tblreservation.movie_id, tblreservation.cust_id, tblreservation.date_reserved, tblreservation.time, tblreservation.status, tblreservation.reserve_id FROM tblmovie INNER JOIN tblreservation ON tblmovie.movie_id = tblreservation.movie_id WHERE tblreservation.cust_id = '$id' ORDER BY date_reserved DESC  "); 
                     
                        while($row=mysql_fetch_array($result)) 
                        {
                              $cust_id =  $row['cust_id'];
                             $status =  $row['status'];
                             $movie =  $row['title'];
                             $date =  $row['date_reserved'];
                             $time =  $row['time'];
                        
                        ?>

                        <?php 
                          if ($status == "PENDING"){
                        ?>

                                    <tr>
                                        <th style="color:white;background-color:black;"><?php echo $movie; ?></th>
                                        <th style="color:white;background-color:black;"><?php echo $date; ?></th>
                                        <th style="color:white;background-color:black;"><?php echo $time; ?></th>
                                        <th style="color:white;background-color:black;"><?php echo $status; ?></th>
                                    </tr>

                        <?php } ?>
                          

                          <?php } ?>
                            </table>
                    </div>
                </div>
                <div class="col-lg-2">

                </div>
              </div>

                 <!-- end of ongoing reservation ------>


              <!-- transaction history ------>

              
              <div class="col-lg-12">

                <div class="col-lg-2">


                </div>
                <div class="col-lg-8">

                  <h1 class="text-control" style="color:white;"> Transaction History </h1>
                  <div class="table-responsive">

                            <table class="table table-bordered table-hover table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th style="color:white;background-color:gray;">Movies</th>
                                        <th style="color:white;background-color:gray;">Room</th>
                                        <th style="color:white;background-color:gray;">Date</th>
                                        <th style="color:white;background-color:gray;">Time</th>
                                    </tr>


                        <?php
                       $result = mysql_query("SELECT tblrooms.room_id, tblrooms.room_name, tbltransactions.transaction_id, tbltransactions.cust_id, tbltransactions.movies, tbltransactions.room_id, tbltransactions.time, tbltransactions.trans_date FROM tblrooms INNER JOIN tbltransactions ON tblrooms.room_id = tbltransactions.room_id WHERE tbltransactions.cust_id = '$id' ORDER BY trans_date DESC  "); 
                     
                        while($row=mysql_fetch_array($result)) 
                        {
                         $cust_id =  $row['cust_id'];
                         $movie =  $row['movies'];
                         $date =  $row['trans_date'];
                         $time =  $row['time'];
                         $room =  $row['room_name'];

                        
                        ?>



                                    <tr>
                                        <th style="color:white;background-color:black;"><?php echo $movie; ?></th>
                                        <th style="color:white;background-color:black;"><?php echo $room; ?></th>
                                        <th style="color:white;background-color:black;"><?php echo $date; ?></th>
                                        <th style="color:white;background-color:black;"><?php echo $time; ?></th>
                                    </tr>


                          

                          <?php } ?>
                            </table>
                    </div>
                </div>
                <div class="col-lg-2">

                </div>
              </div>

                 <!-- end of transaction history ------>
           


                 </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
