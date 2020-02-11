 <?php
  session_start();

     include("../../includes/connection.php");
     if (isset($_COOKIE['adm_id']) && !isset($_SESSION['adm_id'])) {
       $id = $_COOKIE['adm_id'];

     }else {
          $id = $_SESSION['adm_id'];
          
        }
     date_default_timezone_set('Asia/Kuala_Lumpur');
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

    <!-- Morris Charts CSS -->

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

       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   <center> <div class="col-lg-12">
                        <h1 class="page-header"> <img style="" src="../../assets/images/header.jpg"></img>
                         Online Reservation and Billing System <small>Reports</small>
                        </h1>
                       
                    </div></center>
                </div>
                <!-- /.row -->

                </div>
                <!-- /.row -->

               

              
                <!-- /.row -->

                <div class="row">
                   
                   <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <form action="#" method="post">
                                 <b style="font-size: 20px;">Filter By: </b><select id="datefil" name="filter" style="height: 30px; font-size: 20px;">
                                    <option>Day</option>
                                    <option>Week</option>
                                    <option>Month</option>
                                    <option>Date</option>
                                  </select>
                                  <button type="submit" name="submit" id="subfil">Filter</button>
                                  <button type="submit" name="submit2" id="subfil2" hidden>Filter</button>
                                  <div class="form-group input-group" id="ddate">
                                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                      <input type="date" class="form-control" name="bydate" id="bydate" style="width: 175px">
                                  </div>
                                </form>
                                  <?php 
                                  if(isset($_POST['submit']))
                                  {
                                    $fil=$_POST['filter'];
                                    if($fil=="Day")
                                    {
                                    $date = array();
                                    $qry = "SELECT * FROM tbltransactions ORDER BY trans_date DESC";
                                    $result=$con->query($qry);
                                    while($row=$result->fetch_array()) 
                                    {
                                      $date[] = $row['trans_date'];
                                    }
                                    $d = array_unique($date);
                                    foreach($d as $var)
                                    {
                                  ?>
                                    <h3>Date: <?php echo $var?></h3>
                                    <table class="table table-bordered table-hover table-striped" style="overflow-y:hidden;">
                                      <thead>
                                        <tr>
                                          <th>Transaction no.</th>
                                          <th>Customer's name</th>
                                          <th>Room no.</th>
                                          <th>Movie(s)</th>
                                          <th>No. of persons</th>
                                          <th>Transaction Date</th>
                                          <th>Start Time</th>
                                          <th>End time</th>
                                          <th>Amount (Php)</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                    <?php
                                      $total=0;
                                      $qry = "SELECT * FROM tbltransactions WHERE trans_date = '".$var."'";
                                      $result=$con->query($qry);
                                      $ms = array();
                                      while($row2=$result->fetch_array()) 
                                      {
                                        $trans_id = $row2['transaction_id'];
                                        $name = $row2['cust_name'];
                                        $room = $row2['room'];
                                        $movies = $row2['movies'];
                                        $time = $row2['time'];
                                        $end = $row2['end_time'];
                                        $persons = $row2['num_of_persons'];
                                        $amount = $row2['amount'];

                                        $total+=$amount;
                                        $ms = explode(",", $movies);
                                    ?>
                                        <tr>
                                          <td><?php echo $trans_id; ?></td>
                                          <td><?php echo $name; ?></td>
                                          <td><?php echo $room; ?></td>
                                          <td><?php foreach($ms as $var){echo "<ul><li>".$var . "</li></ul>";} ?></td>
                                          <td><?php echo $persons; ?></td>
                                          <td><?php echo $var; ?></td>
                                          <td><?php echo $time; ?></td>
                                          <td><?php echo $end; ?></td>
                                          <td><?php echo $amount; ?></td>
                                        </tr>
                                <?php } ?>
                                        <tr>
                                          <td colspan="7"></td>
                                          <td><b>Total: </b></td>
                                          <td><?php echo $total; ?></td>
                                        </tr>
                                </tbody>
                                </table>
                              <?php 
                                    } 
                                   }
                                   else if($fil=="Week")
                                   {
                                    $w=time();
                                    
                                    for($i=1; $i<=4; $i++)
                                    {
                                      $w1=$w-604800*$i;
                                  ?>
                                    <h3><?php echo $i?> Week/s ago</h3>
                                    <table class="table table-bordered table-hover table-striped" style="overflow-y:hidden;">
                                      <thead>
                                        <tr>
                                          <th>Transaction no.</th>
                                          <th>Customer's name</th>
                                          <th>Room no.</th>
                                          <th>Movie(s)</th>
                                          <th>No. of persons</th>
                                          <th>Transaction Date</th>
                                          <th>Start Time</th>
                                          <th>End time</th>
                                          <th>Amount (Php)</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                    <?php
                                      $total=0;

                                      $qry = "SELECT * FROM tbltransactions";
                                      $result=$con->query($qry);
                                      $ms = array();
                                      while($row2=$result->fetch_array()) 
                                      {
                                        $trans_id = $row2['transaction_id'];
                                        $name = $row2['cust_name'];
                                        $room = $row2['room'];
                                        $movies = $row2['movies'];
                                        $time = $row2['time'];
                                        $end = $row2['end_time'];
                                        $persons = $row2['num_of_persons'];
                                        $amount = $row2['amount'];
                                        $week = $row2['trans_date'];

                                        $ms = explode(",", $movies);
                                        $tw=strtotime($week);
                                        if($tw>=$w1)
                                        {
                                          $total+=$amount;
                                    ?>
                                        <tr>
                                          <td><?php echo $trans_id; ?></td>
                                          <td><?php echo $name; ?></td>
                                          <td><?php echo $room; ?></td>
                                          <td><?php foreach($ms as $var){echo "<ul><li>".$var . "</li></ul>";} ?></td>
                                          <td><?php echo $persons; ?></td>
                                          <td><?php echo $week; ?></td>
                                          <td><?php echo $time; ?></td>
                                          <td><?php echo $end; ?></td>
                                          <td><?php echo $amount; ?></td>
                                        </tr>
                                <?php } }?>
                                        <tr>
                                          <td colspan="7"></td>
                                          <td><b>Total: </b></td>
                                          <td><?php echo $total; ?></td>
                                        </tr>
                                </tbody>
                                </table>
                              <?php 
                                    }
                                   }
                                   else if($fil=="Month")
                                   {
                                    $date = array();
                                    $qry = "SELECT * FROM tbltransactions ORDER BY trans_date DESC";
                                    $result=$con->query($qry);
                                    while($row=$result->fetch_array()) 
                                    {
                                      $td = $row['trans_date'];
                                      $td2 = substr($td, 0, 2);
                                      $date[] = $td2;
                                    }
                                    $d = array_unique($date);
                                    foreach($d as $var)
                                    {
                                      if($var=='01')
                                        $mm="January";
                                      else if($var=='02')
                                        $mm="February";
                                      else if($var=='03')
                                        $mm="March";
                                      else if($var=='04')
                                        $mm="April";
                                      else if($var=='05')
                                        $mm="May";
                                      else if($var=='06')
                                        $mm="June";
                                      else if($var=='07')
                                        $mm="July";
                                      else if($var=='08')
                                        $mm="August";
                                      else if($var=='09')
                                        $mm="September";
                                      else if($var=='10')
                                        $mm="October";
                                      else if($var=='11')
                                        $mm="November";
                                      else if($var=='12')
                                        $mm="December";
                                  ?>
                                    <h3>Month: <?php echo $mm?></h3>
                                    <table class="table table-bordered table-hover table-striped" style="overflow-y:hidden;">
                                      <thead>
                                        <tr>
                                          <th>Transaction no.</th>
                                          <th>Customer's name</th>
                                          <th>Room no.</th>
                                          <th>Movie(s)</th>
                                          <th>No. of persons</th>
                                          <th>Transaction Date</th>
                                          <th>Start Time</th>
                                          <th>End time</th>
                                          <th>Amount (Php)</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                    <?php
                                      $total=0;

                                      $qry = "SELECT * FROM tbltransactions";
                                      $result=$con->query($qry);
                                      $ms = array();
                                      while($row2=$result->fetch_array()) 
                                      {
                                        $trans_id = $row2['transaction_id'];
                                        $name = $row2['cust_name'];
                                        $room = $row2['room'];
                                        $movies = $row2['movies'];
                                        $time = $row2['time'];
                                        $end = $row2['end_time'];
                                        $persons = $row2['num_of_persons'];
                                        $amount = $row2['amount'];
                                        $month = $row2['trans_date'];

                                        $ms = explode(",", $movies);
                                        $tm = substr($month, 0, 2);
                                        if($tm==$var)
                                        {
                                          $total+=$amount;
                                    ?>
                                        <tr>
                                          <td><?php echo $trans_id; ?></td>
                                          <td><?php echo $name; ?></td>
                                          <td><?php echo $room; ?></td>
                                          <td><?php foreach($ms as $var){echo "<ul><li>".$var . "</li></ul>";} ?></td>
                                          <td><?php echo $persons; ?></td>
                                          <td><?php echo $var; ?></td>
                                          <td><?php echo $time; ?></td>
                                          <td><?php echo $end; ?></td>
                                          <td><?php echo $amount; ?></td>
                                        </tr>
                                <?php } }?>
                                        <tr>
                                          <td colspan="7"></td>
                                          <td><b>Total: </b></td>
                                          <td><?php echo $total; ?></td>
                                        </tr>
                                </tbody>
                                </table>
                              <?php 
                                    } 
                                   }
                                  }
                                  else if(isset($_POST['submit2']))
                                  {
                                    $bydate = $_POST['bydate'];
                                    $year = substr($bydate, -10, 4);
                                    $month = substr($bydate, -5, 2);
                                    $day = substr($bydate, -2, 2);
                                    $bydate2 = date("d/m/Y", mktime(0, 0, 0, $day, $month, $year));
                                    $total=0;
                                    ?>
                                    <h3>Date: <?php echo $bydate2?></h3>
                                    <table class="table table-bordered table-hover table-striped" style="overflow-y:hidden;">
                                      <thead>
                                        <tr>
                                          <th>Transaction no.</th>
                                          <th>Customer's name</th>
                                          <th>Room no.</th>
                                          <th>Movie(s)</th>
                                          <th>No. of persons</th>
                                          <th>Transaction Date</th>
                                          <th>Start Time</th>
                                          <th>End time</th>
                                          <th>Amount (Php)</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                    <?php
                                    //echo "<b>".$bydate2."</b>";
                                    $qry = "SELECT * FROM tbltransactions WHERE trans_date = '".$bydate2."' ORDER BY trans_date DESC";
                                    $result=$con->query($qry);
                                    $ms = array();
                                    while($row=$result->fetch_array())
                                    {
                                        $trans_id = $row['transaction_id'];
                                        $name = $row['cust_name'];
                                        $room = $row['room'];
                                        $movies = $row['movies'];
                                        $time = $row['time'];
                                        $end = $row['end_time'];
                                        $persons = $row['num_of_persons'];
                                        $amount = $row['amount'];

                                        $ms = explode(",", $movies);
                                        $total+=$amount;
                                  ?>
                                        <tr>
                                          <td><?php echo $trans_id; ?></td>
                                          <td><?php echo $name; ?></td>
                                          <td><?php echo $room; ?></td>
                                          <td><?php foreach($ms as $var){echo "<ul><li>".$var . "</li></ul>";} ?></td>
                                          <td><?php echo $persons; ?></td>
                                          <td><?php echo $bydate2; ?></td>
                                          <td><?php echo $time; ?></td>
                                          <td><?php echo $end; ?></td>
                                          <td><?php echo $amount; ?></td>
                                        </tr>
                                  <?php
                                    }
                                  ?>
                                        <tr>
                                          <td colspan="7"></td>
                                          <td><b>Total: </b></td>
                                          <td><?php echo $total; ?></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  <?php
                                  }
                                  else
                                  {
                                    $date = array();
                                    $qry = "SELECT * FROM tbltransactions ORDER BY trans_date DESC";
                                    $result=$con->query($qry);
                                    while($row=$result->fetch_array()) 
                                    {
                                      $date[] = $row['trans_date'];
                                    }
                                    $d = array_unique($date);
                                    foreach($d as $var)
                                    {
                                  ?>
                                    <h3>Date: <?php echo $var?></h3>
                                    <table class="table table-bordered table-hover table-striped" style="overflow-y:hidden;">
                                      <thead>
                                        <tr>
                                          <th>Transaction no.</th>
                                          <th>Customer's name</th>
                                          <th>Room no.</th>
                                          <th>Movie(s)</th>
                                          <th>No. of persons</th>
                                          <th>Transaction Date</th>
                                          <th>Start Time</th>
                                          <th>End time</th>
                                          <th>Amount (Php)</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                    <?php
                                      $total=0;

                                      $qry = "SELECT * FROM tbltransactions WHERE trans_date = '".$var."'";
                                      $result=$con->query($qry);
                                      $ms = array();
                                      while($row2=$result->fetch_array()) 
                                      {
                                        $trans_id = $row2['transaction_id'];
                                        $name = $row2['cust_name'];
                                        $room = $row2['room'];
                                        $movies = $row2['movies'];
                                        $time = $row2['time'];
                                        $end = $row2['end_time'];
                                        $persons = $row2['num_of_persons'];
                                        $amount = $row2['amount'];

                                        $ms = explode(",", $movies);
                                        $total+=$amount;
                                    ?>
                                        <tr>
                                          <td><?php echo $trans_id; ?></td>
                                          <td><?php echo $name; ?></td>
                                          <td><?php echo $room; ?></td>
                                          <td><?php foreach($ms as $var){echo "<ul><li>".$var . "</li></ul>";} ?></td>
                                          <td><?php echo $persons; ?></td>
                                          <td><?php echo $var; ?></td>
                                          <td><?php echo $time; ?></td>
                                          <td><?php echo $end; ?></td>
                                          <td><?php echo $amount; ?></td>
                                        </tr>
                                <?php } ?>
                                        <tr>
                                          <td colspan="7"></td>
                                          <td><b>Total: </b></td>
                                          <td><?php echo $total; ?></td>
                                        </tr>
                                </tbody>
                                </table>
                              <?php } 
                                  }
                              ?>
                                </div>
                                 <div class="text-center">
                                    <button type="button" class="btn btn-primary" name="btnprint" id="btnprint" onclick="printpage()"><i class="fa fa-print"></i> PRINT</button>
                                 </div>

                                 <style type="text/css">

                                    @media print {
                                          /* style sheet for print goes here */
                                          .btn {  display:none; }
                                        }

                                 </style>

                                 <script>
                                    function printpage()
                                      {
                                      window.print()
                                      }
                                </script>

                                <div class="text-left">
                                   <a href="admin.php"> <i class="fa fa-arrow-circle-left"></i> Go back </a>
                                </div>

                            </div>
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

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

    <script>
      $('#ddate').hide();
      $("#datefil").change(function() {
          var e = document.getElementById("datefil");
          var sel = e.options[e.selectedIndex].text;
          if(sel=="Date")
          {
            $('#subfil').hide();
            $('#subfil2').show();
            $('#ddate').show();
          }
      });
    </script>

</body>

</html>
