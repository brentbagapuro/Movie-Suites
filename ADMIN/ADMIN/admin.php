 <?php
  session_start();

     include("../../includes/connection.php");
     if (isset($_COOKIE['adm_id']) && !isset($_SESSION['adm_id'])) {
       $id = $_COOKIE['adm_id'];

     }else {
          $id = $_SESSION['adm_id'];
          
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

    <title>Movie Suites</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img style="" src="../../assets/images/header.jpg"></img>
                <a style="font-family:Helvetica; color:white; font-size:20px;" href="receptionist.php">Admin</a>
            </div>

             <?php
                        $qry = "SELECT * FROM tblemployee WHERE emp_id = '$id'";
                        $result=$con->query($qry);
                        while($row=$result->fetch_array()) 
                        {
                         $fname =  $row['fname'];
                         $mname =  $row['mname'];
                         $lname =  $row['lname'];


                        }
                        ?>

            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $fname . " " . $lname; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="admin.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="addmovie.php"><i class="fa fa-fw fa-film"></i> Movie</a>
                    </li>
                    <li>
                        <a href="adduser.php"><i class="fa fa-fw fa-user"></i> Employee</a>
                    </li>
                    <li>
                        <a href="addrooms.php"><i class="fa fa-fw fa-home"></i> Rooms</a>
                    </li>
                    <li>
                        <a href="timesettings.php"><i class="fa fa-clock-o"></i> Time settings</a>
                    </li>
                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                </div>
                <!-- /.row -->

               

              
                <!-- /.row -->

                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Transaction no.</th>
                                                <th>Customer's name</th>
                                                <th>Room no.</th>
                                                <th>Movie(s)</th>
                                                <th>No. of persons</th>
                                                <th>Transaction Date</th>
                                                <th>Start Time</th>
                                                <th>End time</th>
                                                <th>Amount (Php)</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php 
                                            $cnt=0;
                                            $qry = "SELECT * FROM tbltransactions ORDER BY trans_date DESC LIMIT 10";
                                            $result=$con->query($qry);
                                            $ms = array();
                                                while($row=$result->fetch_array()) 
                                                {
                                                    $cnt++;
                                                 $trans_id =  $row['transaction_id'];
                                                 $name =  $row['cust_name'];
                                                 $room =  $row['room'];
                                                 $movies =  $row['movies'];
                                                 $time =  $row['time'];
                                                 $end =  $row['end_time'];
                                                 $persons =  $row['num_of_persons'];
                                                 $date =  $row['trans_date'];
                                                  $amount =  $row['amount'];

                                                $ms = explode(",", $movies);

                                            ?>
                                            <tr>
                                                <td><?php echo $trans_id; ?></td>
                                                <td><?php echo $name; ?></td>
                                                <td><?php echo $room; ?></td>
                                                <td><?php foreach($ms as $var){echo "<ul><li>".$var . "</li></ul>";} ?></td>
                                                <td><?php echo $persons; ?></td>
                                                <td><?php echo $date; ?></td>
                                                <td><?php echo $time; ?></td>
                                                <td><?php echo $end; ?></td>
                                                <td><?php echo $amount; ?></td>
                                            </tr>
                                          
                                        </tbody>

                                        <?php } ?>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="reports.php">View reports <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-play fa-fw"></i> Most Watched Movie</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>No. of watched</th>
                                                <th>Movie title</th>
                                                <th>Genre</th>
                                                <th>Duration time</th>
                                                <th>Year</th>
                                                <th>Artist(s)</th>
                                                <th>Director</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php 

                                            $qry = "SELECT * FROM tblmovie ORDER BY watched DESC LIMIT 10";
                                            $result=$con->query($qry);

                                                while($row=$result->fetch_array()) 
                                                {
                                                 $movie_id =  $row['movie_id'];
                                                 $watched =  $row['watched'];
                                                 $title =  $row['title'];
                                                 $genre =  $row['genre'];
                                                 $duration =  $row['duration'];
                                                 $year =  $row['year'];
                                                 $artist =  $row['artist'];
                                                 $director =  $row['director'];


                                                 /*$data = "SELECT *FROM tblmovie";
                                              
                                                $attribid = $data;

                                                 $count = "SELECT count(*) FROM tblmovie";
                                                 $database_count = mysql_query($count);
                                                 //Declare the Array
                                                 $DuetiesDesc = array();
                                                 $database_count=mysql_fetch_assoc($database_count);
                                                 $rank =  $database_count['count(*)']; */

                                               

                                                 

                                            ?>
                                            <tr>

                                                <td><?php echo $watched; ?> <br></td>
                                                <td><?php echo $title; ?></td>
                                                <td><?php echo $genre; ?></td>
                                                <td><?php echo $duration; ?></td>
                                                <td><?php echo $year; ?></td>
                                                <td><?php echo $artist; ?></td>
                                                <td><?php echo $director; ?></td>
                                            </tr>
                                          
                                        </tbody>

                                        <?php } ?>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="reports1.php">View reports <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-play fa-fw"></i> Top Rated Movies</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Rating</th>
                                                <th>Movie title</th>
                                                <th>Genre</th>
                                                <th>Duration time</th>
                                                <th>Year</th>
                                                <th>Artist(s)</th>
                                                <th>Director</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php 

                                            $qry = "SELECT * FROM tblmovie ORDER BY rating DESC LIMIT 10";
                                            $result=$con->query($qry);
                                                while($row=$result->fetch_array()) 
                                                {
                                                 $movie_id =  $row['movie_id'];
                                                 $rating =  $row['rating'];
                                                 $title =  $row['title'];
                                                 $genre =  $row['genre'];
                                                 $duration =  $row['duration'];
                                                 $year =  $row['year'];
                                                 $artist =  $row['artist'];
                                                 $director =  $row['director'];


                                                 /*$data = "SELECT *FROM tblmovie";
                                              
                                                $attribid = mysql_query($data) or die(mysql_error);

                                                 $count = "SELECT count(*) FROM tblmovie";
                                                 $database_count = mysql_query($count);
                                                 //Declare the Array
                                                 $DuetiesDesc = array();
                                                 $database_count=mysql_fetch_assoc($database_count);
                                                 $rank =  $database_count['count(*)']; */

                                               

                                                 

                                            ?>
                                            <tr>

                                                <td><?php echo $rating; ?> <br></td>
                                                <td><?php echo $title; ?></td>
                                                <td><?php echo $genre; ?></td>
                                                <td><?php echo $duration; ?></td>
                                                <td><?php echo $year; ?></td>
                                                <td><?php echo $artist; ?></td>
                                                <td><?php echo $director; ?></td>
                                            </tr>
                                          
                                        </tbody>

                                        <?php } ?>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="reports2.php">View reports <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Customer reports</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <b style="font-size: 15px;">Browse customer</b>   
                                    <button class="btn btn-default" name="search1" id="btnreport" onclick="browseCustomer();">Browse</button>
                                </div>
                            </div>
                        </div>
                    </div>


        <div class="modal fade" id="namemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel1">Registered customers</h4>
        </div>

        <div class="modal-body">
                
                      <div class="form-group">
                          <select class="text-field2" style="border: 1px solid #a6a6a6;
                              width: 100px;
                              height: 30px;
                              border-radius: 3px;
                              padding-left: 10px;
                              color: #6c6c6c;
                              background: #FDFDFF;
                              outline: none;
                              font-family: 'Sans Serif';" name="filter" id="filtername">
                            <option>All</option>
                            <option>Title</option>
                            <option>Genre</option>
                            <option>Artist</option>
                            <option>Director</option>

                          </select> <input type="text" name="search" style="border: 1px solid #a6a6a6;
                              width: 200px;
                              height: 30px;
                              border-radius: 3px;
                              padding-left: 10px;
                              color: #6c6c6c;
                              background: #FDFDFF;
                              outline: none;
                              font-family: 'Sans Serif';" id="searchname" placeholder="Search.."> <input type="submit" name="search1" id="searchname1" value="Search">

                      </div>
        <div class="table-responsive table-bordered"  >
                        <table class="table table-hover" id="table1">
                    <tr>
                   
                            <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;"> Customer ID</td>
                          <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;"> Name</td>
                          <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;"> Contact No.</td>
                          
                         
                    </tr>
                    <?php
                      $qry = "SELECT * FROM tblcustomer"; 
                      $result=$con->query($qry);
                              while($row=$result->fetch_array()) 
                              {
                              $cust_id = $row['cust_id'];  
                              $fname = $row['fname'];
                              $lname = $row['lname'];
                              $mname = $row['mname'];
                              $contactno = $row['contact_num'];
                              $fullname = $fname . " " . $mname . " " . $lname;

                    ?>
                          <tr class="closemodal">
                               <td style="font-size:13px;"><?php echo $cust_id; ?></td>
                               <td style="font-size:13px;"><?php echo $fullname; ?></td>
                               <td style="font-size:13px;"><?php echo $contactno; ?></td>
                          </tr>
                    <?php } ?>
                      </table>
                      </div>

        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
            </div>
        </div>
      </div>


                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

    <script>
        function browseCustomer() {
            $('#namemodal').modal("show");
        }

        var table = document.getElementById("table1");

        for(var i = 1; i < table.rows.length; i++)
          {
            table.rows[i].onclick = function()
            {
              var id = this.cells[0].innerHTML;
              window.location.href = "reports3.php?id="+id;

              $(function() {
                    $('.modal').modal('hide');
              });
            };
          }
    </script>

</body>

</html>
