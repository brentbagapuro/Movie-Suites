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
                <a style="font-family:Helvetica; color:white; font-size:20px;" href="admin.php">Admin</a>
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
                    <li>
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
                    <li class="active">
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
                            Time settings
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Time settings
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                       
                            

                                <div class="col-sm-6">

                        <div class="panel panel-info" style="overflow-x:hidden;">
                               <div class="panel-heading">
                                <h3 class="panel-title">Time settings</h3>
                            </div>
                         <div class="panel-body">
                            <form role="form" action="time_process.php" method="post">

                               <input type="hidden" id="id" name="id" value="" />

                                 <label for="price_name">Opening time:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="time" class="form-control" placeholder="Input establishment opening time" name="open_time" id="open_time" style="width:270px;" required>
                                </div>

                                <label for="price_name">Closing time:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="time" class="form-control"  placeholder="Input establishment closing time" name="closing_time" id="closing_time" style="width:270px;" required>
                                </div>

                            
                                <button type="button" class="btn btn-primary" name="btnsubmit" id="btnsubmit" data-toggle="modal" data-target="#confirm-add1">Add time</button>
                                <button type="button" class="btn btn-primary" name="btnsubmit2" id="btnsubmit2" data-toggle="modal" data-target="#confirm-update1" disabled>Update time</button>
                                <button type="button" class="btn btn-primary" name="btnsubmit3" id="btnsubmit3" data-toggle="modal" data-target="#confirm-delete1" disabled>Delete time</button><br><br>
                               
                        

                            <div class="modal fade" id="confirm-add1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <b>Confirm Add</b>
                                          </div>
                                          <div class="modal-body">
                                              You are about to add this time.
                                              <br>
                                              Do you want to proceed?
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                              <button type="submit" class="btn btn-danger btn-ok" name="btnsubmit" id="btnsubmit" style="background-color: #1E90FF; color: white; border: #1E90FF">Add</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                            <div class="modal fade" id="confirm-update1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <b>Confirm Update</b>
                                          </div>
                                          <div class="modal-body">
                                              You are about to update this time.
                                              <br>
                                              Do you want to proceed?
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                              <button type="submit" class="btn btn-danger btn-ok" name="btnsubmit2" id="btnsubmit2" style="background-color: #1E90FF; color: white; border: #1E90FF">Update</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                          <div class="modal fade" id="confirm-delete1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <b>Confirm Delete</b>
                                      </div>
                                      <div class="modal-body">
                                          You are about to delete this time.
                                          <br>
                                          Do you want to proceed?
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                          <button class="btn btn-danger btn-ok" type="submit" name="btnsubmit3" id="btnsubmit3">Delete</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                              </form>
                          </div>
                         </div>
                            </div>
                            

                    <div class="col-lg-6">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="table1">
                                <thead>
                                    <tr>
                                        <th style="font-size:1px;"hidden>Price ID</th>
                                        <th>Opening time</th>
                                        <th>Closing time</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                    <?php
                        $qry = "SELECT * from tbltime";
                        $result=$con->query($qry);
                        $rows = mysqli_num_rows($result);
                              
                        while($row=$result->fetch_array())
                        {
                            $time_id = $row['time_id'];
                            $open_time = $row['open_time'];
                            $closing_time = $row['closing_time'];
                            

                           
                    ?>

                                    <tr>
                                        <td hidden><?php echo $time_id; ?></td>
                                        <td><?php echo $open_time ?></td>
                                        <td><?php echo $closing_time; ?></td>
                                       
                                      </tr>
                                    
                                </tbody>
                    <?php } ?>
                            </table>

                        </div>

                        
                    </div>
                                
                  <br>

                                
                    <script type="text/javascript">
                    var rows = '<?php echo $rows; ?>';
                    if(rows != 0)
                    {
                      document.getElementById("btnsubmit").disabled = true;
                    }
                var table = document.getElementById("table1");
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         document.getElementById("btnsubmit").disabled = true;
                         document.getElementById("btnsubmit2").disabled = false;
                         document.getElementById("btnsubmit3").disabled = false;
                         
                         var javascriptVariable = this.cells[0].innerHTML;
                         document.getElementById('id').value = javascriptVariable;

                         var time = this.cells[1].innerHTML;
                         var hours = Number(time.match(/^(\d+)/)[1]);
                          var minutes = Number(time.match(/:(\d+)/)[1]);
                          var AMPM = time.match(/\s(.*)$/)[1];
                          if(AMPM == "pm" && hours<12) hours = hours+12;
                          if(AMPM == "am" && hours==12) hours = hours-12;
                          var sHours = hours.toString();
                          var sMinutes = minutes.toString();
                          if(hours<10) sHours = "0" + sHours;
                          if(minutes<10) sMinutes = "0" + sMinutes;
                          var ot = sHours + ":" + sMinutes;
                        document.getElementById("open_time").value = ot;
                         var time2 = this.cells[2].innerHTML;
                         var hours2 = Number(time2.match(/^(\d+)/)[1]);
                          var minutes2 = Number(time2.match(/:(\d+)/)[1]);
                          var AMPM2 = time2.match(/\s(.*)$/)[1];
                          if(AMPM2 == "pm" && hours2<12) hours2 = hours2+12;
                          if(AMPM2 == "am" && hours2==12) hours2 = hours2-12;
                          var sHours2 = hours2.toString();
                          var sMinutes2 = minutes2.toString();
                          if(hours2<10) sHours2 = "0" + sHours2;
                          if(minutes2<10) sMinutes2 = "0" + sMinutes2;
                          var ct = sHours2 + ":" + sMinutes2;
                        document.getElementById("closing_time").value = ct;
                         //document.getElementById("open_time").value = new Date(this.cells[1].innerHTML);
                         //document.getElementById("closing_time").value = new Date(this.cells[2].innerHTML);
                    };
                }

                /*function checkTextFields() {
                    var open_time = document.getElementById("open_time");
                    var closing_time = document.getElementById("closing_time");
                    if (isNaN(open_time.value) || isNaN(closing_time.value)) 
                    {
                      alert("Invalid input");
                    }
                    else
                    {
                      $('#confirm-add1').modal("show");
                    }
                }*/
         </script>

                                
                <!-- /.row -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    </form>  
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
