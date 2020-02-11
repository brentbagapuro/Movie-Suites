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
                    <li>
                        <a href="addcustomer.php"><i class="fa fa-fw fa-user"></i> Customer</a>
                    </li>
                    <li  class="active">
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
                            Pricing settings
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="receptionist.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Pricing
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
                                <h3 class="panel-title">Pricing</h3>
                            </div>
                         <div class="panel-body">
                            <form role="form" action="reg_pricing.php" method="post">

                               <input type="hidden" id="id" name="id" value="" />

                                 <label for="price_name">Price name:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">₱</span>
                                    <input type="text" class="form-control" placeholder="Input Price name" name="price_name" id="price_name" style="width:270px;">
                                </div>

                                <label for="price_name">Unit Price:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">₱</span>
                                    <input type="number" class="form-control"  placeholder="Input unit price" name="price" id="price" style="width:270px;">
                                </div>  

                                <label for="price_name">Number of persons:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">₱</span>
                                    <input type="number" class="form-control"  placeholder="Input Number of persons" name="persons" id="persons" style="width:270px;">
                                </div>  
                                
                                <label for="price_name">Additional price per pax:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">₱</span>
                                    <input type="number" class="form-control"  placeholder="Input Price per pax" name="pax" id="pax" style="width:270px;">
                                </div>  

                            
                                <button type="button" class="btn btn-primary" name="btnsubmit" id="btnsubmit" onclick="checkTextFields();">Add pricing</button>
                                <button type="button" class="btn btn-primary" name="btnsubmit2" id="btnsubmit2" data-toggle="modal" data-target="#confirm-update1" disabled>Update pricing</button>
                                <button type="button" class="btn btn-primary" name="btnsubmit3" id="btnsubmit3" data-toggle="modal" data-target="#confirm-delete1" disabled>Delete pricing</button><br><br>
                               
                        

                            <div class="modal fade" id="confirm-add1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <b>Confirm Add</b>
                                          </div>
                                          <div class="modal-body">
                                              You are about to add this price.
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
                                              You are about to update this price information.
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
                                          You are about to delete this price.
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
                            <div class="col-sm-6">

                        <div class="panel panel-info" style="overflow-x:hidden;">
                               <div class="panel-heading">
                                <h3 class="panel-title">Promo pricing</h3>
                            </div>
                         <div class="panel-body">
                            <form role="form" action="promo_pricing.php" method="post">
                                
                              <input type="hidden" id="id1" name="id1" value="" />

                                 <label for="price_name">Promo name:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">₱</span>
                                    <input type="text" class="form-control" placeholder="Input Price name" name="promo_name" id="promo_name" style="width:270px;">
                                </div>

                                <label for="price_name">Promo Price:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">₱</span>
                                    <input type="number" class="form-control"  placeholder="Input Price" name="promo_price" id="promo_price" style="width:270px;">
                                </div>  

                                <label for="price_name">Number of persons:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">₱</span>
                                    <input type="number" class="form-control"  placeholder="Input Number of persons" name="promo_persons" id="promo_persons" style="width:270px;">
                                </div>  
                                
                                <label for="price_name">Additional price per pax:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">₱</span>
                                    <input type="number" class="form-control"  placeholder="Input Price per pax" name="promo_pax" id="promo_pax" style="width:270px;">
                                </div> 

                                <label for="price_name">Time start (Leave blank if not applicable):</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">₱</span>
                                    <input type="time" class="form-control" name="start_time" id="start_time" style="width:270px;" value="none">
                                </div> 

                                <label for="price_name">Time end (Leave blank if not applicable):</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">₱</span>
                                    <input type="time" class="form-control" name="end_time" id="end_time" style="width:270px;" value="none">
                                </div> 


                                <button type="button" class="btn btn-primary" name="btnsubmit" id="btnsubmit4" onclick="checkTextFields2();">Add promo</button>
                                <button type="button" class="btn btn-primary" name="btnsubmit2" id="btnsubmit5" data-toggle="modal" data-target="#confirm-update" disabled>Update promo</button>
                                <button type="button" class="btn btn-primary" name="btnsubmit3" id="btnsubmit6" data-toggle="modal" data-target="#confirm-delete" disabled>Delete promo</button><br><br>
                              

                               <div class="modal fade" id="confirm-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <b>Confirm Add</b>
                                          </div>
                                          <div class="modal-body">
                                              You are about to add this promo.
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
                                              You are about to update this promo information.
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
                                          You are about to delete this promo.
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
                                        <th>Price name</th>
                                        <th>Unit Price(in PHP)</th>
                                        <th>Num. of person/s</th>
                                         <th>Price/pax(in PHP)</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                    <?php
                        $qry = "SELECT * from tblreg_price"; 
                        $result=$con->query($qry);
                        while($row=$result->fetch_array())
                        {
                            $price_id = $row['price_id'];
                            $price_name = $row['price_name'];
                            $reg_price = $row['reg_price'];
                            $price_pax = $row['price_pax'];
                            $persons = $row['price_numofpersons'];
                            

                           
                    ?>

                                    <tr>
                                        <td hidden><?php echo $price_id; ?></td>
                                        <td><?php echo $price_name ?></td>
                                        <td><?php echo $reg_price; ?></td>
                                         <td ><?php echo $persons; ?></td>
                                        <td ><?php echo $price_pax; ?></td>
                                       
                                      </tr>
                                    
                                </tbody>
                    <?php } ?>
                            </table>

                        </div>

                        
                    </div>
                                
                  <div class="col-lg-6">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="table2">
                                <thead>
                                    <tr>
                                        <th style="font-size:1px;"hidden>Promo ID</th>
                                        <th>Promo name</th>
                                        <th>Price(in PHP)</th>
                                        <th>Num. of person/s</th>
                                         <th>Price/pax(in PHP)</th>
                                         <th>Time start</th>
                                         <th>Time end</th>
                                         
                                     
                                    </tr>
                                </thead>
                                <tbody>
                    <?php
                        $qry = "SELECT * from tblpromo"; 
                        $result=$con->query($qry);
                        while($row=$result->fetch_array())
                        {
                            $promo_id = $row['promo_id'];
                            $promo_name = $row['promo_name'];
                            $promo_price = $row['promo_price'];
                            $pax = $row['promo_pax'];
                            $promo_numofpersons = $row['promo_numofpersons'];
                            $time_start = $row['time_start'];
                            $time_end = $row['time_end'];
                            

                           
                    ?>

                                    <tr>
                                        <td hidden><?php echo $promo_id; ?></td>
                                        <td><?php echo $promo_name ?></td>
                                        <td><?php echo $promo_price; ?></td>
                                        <td><?php echo $promo_numofpersons; ?></td>
                                        <td><?php echo $pax; ?></td>
                                        <td><?php echo $time_start; ?></td>
                                        <td><?php echo $time_end; ?></td>
                                        </tr>
                                    
                                </tbody>
                    <?php } ?>
                            </table>

                        </div>
                        
                        
                    </div><br>

                                
                    <script type="text/javascript">
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
                         document.getElementById("price_name").value = this.cells[1].innerHTML;
                         document.getElementById("price").value = this.cells[2].innerHTML;
                          document.getElementById("persons").value = this.cells[3].innerHTML;
                         document.getElementById("pax").value = this.cells[4].innerHTML;
                    };
                }


                var table = document.getElementById("table2");
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         document.getElementById("btnsubmit4").disabled = true;
                         document.getElementById("btnsubmit5").disabled = false;
                         document.getElementById("btnsubmit6").disabled = false;
                         
                         var javascriptVariable = this.cells[0].innerHTML;
                         document.getElementById('id1').value = javascriptVariable;
                         document.getElementById("promo_name").value = this.cells[1].innerHTML;
                         document.getElementById("promo_price").value = this.cells[2].innerHTML;
                         document.getElementById("promo_persons").value = this.cells[3].innerHTML;
                          document.getElementById("promo_pax").value = this.cells[4].innerHTML;

                      if(this.cells[5].innerHTML == "none" && this.cells[6].innerHTML == "none")
                      {
                        document.getElementById("start_time").value = "";
                        document.getElementById("end_time").value = "";
                      }
                      else
                      {
                          var time = this.cells[5].innerHTML;
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
                        document.getElementById("start_time").value = ot;
                         var time2 = this.cells[6].innerHTML;
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
                        document.getElementById("end_time").value = ct;
                      }
                    };
                }

                function checkTextFields() {
                    var price = document.getElementById("price");
                    var persons = document.getElementById("persons");
                    var pax = document.getElementById("pax");
                    if (isNaN(price.value) || isNaN(persons.value) || isNaN(pax.value)) 
                    {
                      alert("Invalid input");
                    }
                    else
                    {
                      $('#confirm-add1').modal("show");
                    }
                }

                function checkTextFields2() {
                    var promo_price = document.getElementById("promo_price");
                    var promo_persons = document.getElementById("promo_persons");
                    var promo_pax = document.getElementById("promo_pax");
                    if (isNaN(promo_price.value) || isNaN(promo_persons.value) || isNaN(promo_pax.value)) 
                    {
                      alert("Invalid input");
                    }
                    else
                    {
                      $('#confirm-add').modal("show");
                    }
                }
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
