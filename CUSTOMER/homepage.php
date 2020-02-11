 
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
                         $fname =  $row['fname'];
                         $mname =  $row['mname'];
                         $lname =  $row['lname'];


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

                <div class="col-sm-3 col-md-3 pull-right">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                        <div class="input-group-btn">
                         <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                        </div>

                    </form>


                 </div>


            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <div id="page-wrapper" style="background-color: #333;">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="../assets/images/this.jpg" alt="Wallpaper">
    </div>

    <div class="item">
      <img src="../assets/images/this.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="../assets/images/this.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Suggestion

                
                </h1>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html" style="font-weight:bold;"><i class="fa fa-fw fa-fire"></i> Latest movie</a>
                    </li>
                    <li>
                        <a href="index.html" style="font-weight:bold;"><i class="fa fa-fw fa-play"></i> Top views</a>
                    </li>
                    <li>
                        <a href="index.html"style="font-weight:bold;"><i class="fa fa-fw fa-star"></i> Top ratings</a>
                    </li>
                     
                </ul>

               


            </div>
            </div>
        </div>
        <!-- /.row -->

        
        <!-- Projects Row -->
        <div class="row">

            <?php
         $result = mysql_query("SELECT * FROM tblmovie ORDER BY date_uploaded DESC");
         while($row=mysql_fetch_array($result)) 
         {
            $id = $row['movie_id'];
            $title = $row['title'];
            $genre = $row['genre'];
            $i = $row['image'];
            $img = "../assets/images/" . $i;
        ?>

            
                <div class="col-xs-2">  
                    <a href="movie_info.php?id=<?php echo $id;?>">
                        <img class="img-responsive" src="<?php echo $img; ?>" data-tags="<?php echo $genre;?>" width="150" height="180">
                    </a><br>
                </div>
                
                <?php
                        }
                    ?>
       
        <!-- /.row -->

        <!-- Projects Row
        <div class="row">
            <div class="col-sm-2 portfolio-item">
                    <a href="#">
                       <img class="img-responsive" src="sample.png" alt="" width="150" height="180">
                    </a>
            </div>
            <div class="col-sm-2 portfolio-item">
                    <a href="#">
                       <img class="img-responsive" src="sample.png" alt="" width="150" height="180">
                    </a>
            </div>
            <div class="col-sm-2 portfolio-item">
                    <a href="#">
                       <img class="img-responsive" src="sample.png" alt="" width="150" height="180">
                    </a>
            </div>
            <div class="col-sm-2 portfolio-item">
                    <a href="#">
                       <img class="img-responsive" src="sample.png" alt="" width="150" height="180">
                    </a>
            </div>
            <div class="col-sm-2 portfolio-item">
                    <a href="#">
                       <img class="img-responsive" src="sample.png" alt="" width="150" height="180">
                    </a>
            </div>
            <div class="col-sm-2 portfolio-item">
                    <a href="#">
                       <img class="img-responsive" src="sample.png" alt="" width="150" height="180">
                    </a> 
            </div> -->

        </div>
        <!-- /.row -->

       <div class="text-right">
                                    <a href="#" style="color:white;">View all <i class="fa fa-arrow-right"></i></a>
                        </div>

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>

            </div>
        </div>

        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer id="contact">
            <div class="row">
                <div class="col-lg-12">
                   <center> <p style="color: white;">Copyright &copy; Movie Suites - Dumaguete Website 2017</p> 

<div class="col-md-12">
                 
                   
                        <a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a> &nbsp


                      <a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a> &nbsp


                       <a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a>&nbsp



                     <a href="#" class="icoInstagram" title="Linkedin"><i class="fa fa-instagram"></i></a>


 
                    
                </div>
                    </center>


                </div>
            </div>
            <!-- /.row -->

           

        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
