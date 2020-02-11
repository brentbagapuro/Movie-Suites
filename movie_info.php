 
 <?php
  session_start();

     include("includes/connection.php");
     if (isset($_COOKIE['cust_id']) && !isset($_SESSION['cust_id'])) {
       $id = $_COOKIE['cust_id'];

     }else {
          $id = $_SESSION['cust_id'];
          
        }
     
     $qry = "SELECT * FROM tblwatchlist WHERE cust_id='".$id."'";
     $res=$con->query($qry);
     $num_rows = mysqli_num_rows($res);
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
                        <!-- <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li> -->
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
    <style type="text/css">

       
   

    @import url(//netdna.bootst
        rapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 


    
    
    @import url(//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css);



    </style>

    <?php 

            $mid=$_GET['id'];
     $qry = "SELECT * FROM tblmovie WHERE movie_id='".$mid."'";
     $result=$con->query($qry);
     while($row=$result->fetch_array()) 
     {
         $movie_id = $row['movie_id'];  
         $title = $row['title'];
         $artists = $row['artist'];
         $director = $row['director'];
         $genre = $row['genre'];
         $duration = $row['duration'];
         $description = $row['description'];
         $year = $row['year'];
         $i = $row['image'];
         $img = "assets/images/" . $i;
     }

    ?>

     <div class="row" style="background-image: url (assets/images/bg2.jpg);">
                    <div class="col-lg-6">
                         
                             <img class="img-thumbnail" src="<?php echo $img; ?>" >
                                 
                     </div>
              

                    <div class="col-lg-5 text-left">
                    
                    
                       <p><b style="color:white;font-weight:bold; font-size: 30px;"><?php echo $title; ?></b></p>
                       
                       <p style="color:white;" class="mbr-section-lead lead">Description: <?php echo $description; ?></p>

                       <p style="color:white;" class="mbr-section-lead lead">Director: <?php echo $director; ?></p>

                       <p style="color:white;" class="mbr-section-lead lead">Genre: <?php echo $genre; ?></p>

                       <p style="color:white;" class="mbr-section-lead lead">Duration time: <?php echo $duration; ?></p>

                       <p style="color:white;" class="mbr-section-lead lead">Year released: <?php echo $year; ?></p>

                       <p style="color:white;" class="mbr-section-lead lead">Ratings:

<fieldset class="rating">
    <input type="radio" id="star5" class="rat" name="rating" value="5" onclick="postToController();" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <!-- <input type="radio" id="star4half" class="rat" name="rating" value="4.5" onclick="postToController();" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label> -->
    <input type="radio" id="star4" class="rat" name="rating" value="4" onclick="postToController();" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <!-- <input type="radio" id="star3half" class="rat" name="rating" value="3.5" onclick="postToController();" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label> -->
    <input type="radio" id="star3" class="rat" name="rating" value="3" onclick="postToController();" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <!-- <input type="radio" id="star2half" class="rat" name="rating" value="2.5" onclick="postToController();" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label> -->
    <input type="radio" id="star2" class="rat" name="rating" value="2" onclick="postToController();" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <!-- <input type="radio" id="star1half" class="rat" name="rating" value="1.5" onclick="postToController();" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label> -->
    <input type="radio" id="star1" class="rat" name="rating" value="1" onclick="postToController();" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <!-- <input type="radio" id="starhalf" class="rat" name="rating" value="0.5" onclick="postToController();" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label> -->
</fieldset><br><br>




                        


                        <div class="mbr-section-btn">

                        <?php
                            $check=array();
                            $qry="SELECT * FROM tblwatchlist WHERE cust_id='".$id."'";
                            $result=$con->query($qry);
                            while($row=$result->fetch_array())
                            {
                              $check[] = $row['movie_id'];
                            }
                            if(in_array($mid, $check))
                            {
                        ?>
                              <!--<button class="btn btn-lg btn-success" disabled>ADDED TO WATCHLIST</button>-->
    <a class="btn btn-lg btn-success" style="background-color: #f34946; border: #f34946;" <?php echo "href='rem_function2.php?mid=".$mid."'"; ?> >REMOVE FROM WATCHLIST </a>
                        <?php
                            }
                            else
                            {
                        ?>
    <a class="btn btn-lg btn-success" <?php echo "href='add_watchlist.php?mid=".$mid."'"; ?> >ADD TO WATCHLIST </a>
                        <?php
                            }
                        ?>

                          

                        </div>
                        <br><hr>
                        <b><h3 style="color: white;">Comments: </h3></b>
                        <br>
                        <div id="comsec">
                            <?php
                                $qry = "SELECT * FROM tblcomment WHERE mid = '".$mid."'";
                                $result=$con->query($qry);
                                while ($row = $result->fetch_array())
                                {
                                    $cname = $row['cust_name'];
                                    $comment = $row['comment'];
                            ?>
                                    <div id="com">
                                        <b style="color: skyblue;"><?php echo $cname; ?></b>
                                        <br>
                                        <p style="color: white"><?php echo $comment; ?></p>
                                        <br>
                                    </div>
                            <?php
                                }
                            ?>
                        </div>
                        <div id="comment">
                            <textarea id="comtext" cols="100" rows="8" placeholder="Text"></textarea>
                            <br><br>
                            <button class="btn btn-lg btn-success" id="btnsend" onclick="sendComment();">Send</button>
                        </div>


                     </div>
                     
                </div>



                
        <!-- Footer -->
         

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <?php
        $qry = "SELECT * FROM tblmovie WHERE movie_id='".$mid."'";
        $result=$con->query($qry);
        while($row=$result->fetch_array()) 
        {
            $rat = $row['rating'];  
        }
    ?>

    <script>
        var cust_id = '<?php echo $id; ?>';
        function postToController() {
                for (i = 0; i < document.getElementsByName('rating').length; i++) {
                        if(document.getElementsByName('rating')[i].checked == true) {
                            var ratingValue = document.getElementsByName('rating')[i].value;
                            break;
                        }
                }
            var mid = '<?php echo $mid; ?>';
            $.ajax({
                type: 'POST',
                url: 'save_rating.php',
                data: {rating: ratingValue, Mid: mid, Cid: cust_id},
                success: function(response){
                    
                }
            });
        }

        var rat = '<?php echo $rat; ?>';
            $('.rat').each(function(){
                if($(this).val()==rat)
                {
                    $(this).prop('checked', true);
                }
            });

        function sendComment()
        {
            var comment = $('#comtext').val();
            var mid = '<?php echo $mid; ?>';
            $.ajax({
                type: 'POST',
                url: 'sendcomment.php',
                data: {Comment: comment, Cust_id: cust_id, Mid: mid},
                success: function(response){
                  location.reload();
                }
              });
        }
    </script>

</body>

</html>
