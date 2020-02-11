 <?php
  session_start();

     include("../../includes/connection.php");
     if (isset($_COOKIE['emp_id']) && !isset($_SESSION['emp_id'])) {
       $id = $_COOKIE['emp_id'];

     }else {
          $id = $_SESSION['emp_id'];
          
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
                                        <h5 class="media-heading"><strong><?php echo $fname . " " . $lname; ?></strong>
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
                                        <h5 class="media-heading"><strong><?php echo $fname . " " . $lname; ?></strong>
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
                                        <h5 class="media-heading"><strong><?php echo $fname . " " . $lname; ?></strong>
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
                    <li class="active">
                        <a href="addcustomer.php"><i class="fa fa-fw fa-user"></i> Customer</a>
                    </li>
                    <li>
                        <a href="billing.php"><i class="fa fa-fw fa-money"></i> Billing</a>
                    </li>
                    <li>
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
                            Customer
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="receptionist.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Customer
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Register customer</h2>
                            <form role="form" action="addcustomerprocess.php" method="post">

                                <input type="hidden" id="id" name="id" value="" />
                                <b style="font-size: 15px;">First Name: </b>
                                <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="First name" name="fname" id="fname" style="width:270px;">
                                </div>
                                <b style="font-size: 15px;">Middle Name: </b>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" placeholder="Middle name" class="form-control" name="mname" id="mname" style="width:270px;"> 
                                </div>
                                <b style="font-size: 15px;">Last Name: </b>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" placeholder="Last name" class="form-control" name="lname" id="lname" style="width:270px;"> 
                                </div>
                                <b style="font-size: 15px;">Contact number: </b>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input type="text" placeholder="Contact number" class="form-control" name="cnum" id="cnum" style="width:270px;"> 
                                </div>
                                <b style="font-size: 15px;">Username: </b>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" placeholder="Username" class="form-control" name="username" id="username" style="width:270px;"> 
                                </div>
                                <b style="font-size: 15px;">Password: </b>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" placeholder="Password" class="form-control" name="password" id="password" style="width:272px;"> 
                                </div>

                                <button type="button" class="btn btn-primary" name="btnsubmit" id="btnsubmit" data-toggle="modal" data-target="#confirm-add">Add customer</button>
                                <button type="button" class="btn btn-primary" name="btnsubmit2" id="btnsubmit2" data-toggle="modal" data-target="#confirm-update" disabled>Update customer</button>
                                <button type="button" class="btn btn-primary" name="btnsubmit3" id="btnsubmit3" data-toggle="modal" data-target="#confirm-delete" disabled>Delete customer</button><br><br>
                                <button type="button" class="btn btn-primary" name="btnsubmit4" id="btnsubmit4" data-toggle="modal" data-target="#confirm-blacklist" disabled>Blacklist user</button>
                                <button type="button" class="btn btn-primary" name="btnsubmit5" id="btnsubmit5" data-toggle="modal" data-target="#confirm-unblock" disabled>Unblock user</button>


                                <div class="modal fade" id="confirm-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <b>Confirm Add</b>
                                          </div>
                                          <div class="modal-body">
                                              You are about to add this customer.
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
                                              You are about to update this customer's information.
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

                          <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <b>Confirm Delete</b>
                                      </div>
                                      <div class="modal-body">
                                          You are about to delete this customer.
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
                                          You are about to block this customer.
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
                                          You are about to unblock this customer.
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
                            <h2>Customer list</h2>
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
                            <option>Firstname</option>
                            <option>Middlename</option>
                            <option>Lastname</option>

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
                                        <th>Customer ID</th>
                                        <th>Fullname</th>
                                        <th>Status</th>

                                         <th style="visibility:hidden;font-size:2px;"></th>

                                          <th style="visibility:hidden;font-size:2px;"></th>

                                        <th style="visibility:hidden;font-size:2px;">Contact number</th>
                                        <th style="visibility:hidden;font-size:2px;">Username</th>
                                        <th style="visibility:hidden;font-size:2px;">Password</th>
                                    </tr>

                                </thead>
                              

                                   <?php //output all list from database
                         
                         if(isset($_POST['search1']))
                         {
                           $filter = $_POST['filter'];
                           $search = $_POST['search'];

                           if($filter=="Firstname")
                           {
                              $qry = "SELECT * FROM tblcustomer WHERE fname LIKE '%$search%'";
                              $result=$con->query($qry);
                              if(mysqli_num_rows($result) > 0)
                              {
                                while($row=$result->fetch_array())
                                {
                                  $cust_id = $row['cust_id'];  
                                  $fname = $row['fname'];
                                  $mname = $row['mname'];
                                  $lname = $row['lname'];
                                  $cnum = $row['contact_num'];
                                  $username = $row['username'];
                                  $password = $row['password'];
                                  $status = $row['status'];
                                  
                                
                    ?>

                                <tr>
                                   <td style="font-size:13px;"><?php echo $cust_id; ?></td>
                                   <td style="font-size:13px;" ><?php echo $fname . " " . $mname . " " . $lname; ?></td>
                                   <td style="font-size:13px;" ><?php echo $status; ?></td>
                                   <td  style="font-size:3px;visibility: hidden;"><?php echo $fname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $mname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $lname ; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $cnum; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $username; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $password; ?></td>
                                   
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
                            if($filter=="Middlename")
                           {
                            $qry = "SELECT * FROM tblcustomer WHERE mname LIKE '%$search%'";
                            $result=$con->query($qry);
                              if(mysqli_num_rows($result) > 0)
                              {
                                while($row=$result->fetch_array())
                                {
                                  $cust_id = $row['cust_id'];  
                                  $fname = $row['fname'];
                                  $mname = $row['mname'];
                                  $lname = $row['lname'];
                                  $cnum = $row['contact_num'];
                                  $username = $row['username'];
                                  $password = $row['password'];
                                  $status = $row['status'];
                            
                           
                    ?>

                          <tr>
                                   <td style="font-size:13px;"><?php echo $cust_id; ?></td>
                                   <td style="font-size:13px;" ><?php echo $fname . " " . $mname . " " . $lname; ?></td>
                                   <td style="font-size:13px;" ><?php echo $status; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $fname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $mname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $lname ; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $cnum; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $username; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $password; ?></td>
                                   
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
                            if($filter=="Lastname")
                           {
                           $qry = "SELECT * FROM tblcustomer WHERE lname LIKE '%$search%'";
                           $result=$con->query($qry);
                              if(mysqli_num_rows($result) > 0)
                              {
                                while($row=$result->fetch_array())
                                {
                                  $cust_id = $row['cust_id'];  
                                  $fname = $row['fname'];
                                  $mname = $row['mname'];
                                  $lname = $row['lname'];
                                  $cnum = $row['contact_num'];
                                  $username = $row['username'];
                                  $password = $row['password'];
                                  $status = $row['status'];
                           
                    ?>

                        <tr >
                                   <td style="font-size:13px;"><?php echo $cust_id; ?></td>
                                   <td style="font-size:13px;"><?php echo $fname . " " . $mname . " " . $lname; ?></td>
                                   <td style="font-size:13px;" ><?php echo $status; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $fname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $mname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $lname ; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $cnum; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $username; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $password; ?></td>
                                   
                                </tr>
                    <?php
                          }//end of lastname while
                          }//end of if
                              else
                              {
                                ?>
                                <tr>
                                  <td style="font-size:20px;"><center>No Results</center></td>
                                </tr>
                                <?php
                              }
                            }//end of if lastname
                          } //end of isset
                          else
                          {



                              $qry = "SELECT * FROM tblcustomer";
                              $result=$con->query($qry);
                              if(mysqli_num_rows($result) > 0)
                              {
                                while($row=$result->fetch_array())
                                {
                                  $cust_id = $row['cust_id'];  
                                  $fname = $row['fname'];
                                  $mname = $row['mname'];
                                  $lname = $row['lname'];
                                  $cnum = $row['contact_num'];
                                  $username = $row['username'];
                                  $password = $row['password'];
                                  $status = $row['status'];

                    ?>

                          <tr>
                                   

                                   <?php
                                    if($status == "BLOCKED" )
                                    { ?>
                                        <td bgcolor="red" style="font-size:13px;"><?php echo $cust_id; ?></td>
                                         <td bgcolor="red" style="font-size:13px;" ><?php echo $fname . " " . $mname . " " . $lname; ?></td>
                                         <td bgcolor="red" style="font-size:13px;" ><?php echo $status; ?></td>
                                          
                                    <?php }
                                     else if ($status == "ACTIVE" )
                                    { ?>
                                      <td style="font-size:13px;"><?php echo $cust_id; ?></td>
                                      <td style="font-size:13px;" ><?php echo $fname . " " . $mname . " " . $lname; ?></td>
                                      <td style="font-size:13px;" ><?php echo $status; ?></td>
                                      
                                      <?php } ?>

                                   
                                   <td style="font-size:1px;visibility: hidden;"><?php echo $fname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"><?php echo $mname; ?></td>
                                   <td style="font-size:1px;visibility: hidden;"><?php echo $lname ; ?></td>
                                   <td style="font-size:1px;visibility: hidden;"><?php echo $cnum; ?></td>
                                   <td style="font-size:1px;visibility: hidden;"><?php echo $username; ?></td>
                                   <td style="font-size:1px;visibility: hidden;"><?php echo $password; ?></td>
                                   
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
                         document.getElementById("btnsubmit3").disabled = false;
                         document.getElementById("btnsubmit4").disabled = false;
                         //document.getElementById("btnsubmit5").disabled = false;

                        var s = this.cells[2].innerHTML;
                        var stat =s.replace(" ", '');
                        
                        if(stat == "BLOCKED"){
                           document.getElementById("btnsubmit4").disabled = true;
                           document.getElementById("btnsubmit5").disabled = false;
                        }
                        else if(stat == "ACTIVE")
                        {
                            document.getElementById("btnsubmit4").disabled = false;
                            document.getElementById("btnsubmit5").disabled = true;
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
                         document.getElementById("fname").value = this.cells[3].innerHTML;
                         document.getElementById("mname").value = this.cells[4].innerHTML;
                         document.getElementById("lname").value = this.cells[5].innerHTML;
                         document.getElementById("cnum").value = this.cells[6].innerHTML;
                         document.getElementById("username").value = this.cells[7].innerHTML;
                         document.getElementById("password").value = this.cells[8].innerHTML;
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
