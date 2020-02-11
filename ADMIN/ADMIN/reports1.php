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

    <!-- Morris Charts CSS -->

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

       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   <center> <div class="col-lg-12">
                        <h1 class="page-header"> <img style="" src="../../assets/images/header.jpg"></img>
                         Online Reservation and Billing System <small>Reports</small>
                        </h1>
                       
                    </div></center>
                </div>
                <!-- /.row -->

                </div>
                <!-- /.row -->

               

              
                <!-- /.row -->

                <div class="row">
                   
                  




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

                                            $qry = "SELECT * FROM tblmovie ORDER BY watched DESC";
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
                                              
                                                $attribid = mysql_query($data) or die(mysql_error);

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

                                 <div class="text-center">
                                    <button type="button" class="btn btn-primary" name="btnprint" id="btnprint" onclick="printpage()"><i class="fa fa-print"></i> PRINT</button>
                                 </div>

                                 <style type="text/css">

                                    @media print {
                                          /* style sheet for print goes here */
                                          .btn {  display:none; }
                                        }

                                 </style>

                                 <script>
                                    function printpage()
                                      {
                                      window.print()
                                      }
                                </script>

                                 <div class="text-left">
                                   <a href="admin.php"> <i class="fa fa-arrow-circle-left"></i> Go back </a>
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

</body>

</html>
