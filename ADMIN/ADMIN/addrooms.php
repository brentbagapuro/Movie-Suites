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
                     <li class="active"  >
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
                            Room registration
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Rooms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Register Room</h2>
                            <form role="form" action="addroomsprocess.php" method="post">

                                <input type="hidden" id="id" name="id" value="" />
                                <b style="font-size: 15px;">Room Name: </b>
                                <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Room name" name="rname" id="rname" style="width:270px;">
                                </div>
                                <b style="font-size: 15px;">Maximum Occupancy: </b>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" placeholder="Max occupancy" class="form-control" name="occupancy" id="occupancy" style="width:270px;"> 
                                </div>
                                
                                 <div class="form-group">
                                   
                                    <select id="status" class="form-control" name="status" id="status" style="width:270px;">
                                        <option>Available</option>
                                        <option>Under maintenance</option>
                                    </select>
                                </div>

                                <button type="button" class="btn btn-primary" name="btnsubmit" id="btnsubmit"  data-toggle="modal" data-target="#confirm-add">Add room</button>
                                <button type="button" class="btn btn-primary" name="btnsubmit2" id="btnsubmit2" data-toggle="modal" data-target="#confirm-update" disabled>Update room</button>
                           


                            <div class="modal fade" id="confirm-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <b>Confirm Add</b>
                                          </div>
                                          <div class="modal-body">
                                              You are about to add this room.
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

                            <div class="modal fade" id="confirm-update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <b>Confirm Update</b>
                                          </div>
                                          <div class="modal-body">
                                              You are about to update this room's information.
                                              <br>
                                              Do you want to proceed?
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                              <button type="submit" class="btn btn-danger btn-ok" name="upt" id="upt" style="background-color: #1E90FF; color: white; border: #1E90FF">Update</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                          <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <b>Confirm Delete</b>
                                      </div>
                                      <div class="modal-body">
                                          You are about to delete this user.
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

                          <div class="modal fade" id="confirm-blacklist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <b>Confirm Block</b>
                                      </div>
                                      <div class="modal-body">
                                          You are about to block this user.
                                          <br>
                                          Do you want to proceed?
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                          <button class="btn btn-danger btn-ok" type="submit" name="btnsubmit4" id="btnsubmit4">Block</button>
                                      </div>
                                  </div>
                              </div>
                          </div>

                           <div class="modal fade" id="confirm-unblock" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <b>Confirm Unblock</b>
                                      </div>
                                      <div class="modal-body">
                                          You are about to unblock this user.
                                          <br>
                                          Do you want to proceed?
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                          <button class="btn btn-danger btn-ok" type="submit" name="btnsubmit5" id="btnsubmit5">Unblock</button>
                                      </div>
                                  </div>
                              </div>
                          </div>



                        </form>

                    </div>

                    <div class="col-lg-6">
                        <form role="role"  action="#" method="post">
                            <h2>List of rooms</h2>
                            <div class="form-group">
                          <select class="text-field2" style="border: 1px solid #a6a6a6;
                              width: 100px;
                              height: 30px;
                              border-radius: 3px;
                              padding-left: 10px;
                              color: #6c6c6c;
                              background: #FDFDFF;
                              outline: none;
                              font-family: 'Sans Serif';" id="filter" name="filter">
                            <option>Roomname</option>
                            <option>Occupancy</option>
                           

                          </select> <input type="text"  style="border: 1px solid #a6a6a6;
                              width: 200px;
                              height: 30px;
                              border-radius: 3px;
                              padding-left: 10px;
                              color: #6c6c6c;
                              background: #FDFDFF;
                              outline: none;
                              font-family: 'Sans Serif';"
                              name="search" placeholder="Search.."> <input type="submit" class="btn btn-default" name="search1" id="search1" value="Search">

                      </div>     
                        <div class="table-responsive">

                            <table class="table table-bordered table-hover table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Room ID</th>
                                        <th>Room name</th>
                                        <th>Max occupancy</th>
                                        <th>Status</th>

                                    </tr>

                                </thead>
                              

                                   <?php //output all list from database
                         
                         if(isset($_POST['search1']))
                         {
                           $filter = $_POST['filter'];
                           $search = $_POST['search'];

                           if($filter=="Roomname")
                           {
                              $qry = "SELECT * FROM tblrooms WHERE room_name LIKE '%$search%'";
                              $result=$con->query($qry);
                              if(mysqli_num_rows($result) > 0)
                              {
                                while($row=$result->fetch_array())
                                {
                                  $room_id = $row['room_id'];  
                                  $rname = $row['room_name'];
                                  $occupancy = $row['occupancy'];
                                  $status = $row['status'];
                    ?>

                                <tr>
                                   <td style="font-size:13px;"><?php echo $room_id; ?></td>
                                   <td style="font-size:13px;" ><?php echo $rname; ?></td>
                                   <td style="font-size:13px;" > <?php echo $occupancy; ?></td>
                                   <td  style="font-size:13px;"><?php echo $status; ?></td>
                                </tr>

                    <?php
                                }//end of firstname while
                              }//end of if
                              else
                              {
                                ?>
                                <tr>
                                  <td style="font-size:20px;"><center>No Results</center></td>
                                </tr>
                                <?php
                              }
                            }//end of if title
                            if($filter=="Occupancy")
                           {
                            $qry = "SELECT * FROM tblrooms WHERE max_occupancy LIKE '%$search%'";
                            $result=$con->query($qry);
                              if(mysqli_num_rows($result) > 0)
                              {
                                while($row=$result->fetch_array())
                                {
                                 $room_id = $row['room_id'];  
                                  $rname = $row['room_name'];
                                  $occupancy = $row['occupancy'];
                                  $status = $row['status'];
                            
                           
                    ?>

                                <tr>
                                   <td style="font-size:13px;"><?php echo $room_id; ?></td>
                                   <td style="font-size:13px;" ><?php echo $rname; ?></td>
                                   <td style="font-size:13px;" > <?php echo $occupancy; ?></td>
                                   <td  style="font-size:13px;"><?php echo $status; ?></td>
                                </tr>

                    <?php
                            }//end of middlename while
                            }//end of if
                              else
                              {
                                ?>
                                <tr>
                                  <td style="font-size:10px;"><center>No Results</center></td>
                                </tr>
                                <?php
                              }
                              }//end of if genre
                            
                          } //end of isset
                          else
                          {
                              $qry = "SELECT * FROM tblrooms";
                              $result=$con->query($qry);
                              if(mysqli_num_rows($result) > 0)
                              {
                                while($row=$result->fetch_array())
                                {
                                  $room_id = $row['room_id'];  
                                  $rname = $row['room_name'];
                                  $occupancy = $row['max_occupancy'];
                                  $status = $row['status'];
                            

                    ?>

                          <tr>
                                   

                                   <?php
                                    if($status == "under maintenance" )
                                    { ?>
                                        <td bgcolor="red" style="font-size:13px;"><?php echo $room_id; ?></td>
                                        <td bgcolor="red" style="font-size:13px;" ><?php echo $rname; ?></td>
                                         <td bgcolor="red" style="font-size:13px;" ><?php echo $occupancy; ?></td>
                                         <td bgcolor="red" style="font-size:13px;" ><?php echo $status; ?></td>
                                          
                                    <?php }
                                     else if ($status == "available" )
                                    { ?>
                                      <td style="font-size:13px;"><?php echo $room_id; ?></td>
                                      <td style="font-size:13px;" ><?php echo $rname; ?></td>
                                      <td style="font-size:13px;" ><?php echo $occupancy; ?></td>
                                      <td style="font-size:13px;" ><?php echo $status; ?></td>
                                      
                                      <?php } ?>
                                </tr>
                    <?php } }  } ?>
                                    
                                
                            </table>


            <script type="text/javascript">
                var table = document.getElementById("table1");
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         document.getElementById("btnsubmit").disabled = true;
                         document.getElementById("btnsubmit2").disabled = false;
                         //document.getElementById("btnsubmit3").disabled = false;
                         //document.getElementById("btnsubmit4").disabled = false;
                         //document.getElementById("btnsubmit5").disabled = false;

                        var s = this.cells[2].innerHTML;
                        var stat =s.replace(" ", '');
                        
                        if(stat == "under maintenance"){
                           document.getElementById("btnsubmit").disabled = true;
                           document.getElementById("btnsubmit2").disabled = false;
                        }
                        else if(stat == "available")
                        {
                            document.getElementById("btnsubmit").disabled = false;
                            document.getElementById("btnsubmit2").disabled = true;
                         }

                         //var stat = this.cells[2].innerHTML;
                         /*if (stat=="BLOCKED") { 
                            document.getElementById("btnsubmit4").innerHTML = "UNBLOCK";
                            //<span class="mbri-plus mbr-iconfont mbr-iconfont-btn small"></span>
                         }
                         else if(stat=="ACTIVE")
                         {
                            document.getElementById("btnsubmit4").innerHTML = "BLACKLIST";
                            //<span class="mbri-plus mbr-iconfont mbr-iconfont-btn small"></span>
                         }*/

                         var javascriptVariable = this.cells[0].innerHTML;
                         document.getElementById('id').value = javascriptVariable;
                         document.getElementById("rname").value = this.cells[1].innerHTML;
                         document.getElementById("occupancy").value = this.cells[2].innerHTML;
                         document.getElementById("status").value = this.cells[5].innerHTML;
                         //document.getElementById("cnum").value = this.cells[6].innerHTML;
                         //document.getElementById("username").value = this.cells[7].innerHTML;
                         //document.getElementById("password").value = this.cells[8].innerHTML;
                    };
                }
         </script>

                        </div>
                    </div>
                </div>
            </form>
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
