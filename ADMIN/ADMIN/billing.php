 <?php
  session_start();

     include("../../includes/connection.php");
     if (isset($_COOKIE['emp_id']) && !isset($_SESSION['emp_id'])) {
       $id = $_COOKIE['emp_id'];

     }else {
          $id = $_SESSION['emp_id'];
          
        }
     
    $room = array();
    $end_time = array();
    $movie = array();
    $per = array();
    $dur = array();
    $dur2 = array();
    $contact = array();
    $name = array();
    $bid = array();
    $amount = array();

    $qry = "SELECT * FROM tblbilling";
    $result=$con->query($qry);
    while($row3=$result->fetch_array())
    {
        $bid[] = $row3['id'];
        $room[] = $row3['room'];
        $end_time[] = $row3['end_time'];
        $movie[] = $row3['movies'];
        $per[] = $row3['num_of_persons'];
        $dur[] = $row3['duration'];
        $dur2[] = $row3['duration2'];
        $contact[] = $row3['contactno'];
        $name[] = $row3['cust_name'];
        $amount[] = $row3['amount'];
    }
    $rooms = implode(",", $room);
    $ts = implode(",", $end_time);
    $movies = implode(",", $movie);
    $pers = implode(",", $per);
    $durs = implode(",", $dur);
    $durs2 = implode(",", $dur2);
    $cons = implode(",", $contact);
    $names = implode(",", $name);
    $bids = implode(",", $bid);
    $amt = implode(",", $amount);

    date_default_timezone_set('Asia/Kuala_Lumpur');
    $now = date("g:i A");
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
    <style>
        .panel-body
        {
            height: 250px;
        }



        .stop{
          display: inline-block;
          *display: inline;
          zoom: 1;
          padding: 6px 20px;
          margin: 0;
          cursor: pointer;
          border: 1px solid red;
          overflow: visible;
          font: bold 13px arial, helvetica, sans-serif;
          text-decoration: none;
          white-space: nowrap;
          color: white;
          background-color:red;
          transition: background-color .2s ease-out;
          background-clip: padding-box; /* Fix bleeding */
          border-radius: 3px;
          box-shadow: 0 1px 0 rgba(0, 0, 0, .3),
                      0 2px 2px -1px rgba(0, 0, 0, .5),
                      0 1px 0 rgba(255, 255, 255, .3) inset;
        }

        .stop:hover{
          background-color: #ff3333;
          color: white;
        }

        .stop:active{
          background: #269CE9;
          position: relative;
          top: 1px;
          text-shadow: none;
          box-shadow: 0 1px 1px rgba(0, 0, 0, .3) inset;
        }
        .addviewer{
          display: inline-block;
          *display: inline;
          zoom: 1;
          padding: 6px 20px;
          margin: 0;
          cursor: pointer;
          border: 1px solid green;
          overflow: visible;
          font: bold 13px arial, helvetica, sans-serif;
          text-decoration: none;
          white-space: nowrap;
          color: white;
          background-color: green;
          transition: background-color .2s ease-out;
          background-clip: padding-box; /* Fix bleeding */
          border-radius: 3px;
          box-shadow: 0 1px 0 rgba(0, 0, 0, .3),
                      0 2px 2px -1px rgba(0, 0, 0, .5),
                      0 1px 0 rgba(255, 255, 255, .3) inset;
        }

        .addviewer:hover{
          background-color:#00e600;
          color: white;
        }

        .addviewer:active{
          background: #269CE9;
          position: relative;
          top: 1px;
          text-shadow: none;
          box-shadow: 0 1px 1px rgba(0, 0, 0, .3) inset;
        }
    </style>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $fname . " " . $lname; ?><b class="caret"></b></a>
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
                     <li class="active">
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
                            Movie Suites
                            <small>Reservation and billing</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="receptionist.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Billing & Reservation
                            </li>   
                        </ol>

                        <div class="text-right">
                             <a href="pricing.php" style="text-decoration:none;color:black;"><input type="submit" value="Manage Pricing" class="btn-primary"></a> 
                        </div>
                        <hr>

                    <div class="page-header">
                        <h1>Rooms</h1>
                    </div>
                
                <div class="row">
                <?php
                    $qry = "SELECT * FROM tblrooms";
                                $result=$con->query($qry);
                                while($row=$result->fetch_array())
                                {
                                  //$room_id = $row['room_id'];
                                  $room_name = $row['room_name'];
                ?>
                      <div class="col-sm-4">

                        <div class="panel panel-info">
                               <div class="alert alert-success">
                                <h3 class="panel-title"><?php echo $room_name; ?></h3>
                            </div>
                         <div class="panel-body">
                            <h5>AVAILABLE</h5>
                         </div>
                         </div>
                            </div>

                <?php } ?>


                        
                    <!-- /.col-sm-4 -->
                </div>  
                <div class="alert alert-success">
                            <strong>NOTE:</strong> This color indicates when room is available
                        </div>
                        <div class="alert alert-danger">
                            <strong>NOTE!</strong> This color indicates when room is occupied/reserved.
                        </div>
                        </div>

                <div class="page-header">
                        <h1>Reservation list</h1>
                    </div>

                

                    <div class="col-lg-6-centered">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="tblres">
                                <thead>
                                    <tr>
                                        <th hidden>Reservation ID</th>
                                        <th>Customer name</th>
                                        <th>Movie title</th>
                                        <th>Reserve date</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                    <?php
                        $qry = "SELECT * from tblreservation"; 
                        $result=$con->query($qry);
                        while($row=$result->fetch_array())
                        {
                            $reserve_id = $row['reserve_id'];
                            $cust_id = $row['cust_id'];
                            $movie_id = $row['movie_id'];
                            $time = $row['time'];
                            $date_res = $row['date_reserved'];

                            $qry = "SELECT * from tblcustomer WHERE cust_id='".$cust_id."'";
                            $result=$con->query($qry);
                            while($row1=$result->fetch_array())
                            {
                                $fname = $row1['fname'];
                                $mname = $row1['mname'];
                                $lname = $row1['lname'];
                            }

                            $qry ="SELECT * from tblmovie WHERE movie_id='".$movie_id."'";
                            $result=$con->query($qry);
                            while($row2=$result->fetch_array())
                            {
                                $title = $row2['title'];
                            }
                    ?>

                                    <tr>
                                        <td hidden><?php echo $reserve_id; ?></td>
                                        <td><?php echo $fname." ".$mname." ".$lname ?></td>
                                        <td><?php echo $title; ?></td>
                                        <td><?php echo $date_res; ?></td>
                                        <td><?php echo $time; ?></td>
                                        <td><button class="remres" name="remres" value="<?php echo htmlspecialchars($reserve_id); ?>">X</button></td>
                                    </tr>
                                    
                                </tbody>
                    <?php } ?>
                            </table>

                        </div>
                        <div class="text-right">
                                    <a href="#">Proceed transaction <i class="fa fa-arrow-circle-right"></i></a>
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

     <div class="modal fade" id="addviewer" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
      <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel1">Add viewer </h4>
      </div>

        <div class="modal-body">
                    <b>Number of persons</b><br>

                              <br> <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Input number of persons" name="persons" id="persons" ">
                                </div>
                     <div class="text-right">
                                    <button class="btn btn-primary" id="proceed" style="margin: 10px;">Proceed to checkout</button>
                          </div>


           
            
        </div>
      </div>
      </div>
      </div>
 
      <div class="modal fade" id="confirm-stop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <b>Confirm Stop</b>
                                          </div>
                                          <div class="modal-body">
                                              Are you sure you want to terminate this session?
                                              <br>
                                              Do you want to proceed?
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                              <button type="button" class="btn btn-danger btn-ok" name="btnsubmit" id="btnsubmitstop" style="background-color: #1E90FF; color: white; border: #1E90FF">Stop</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>


    <!-- <div class="panCon">
        <b class="pre"></b>
        <b class="timer"></b><br>
        <button class="stop">Stop</button>
    </div> -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        setTimeout(function() {
          location.reload();
        }, 30000);

        $('tr').dblclick(function(){
          var rid = this.cells[0].innerHTML;
          location.href = "transaction_form2.php?rid="+rid;
        });

        var rm = '<?php echo $rooms; ?>';
        var rms = rm.split(",");
        var t = '<?php echo $ts; ?>';
        var ts = t.split(",");
        var m = '<?php echo $movies; ?>';
        var ms = m.split(",");
        var p = '<?php echo $pers; ?>';
        var ps = p.split(",");
        var d = '<?php echo $durs; ?>';
        var ds = d.split(",");
        var d2 = '<?php echo $durs2; ?>';
        var ds2 = d2.split(",");
        var c = '<?php echo $cons; ?>';
        var contacts = c.split(",");
        var b = '<?php echo $names; ?>';
        var names = b.split(",");
        var bi = '<?php echo $bids; ?>';
        var bids = bi.split(",");
        var amt = '<?php echo $amt; ?>';
        var amount = amt.split(",");
        var mt;
        var now = '<?php echo $now; ?>';

        for(var i=0; i<=rms.length; i++)
        {
            $('.panel').each(function(){
                if($(this).find('h3').html()==rms[i])
                {
                    mt = ms[i].split("^");
                    $(this).find('h5').html("<b>Now watching: </b><br>");
                    for(var j=0; j<mt.length; j++)
                    {
                      $(this).find('h5').append("<div class='space' style='margin-left: 40px;'>"+mt[j]+" <b>(Ends at: "+ds2[j]+")</b></div>");
                    }
                    $(this).find('h5').append("<b>Number of persons watching: </b>"+ps[i]+"<br>");
                    $(this).find('h5').append("<b>Customer name: </b>"+names[i]+"<br>");
                    $(this).find('h5').append("<b>Total amount: </b>₱"+amount[i]+".00<br>");
                    $(this).find('h5').append("<b>Movie/s duration: </b>"+ds[i]+"<br>");
                    $(this).find('h5').append("Available at "+ts[i]);
                    $(this).find('h5').append('<br><br><button class="stop" value="'+rms[i]+'" data-toggle="modal" data-target="#confirm-stop">Stop</button>');
                    $(this).find('h5').append(' <button class="addviewer" value="'+bids[i]+'">Add viewer</button>');
                }
            });
        }

         

        $(".stop").click(function() {
            var v = $(this).val();
            $("#btnsubmitstop").click(function() {
                $.ajax({
                    type: 'POST',
                    url: 'deltime.php',
                    data: {V: v},
                    success: function(response){
                      location.reload();
                    }
                  });
              });
        });

        $(".addviewer").click(function() {
          var b1 = $(this).val();
          var pers;
          $('#addviewer').modal("show");
          $('#persons').keyup(function()
          {
            pers = $('#persons').val();
          });
          $("#proceed").click(function() {
            $.ajax({
                type: 'POST',
                url: 'addpersons.php',
                data: {Pers: pers, B1: b1},
                success: function(response){
                  window.location.href = "checkout2.php?bid="+b1+"&p="+pers;
                }
              });
            });
          });


        for(var i=0; i<=ts.length; i++)
        {
            if(now.localeCompare(ts[i])==0)
            {
                $.ajax({
                type: 'POST',
                url: 'deltime.php',
                data: {Now: now},
                success: function(response){
                  location.reload();
                }
              });
                alert(rms[i]+" is now available");
                var phone = contacts[i];

                /*$.ajax({
                type: 'POST',
                url: 'sendcontact.php',
                data: {Phone: phone},
                success: function(response){
                  window.load("send_sms.php");
                }
              });*/
            }
        }



        $('.remres').each(function(){
            $(this).click(function(){
                var num = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: 'remreserve.php',
                    data: {rrid: num},
                    success: function(response){
                      location.reload();
                    }
                });
            });
        });
    </script>

</body>

</html>
