 
 <?php
  session_start();

     include("includes/connection.php");
     if (isset($_COOKIE['cust_id']) && !isset($_SESSION['cust_id'])) {
       $id = $_COOKIE['cust_id'];

     }else {
          $id = $_SESSION['cust_id'];
          
        }
     
     $qry = "SELECT * FROM tblwatchlist WHERE cust_id='".$id."'";
     $result=$con->query($qry);
     $num_rows = mysqli_num_rows($result);
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

<style type="text/css">
                            .dropbtn {
    background-color: #222222;
    color: #9d9d9d;
    padding: 16px;
    font-size: 14px;
    border: none;
    cursor: pointer;
    border-radius: 10px;    
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
    background-color: #f1f1f1;
    border-radius:10px;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
    border-radius: 10px;    
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color:  #222222;
    border-radius: 10px;
    color: white;
}

.disp
{
  position: relative;
  float: left;
  width:  150px;
  height: 180px;
  padding: 20px;
}
</style>

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
                <img style="" src="assets/images/header.jpg"></img>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="homepage.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <!-- <li>
                        <a href="#contact"><i class="fa fa-fw fa-phone"></i> Contact us</a>
                    </li> -->
                     
                </ul>

                 <?php
                        $qry = "SELECT * FROM tblcustomer WHERE cust_id = '$id'";
                        $result=$con->query($qry);
                        while($row=$result->fetch_array()) 
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
                            <a href="watchlist.php"><i class="fa fa-fw fa-play"></i> Watchlist <?php echo "<b>(".$num_rows.")</b>"; ?></a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
      <img src="assets/images/this.jpg" alt="Wallpaper">
    </div>

    <div class="item">
      <img src="assets/images/this.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="assets/images/this.jpg" alt="New York">
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
    <br>
    <div class="dropdown">
                      <button class="dropbtn"><i class="fa fa-fw fa-filter"></i> Filter</button>
                      <div class="dropdown-content">
            <form method="POST" action="#">
                        <br>

                         &nbsp &nbsp &nbsp <b> GENRE </b> <br>
                         &nbsp &nbsp &nbsp<label class="checkbox-inline">
                            <input type="checkbox" class="checkbox" id="checkbox1" name="checkbox[]" value="Action">Action
                        </label><br>

                         &nbsp &nbsp &nbsp<label class="checkbox-inline">
                            <input type="checkbox" class="checkbox" id="checkbox1" name="checkbox[]" value="Adventure">Adventure
                        </label><br>

                         &nbsp &nbsp &nbsp<label class="checkbox-inline">
                            <input type="checkbox" class="checkbox" id="checkbox1" name="checkbox[]" value="Comedy">Comedy
                        </label><br>

                        &nbsp &nbsp &nbsp<label class="checkbox-inline">
                            <input type="checkbox" class="checkbox" id="checkbox1" name="checkbox[]" value="Drama">Drama
                        </label><br>

                        &nbsp &nbsp &nbsp<label class="checkbox-inline">
                            <input type="checkbox" class="checkbox" id="checkbox1" name="checkbox[]" value="Musical">Musical
                        </label><br>

                         &nbsp &nbsp &nbsp<label class="checkbox-inline">
                            <input type="checkbox" class="checkbox" id="checkbox1" name="checkbox[]" value="Horror">Horror
                        </label><br>

                         &nbsp &nbsp &nbsp<label class="checkbox-inline">
                            <input type="checkbox" class="checkbox" id="checkbox1" name="checkbox[]" value="Thriller">Thriller
                        </label><br>

                         &nbsp &nbsp &nbsp<label class="checkbox-inline">
                            <input type="checkbox" class="checkbox" id="checkbox1" name="checkbox[]" value="Romance">Romance
                        </label><br>

                        &nbsp &nbsp &nbsp<label class="checkbox-inline">
                            <input type="checkbox" class="checkbox" id="checkbox1" name="checkbox[]" value="Sci-fi">Sci-fi
                        </label><br><br>

                        <!--<div class="form-group input-group">
                            &nbsp &nbsp &nbsp <b> YEAR RELEASED </b> <br>
                                    &nbsp &nbsp &nbsp<input type="number" min="1900" max="2020" step="1" name="year" id="year" value="2017" class="form-control" style="width:270px; padding-left: 20px;"> 
                                </div>-->

                         <!--&nbsp &nbsp &nbsp <b> RELEASE </b> <br>

                         &nbsp &nbsp &nbsp<label class="checkbox-inline">
                            <input type="checkbox" class="checkbox" id="checkbox1" name="checkbox[]" value="Action">2015
                        </label><br>

                        &nbsp &nbsp &nbsp<label class="checkbox-inline">
                            <input type="checkbox" class="checkbox" id="checkbox1" name="checkbox[]" value="Action">2016
                        </label><br>

                        &nbsp &nbsp &nbsp<label class="checkbox-inline">
                            <input type="checkbox" class="checkbox" id="checkbox1" name="checkbox[]" value="Action">2017
                        </label><br><br>-->

                         &nbsp &nbsp &nbsp<button type="submit" class="btn btn-primary" name="btnsubmit" id="btnsubmit"><i class="fa fa-fw fa-filter"></i>FILTER</button>
                         <br>
                         <br>

                      </div>
                    </div>
        </form>
        <a href="homepage.php"><button class="dropbtn" id="ref" name="ref">Refresh</button></a>
        <form  method="POST" action="#">
            <div class="form-group">
                          <select class="text-field2" style="border: 1px solid #a6a6a6;
                              width: 100px;
                              height: 30px;
                              border-radius: 3px;
                              padding-left: 10px;
                              color: #6c6c6c;
                              background: #FDFDFF;
                              outline: none;
                              font-family: 'Sans Serif';" name="filter2" id="filter2">
                            <option>All</option>
                            <option>Title</option>
                            <option>Artist</option>
                            <option>Director</option>

                          </select> <input type="text" name="txt2" style="border: 1px solid #a6a6a6;
                              width: 200px;
                              height: 30px;
                              border-radius: 3px;
                              padding-left: 10px;
                              color: #6c6c6c;
                              background: #FDFDFF;
                              outline: none;
                              font-family: 'Sans Serif';" id="txt2" placeholder="Search.."> <button type="submit" class="dropbtn" id="btnsubmit2" name="btnsubmit2">Search</button>

            </div>
        </form>
        <hr>
        <?php
            if(isset($_POST['btnsubmit']))
            {
                function getGenre ($value)
                {
                    if (isset($_POST[$value])) {
                        //foreach ($_POST[$value] as $codes) {
                            //$string .= $codes . " ";
                            $string=implode(",", $_POST[$value]);
                        //}
                    }

                    return $string;
                }
                $genres = getGenre('checkbox');
                //$year = $_POST['year'];

                $qry = "SELECT * FROM tblmovie WHERE genre LIKE '%$genres%'";
                $result=$con->query($qry);
                if(mysqli_num_rows($result) != 0)
                {
                 while($row=$result->fetch_array()) 
                 {
                    $id = $row['movie_id'];
                    $title = $row['title'];
                    $genre = $row['genre'];
                    $i = $row['image'];
                    $img = "assets/images/" . $i;
        ?>
                <div class="disp">  
                    <a href="movie_info.php?id=<?php echo $id;?>">
                        <img class="img-responsive" src="<?php echo $img; ?>" alt="" width="150" height="180">
                    </a><br>
                </div>
        <?php 
                }
                }
                else
                {
                    echo "<center><b><h1 style='color: white;'>No Results</h1></b></center>";
                }
            }
            else if(isset($_POST['btnsubmit2']))
            {
                $txt2 = $_POST['txt2'];
                $filter2 = $_POST['filter2'];

                if($filter2=="All")
                {
                    $qry = "SELECT * FROM tblmovie WHERE title LIKE '%$txt2%' ORDER BY title DESC LIMIT 14";
                    $result=$con->query($qry);
                    while($row=$result->fetch_array())
                    {
                        $id = $row['movie_id'];
                        $title = $row['title'];
                        $genre = $row['genre'];
                        $i = $row['image'];
                        $img = "assets/images/" . $i;
                    ?>

                        
                        <div class="disp">  
                            <a href="movie_info.php?id=<?php echo $id;?>">
                                <img class="img-responsive" src="<?php echo $img; ?>" alt="" width="150" height="180">
                            </a><br>
                        </div>
                <?php
                    }
                }
                else if($filter2=="Title")
                {
                    $qry = "SELECT * FROM tblmovie WHERE title LIKE '%$txt2%' ORDER BY title DESC LIMIT 14";
                    $result=$con->query($qry);
                    while($row=$result->fetch_array())
                    {
                        $id = $row['movie_id'];
                        $title = $row['title'];
                        $genre = $row['genre'];
                        $i = $row['image'];
                        $img = "assets/images/" . $i;
                    ?>

                        
                        <div class="disp">  
                            <a href="movie_info.php?id=<?php echo $id;?>">
                                <img class="img-responsive" src="<?php echo $img; ?>" alt="" width="150" height="180">
                            </a><br>
                        </div>
                <?php
                    }
                }
                else if($filter2=="Artist")
                {
                    $qry = "SELECT * FROM tblmovie WHERE artist LIKE '%$txt2%' ORDER BY title DESC LIMIT 14";
                    $result=$con->query($qry);
                    while($row=$result->fetch_array())
                    {
                        $id = $row['movie_id'];
                        $title = $row['title'];
                        $genre = $row['genre'];
                        $i = $row['image'];
                        $img = "assets/images/" . $i;
                    ?>

                        
                        <div class="disp">  
                            <a href="movie_info.php?id=<?php echo $id;?>">
                                <img class="img-responsive" src="<?php echo $img; ?>" alt="" width="150" height="180">
                            </a><br>
                        </div>
                <?php
                    }
                }
                else if($filter2=="Director")
                {
                    $qry = "SELECT * FROM tblmovie WHERE director LIKE '%$txt2%' ORDER BY title DESC LIMIT 14";
                    $result=$con->query($qry);
                    while($row=$result->fetch_array())
                    {
                        $id = $row['movie_id'];
                        $title = $row['title'];
                        $genre = $row['genre'];
                        $i = $row['image'];
                        $img = "assets/images/" . $i;
                    ?>

                        
                        <div class="disp">  
                            <a href="movie_info.php?id=<?php echo $id;?>">
                                <img class="img-responsive" src="<?php echo $img; ?>" alt="" width="150" height="180">
                            </a><br>
                        </div>
                <?php
                    }
                }
            }
            else
            {
        ?>
    <div class="container">
        <b><h3 style="color: white;">Top Rated</h3></b><br>
        <div class="row">

            <?php
         $qry = "SELECT * FROM tblmovie ORDER BY rating DESC LIMIT 14";
         $result=$con->query($qry);
         while($row=$result->fetch_array()) 
         {
            $id = $row['movie_id'];
            $title = $row['title'];
            $genre = $row['genre'];
            $i = $row['image'];
            $img = "assets/images/" . $i;
        ?>

            
                <div class="disp">  
                    <a href="movie_info.php?id=<?php echo $id;?>">
                        <img class="img-responsive" src="<?php echo $img; ?>" alt="" width="150" height="180">
                    </a><br>
                </div>
                
                <?php
                        }
                    ?>

        </div>
    </div>
    <div class="container">
    <br>
        <hr>
        <b><h3 style="color: white;">Top Viewed</h3></b><br>
        <div class="row">

            <?php
         $qry = "SELECT * FROM tblmovie ORDER BY watched DESC LIMIT 14";
         $result=$con->query($qry);
         while($row=$result->fetch_array()) 
         {
            $id = $row['movie_id'];
            $title = $row['title'];
            $genre = $row['genre'];
            $i = $row['image'];
            $img = "assets/images/" . $i;
        ?>

            
                <div class="disp">  
                    <a href="movie_info.php?id=<?php echo $id;?>">
                        <img class="img-responsive" src="<?php echo $img; ?>">
                    </a><br>
                </div>
                
                <?php
                        }
                      }
                    ?>

        </div>
    </div>
    <div style="background-color: #383838;">
        <!-- /.row -->

        

        <!-- Pagination -->
        <!-- <div class="row text-center">
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
        </div> -->
        <div class="row">
                <div class="col-lg-12">
                  <hr>
                   <center> <p style="color: white;">Copyright &copy; Movie Suites - Dumaguete Website 2017</p>
                   </center>
                  <hr>
                </div>
        </div>



        <!-- /.row -->
        </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
