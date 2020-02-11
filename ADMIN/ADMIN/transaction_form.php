 <?php
  session_start();

     include("../../includes/connection.php");
     if (isset($_COOKIE['emp_id']) && !isset($_SESSION['emp_id'])) {
       $id = $_COOKIE['emp_id'];

     }else {
          $id = $_SESSION['emp_id'];
          
        }

     /*if(isset($_SESSION['persons']))
     {
      $pers = $_SESSION['persons'];
     }*/
     
  ?><!DOCTYPE html>
  }
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
                <a style="font-family:Helvetica; color:white; font-size:20px;" href="receptionist.php">Receptionist</a>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>Receptionist</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong><?php echo $fname . " " . $lname; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong><?php echo $fname . " " . $lname; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $fname . " " . $lname; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="receptionist.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="addcustomer.php"><i class="fa fa-fw fa-user"></i> Customer</a>
                    </li>
                    <li>
                        <a href="billing.php"><i class="fa fa-fw fa-money"></i> Billing</a>
                    </li>
                    <li class="active">
                        <a href="transaction_form.php"><i class="fa fa-fw fa-plus"></i> Transaction</a>
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
                            Transaction
                            <small>form</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="receptionist.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Transaction
                            </li>
                        </ol>


                        <div class="row">
                       
                      <div class="col-sm-6">

                        <div class="panel panel-info" style="overflow-x:hidden;">
                               <div class="panel-heading">
                                <h3 class="panel-title">Personal Information</h3>
                            </div>
                         <div class="panel-body">
                                <b>Full name:</b>
                               <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Fullname" name="name" id="name" style="width:270px;"><button type="button" id="btnname" class="btn btn-primary" onclick="checkName();">O</button>
                                </div>
                                <b>Contact number:</b>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Contact no." name="contact" id="contact" style="width:270px;">
                                </div>
                                <b>No of persons:</b>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="No of persons" name="persons" id="persons" style="width:270px;">
                                    <button type="button" id="btnpersons" class="btn btn-primary" onclick="checkTextField();">O</button>
                                </div>
                          </div>
                         </div>
                            </div>

                            <div class="col-sm-6">

                        <div class="panel panel-info">
                               <div class="panel-heading">
                                <h3 class="panel-title">Movie to watch</h3>
                            </div>
                         <div class="panel-body">
                            <table id="tblmovies">
                               <div id="movies">

                               </div>
                            </table>
                               <button type="button" class="btn btn-primary" onclick="openMovie();">
                                     Press to select a movie
                                </button>

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
                        <table class="table table-hover" id="table3">
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

      <div class="modal fade" id="occupancy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel1">Available Rooms</h4>
      </div>

        <div class="modal-body">
            <table class="table table-hover" id="table2">
              <div id="test">
                
              </div>
            </table>
        </div>
      </div>
      </div>
      </div>



      <div class="modal fade" id="promomodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel1">Promos</h4>
      </div>

        <div class="modal-body">
            <div id="test2">

            </div>
        </div>
      </div>
      </div>
      </div>

                                <!-- Modal for assignment status -->
        <div class="modal fade" id="movie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel1">Movie list</h4>
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
                              font-family: 'Sans Serif';" name="filter2" id="filter2">
                            <option>All</option>
                            <option>Title</option>
                            <option>Genre</option>
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
                              font-family: 'Sans Serif';" id="txt2" placeholder="Search.."> <button name="search2" id="search2">Search</button>

                      </div>
        <div class="table-responsive table-bordered"  >
                        <table class="table table-hover" id="table1">
                    <tr>
                   
                            <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;"> Movie ID</td>
                          <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;"> Movie Title</td>
                          
                         
                    </tr>
                    <div id="ts">
                  <?php
                    if(isset($_POST['search1']))
                         {
                           $filter = $_POST['filter'];
                           $search = $_POST['search'];

                           if($filter=="Title")
                           {
                              $qry = "SELECT * FROM tblmovie WHERE title LIKE '%$search%'";
                              $result=$con->query($qry);
                              if(mysqli_num_rows($result) > 0)
                              {
                                while($row=$result->fetch_array())
                                {
                                  $movie_id = $row['movie_id'];  
                                  $title = $row['title'];
                    ?>

                                <tr class="closemodal">
                                   <td style="font-size:13px;"><?php echo $movie_id; ?></td>
                                   <td style="font-size:13px;"><?php echo $title; ?></td>
                                  
                                </tr>

                    <?php
                                }//end of title while
                              }//end of if
                              else
                              {
                                ?>
                                <tr>
                                  <td style="font-size:50px;"><center>No Results</center></td>
                                </tr>
                                <?php
                              }
                            }//end of if title
                            if($filter=="Genre")
                           {
                            $qry = "SELECT * FROM tblmovie WHERE genre LIKE '%$search%'";
                            $result=$con->query($qry);
                            if(mysqli_num_rows($result) > 0)
                            {
                            while($row=$result->fetch_array())
                            {
                              $movie_id = $row['movie_id'];  
                              $title = $row['title'];
                             
                            
                           
                    ?>

                          <tr class="closemodal">
                             <td style="font-size:13px;"><?php echo $movie_id; ?></td>
                             <td style="font-size:13px;"><?php echo $title; ?></td>
                          </tr>
                    <?php
                            }//end of genre while
                            }//end of if
                              else
                              {
                                ?>
                                <tr>
                                  <td style="font-size:50px;"><center>No Results</center></td>
                                </tr>
                                <?php
                              }
                              }//end of if genre
                            if($filter=="Artist")
                           {
                            $qry = "SELECT * FROM tblmovie WHERE artist LIKE '%$search%'";
                            $result=$con->query($qry);
                            if(mysqli_num_rows($result) > 0)
                              {
                            while($row=$result->fetch_array())
                            {
                              $movie_id = $row['movie_id'];  
                              $title = $row['title'];
                    ?>

                          <tr class="closemodal">
                             <td style="font-size:13px;"><?php echo $movie_id; ?></td>
                             <td style="font-size:13px;"><?php echo $title; ?></td>
                          </tr>
                    <?php
                          }//end of artist while
                          }//end of if
                              else
                              {
                                ?>
                                <tr>
                                  <td style="font-size:50px;"><center>No Results</center></td>
                                </tr>
                                <?php
                              }
                            }//end of if artist
                            if($filter=="Director")
                           {
                            $qry = "SELECT * FROM tblmovie WHERE director LIKE '%$search%'";
                            $result=$con->query($qry);
                            if(mysqli_num_rows($result) > 0)
                              {
                            while($row=$result->fetch_array())
                            {
                              $movie_id = $row['movie_id'];  
                              $title = $row['title'];
                    ?>

                          <tr class="closemodal">
                             <td style="font-size:13px;"><?php echo $movie_id; ?></td>
                             <td style="font-size:13px;"><?php echo $title; ?></td>
                          </tr>

                    <?php
                              }//end of director while
                              }//end of if
                              else
                              {
                                ?>
                                <tr>
                                  <td style="font-size:50px;"><center>No Results</center></td>
                                </tr>
                                <?php
                              }
                            }//end of if director
                          } //end of isset
                          else
                          {
                              $qry = "SELECT * FROM tblmovie"; 
                              $result=$con->query($qry);
                              while($row=$result->fetch_array()) 
                              {
                              $movie_id = $row['movie_id'];  
                              $title = $row['title'];

                    ?>
                          <tr class="closemodal">
                               <td style="font-size:13px;"><?php echo $movie_id; ?></td>
                               <td style="font-size:13px;"><?php echo $title; ?></td>
                          </tr>
                    <?php } } 
                  ?>
                    

                    </div>
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
                         </div>
                            </div>


                            <div class="col-sm-12">

                        <div class="panel panel-info">
                               <div class="panel-heading">
                                <h3 class="panel-title">Billing information</h3>
                            </div>
                         <div class="panel-body">
                               <button type="button" class="btn btn-primary" name="promolist" onclick="openPromo();">
                                     Promo List
                                </button> <b id="promo"></b><br>
                               Total amount: <b id="amt"></b>
                          <br> Room number: <b id="rnum"></b>
                          </div>
                          <div class="text-right">
                                    <button class="btn btn-primary" id="proceed" style="margin: 10px;">Proceed to checkout</button>
                          </div>
                         </div>

                            </div>
      

                
                    <!-- /.col-sm-4 -->
                </div>

                



            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php
        if(isset($_GET['rid']))
        {
          $rid = $_GET['rid'];
          $result = mysql_query("SELECT * FROM tblreservation WHERE reserve_id='".$rid."'");
          while($row=mysql_fetch_array($result))
          {
            $cid = $row['cust_id'];
            $ms = $row['movie_id'];
            $nos = $row['num_of_persons'];
          }

          $result2 = mysql_query("SELECT * FROM tblcustomer WHERE cust_id='".$cid."'");
          while($row1=mysql_fetch_array($result2))
          {
            $f = $row1['fname'];
            $m = $row1['mname'];
            $l = $row1['lname'];
            $cname = $f." ".$m." ".$l;
          }
        }

        $qry = "SELECT * FROM tbltempmovies";
        $result=$con->query($qry);
        $rows = mysqli_num_rows($result);
        if($rows==NULL)
        {
          $rows=0;
        }
      ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
          window.onbeforeunload = function (e) {
              $.ajax({
                      type: 'POST',
                      url: 'transmoviesremove.php',
                      success: function(response){
                        
                      }
                    });
        }
        
    var num_rows='<?php echo $rows; ?>';
    var pers;
      $(document).ready(function() 
      {
        $('#persons').keyup(function()
        {
          pers = $('#persons').val();

          $.ajax({
            type: 'POST',
            url: 'persons.php',
            data: {persons: pers},
            success: function(response){
              $('#test').load('persons2.php').show;
              $('#test2').load('personspromo.php').show;
            }
          });
        });
      });
      function checkTextField() {
          var field = document.getElementById("persons");
          if (field.value == '') 
          {
            alert("Field is empty");
          }
          else if(isNaN(field.value))
          {
            alert("Invalid input");
          }
          else
          {
            $('#occupancy').modal("show");
          }
      }
      function checkName() {
            $('#namemodal').modal("show");
      }
      function openMovie() {
        $('#movie').modal("show");
      }
      function openPromo() {
        if(num_rows==0 && $('#rnum').html()=="")
        {
          alert("Please select a movie to watch and a room first");
        }
        else if(num_rows==0)
        {
          alert("Please select a to watch first");
        }
        else if($('#rnum').html()=="")
        {
          alert("Please select a room first");
        }
        else
        {
          $('#promomodal').modal("show");
        }
      }
      var table = document.getElementById("table1");
      var table2 = document.getElementById("table2");
      var table3 = document.getElementById("table3");
      var table4 = document.getElementById("table4");
      var table6 = document.getElementById("table6");

      for(var i = 1; i < table.rows.length; i++)
      {
        table.rows[i].onclick = function()
        {
          var mid = this.cells[0].innerHTML;
          $.ajax({
            type: 'POST',
            url: 'transmovies.php',
            data: {id: mid},
            success: function(response){
              $('#movies').load('transmovies2.php').show;
              num_rows=1;
            }
          });

          $(function() {
                $('.modal').modal('hide');
          });
        };
      }

      var nameid;
      var fullname;
      $('#name').blur(function()
        {
          fullname = $('#name').val();
        });
      var contactno;
      $('#contact').blur(function()
        {
          contactno = $('#contact').val();
        });

      for(var i = 1; i < table3.rows.length; i++)
      {
        table3.rows[i].onclick = function()
        {
          nameid = this.cells[0].innerHTML;
          fullname = this.cells[1].innerHTML;
          contactno = this.cells[2].innerHTML;
          $('#name').val(fullname);
          $('#contact').val(contactno);

          $(function() {
                $('.modal').modal('hide');
          });
        };
      }
      //var promo = $('#promo').html();
      

      /*for(var i = 1; i < table4.rows.length; i++)
      {
        table4.rows[i].onclick = function()
        {
          promo_id = this.cells[0].innerHTML;
          promo_name = this.cells[1].innerHTML;
          promo_amt = this.cells[2].innerHTML;
          amt = this.cells[2].innerHTML;

          $('#promo').html(promo_name);
          $('#amt').html(promo_amt);

          $(function() {
                $('.modal').modal('hide');
          });
        };
      }*/

      $('#proceed').click(function()
      {
        $.ajax({
            type: 'POST',
            url: 'transacfin.php',
            data: {Name: fullname, Nameid: nameid, Contactno: contactno, Pers: pers, Mids: mids, Amt: amt, Room: room, Room_id: room_id},
            success: function(response){
              location.href = "checkout.php";
            }
          });
      });


      //var filter2 = $('#filter2').val();
      var filter2 = "All";
      var txt2 = "test";
      /*$('#txt2').keyup(function()
        {
          txt2 = $('#txt2').val();
        });*/

      $('#search2').click(function()
      {
        $.ajax({
            type: 'POST',
            url: 'trans_moviemodal.php',
            data: {Filter2: filter2, Txt2: txt2},
            success: function(response){
              $('#ts').load('trans_moviemodal.php').show;
            }
          });
      });
    </script>

</body>

</html>
    