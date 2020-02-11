<?php
    session_start();
    include("includes/connection.php");

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
                <a class="navbar-brand" href="receptionist.php">Movie Suites - Receptionist</a>
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
                    <li  class="active">
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
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li>
                                <i class="fa fa-file"></i> <a href="transaction_form.php">Transaction</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-money"></i> Checkout
                            </li>
                        </ol>


                        <div class="row">
                       
                      <div class="col-sm-4">

                        
                            </div>

                            <div class="col-sm-4">

                        <div class="panel panel-green">
                               <div class="panel-heading">
                                <h3 class="panel-title">Billing form</h3>
                            </div>
                         <div class="panel-body">
                            <label>Amount Due:</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">₱</span>
                                    <input type="text" class="form-control" id="amount" style="text-align:right;" disabled>
                                    <span class="input-group-addon">.00</span>
                                </div> 
                            <label>Cash:</label> 
                                <div class="form-group input-group">
                                    <span class="input-group-addon">₱</span>
                                    <input type="text" class="form-control" id="cash" style="text-align:right;">
                                    <span class="input-group-addon">.00</span>
                                </div> 
                            <label>Change:</label> 
                                <div class="form-group input-group">
                                    <span class="input-group-addon">₱</span>
                                    <input type="text" class="form-control" id="change" style="text-align:right;" disabled>
                                    <span class="input-group-addon">.00</span>
                                </div> 
                            <div class="text-right">
                                    <a id="pay" onclick="checkField();">Payout <i class="fa fa-arrow-circle-right"></i>  </a>


                            </div> 

                          </div>
                         </div>

                            </div>


                            


                       
                        
                    <!-- /.col-sm-4 -->
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

    <?php
        $b1 = $_GET['bid'];
        $pers = $_GET['p'];
        $qry = "SELECT * FROM tblreg_price";
        $result=$con->query($qry);
        while($row=$result->fetch_array())
        {
            $pax = $row['price_pax'];
        }
    ?>

    <script>
        var bid = '<?php echo $b1; ?>';
        var add = '<?php echo $pers; ?>';
        var pax = '<?php echo $pax; ?>';
        var money=0;
        var amt = add*pax;
        var res;
        var rs=0;
        $('#amount').val(amt);
        $('#cash').keyup(function()
        {
          money = $('#cash').val();
          rs = money - amt;
          $('#change').val(rs);
          res=rs;
        });

        function checkField()
        {
            if (cash.value == '') 
            {
                alert("Field is empty");
            }
            else if(isNaN(cash.value))
            {
                alert("Invalid input");
            }
            else if(rs<0)
            {
                alert("Insufficient payment");
            }
            else
            {
                $("#pay").attr("href", "receipt2.php?c="+res+"&m="+money+"&b="+bid+"&a="+add+"&amt="+amt);
            }
        }
    </script>

</body>

</html>
