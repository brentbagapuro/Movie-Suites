 
 <?php
  session_start();

     include("includes/connection.php");
     if (isset($_COOKIE['cust_id']) && !isset($_SESSION['cust_id'])) {
       $id = $_COOKIE['cust_id'];

     }else {
          $id = $_SESSION['cust_id'];
          
        }
     date_default_timezone_set('Asia/Kuala_Lumpur');
    $qry = "SELECT * from tblreservation";
    $result=$con->query($qry);
    while($row=$result->fetch_array())
    {
      $cid = $row['cust_id'];
    }
    if(empty($cid))
    {
      $cid=0;
    }
    $qry = "SELECT * from tblcustomer WHERE cust_id = '".$id."'";
    $result=$con->query($qry);
    while($row2=$result->fetch_array())
    {
      $status = $row2['status'];
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
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-play"></i> Genre</a>
                    </li>
                    <li>
                        <a href="#contact"><i class="fa fa-fw fa-phone"></i> Contact us</a>
                    </li>
                     
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
                            <a href="#"><i class="fa fa-fw fa-play"></i> Watchlist</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                </ul>




            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
      <!-- /.col-sm-4 -->
      <div id="page-wrapper">


            <div class="container-fluid">

                <div class="col-lg-12">
                        <h1 class="page-header" style="color:white;">
                            MY WATCHLIST
                        </h1>
                        
                    </div>
                  <div class="row">
                    <div class="col-lg-2 text-left">
                         
                    </div>

                    <div class="col-lg-5 text-left">
                    <p style="color: white">*Click on movie to select for removal. Click again to deselect.</p>
                         <table style="background-color: white;" class="table table-hover " id ="table1">
                                        <tr>
                                              <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;">Movie No.</td>
                                              <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;">Title</td>  
                                             
                                        </tr>


          <?php
              $num=0;
              $qry = "SELECT * FROM tblwatchlist WHERE cust_id='".$id."'";
              $result=$con->query($qry);
              $num_rows = mysqli_num_rows($result);
              if($num_rows==0)
                  {
                    echo "<tr><td colspan=2><b><center>No movies</center></b></td></tr>";
                  }
              while($row=$result->fetch_array()) 
              {
                  $num++;
                  $movie_id = $row['movie_id'];
                  
          ?>
        <tr>
            <td><?php echo $movie_id; ?></td>
        <?php
              $qry2 = "SELECT * FROM tblmovie WHERE movie_id='".$movie_id."'";
              $result2=$con->query($qry2);
              while($row2=$result2->fetch_array())
              {
                  $title = $row2['title'];
             ?>
                  <td><?php echo $title; ?></td>
            <?php
                    }
                }
            ?>
        </tr>      

                                    </table>

                         <button class="btn btn-lg btn-danger" id="btnremove" name="btnremove" onclick="remove();"> Remove</button>
                    
                    </div>
                    <div class="col-lg-2 text-left">
                          

                            <p style="color:white;" >Please fill up the fields required!</p>

                            <br>
                            <p style="color: white;">Number of movies</p>
                            <div class="form-group input-group">
                                 <span class="input-group-addon"><i class="fa fa-play"></i></span>
                                <input type="text" class="form-control" placeholder="Total no. of movies" id="form1-3c-name" name="nos" disabled>
                            </div>
                            <p style="color: white;">Number of persons</p>
                            <div class="form-group input-group">
                                 <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="number" class="form-control" placeholder="Input no. of persons"  id="nop" name="nop">
                            </div>
                            <p style="color: white;">Reservation date</p>
                            <div class="form-group input-group">
                                 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="date" class="form-control" name="date" id="date">
                            </div>
                            <p style="color: white;">Reservation time (hh:mm am/pm)</p>
                            <div class="form-group input-group">
                                 <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                <input type="time" class="form-control" placeholder="" name="time" id="time">
                            </div>

                            <button class="btn btn-lg btn-success" id="btnreserve" name="btnreserve" onclick="sub();">Reserve now</button>
                      
                    </div>
                </div>
        </div>
    </div>
    <?php
      $qry="SELECT * FROM tbltime LIMIT 1";
      $result=$con->query($qry);
      while($row=$result->fetch_array())
      {
        $open_time = $row['open_time'];
        $closing_time = $row['closing_time'];
      }

      $qry="SELECT * FROM tblbilling WHERE cust_id='".$id."'";
      $result=$con->query($qry);
      while($row2=$result->fetch_array())
      {
        $x = $row2['cust_id'];
      }
      if(empty($x))
      {
        $x=0;
      }
    ?>

    <script>
  document.getElementById("form1-3c-name").value = '<?php echo $num; ?>';

  var num_rows = '<?php echo $num_rows; ?>';
  if(num_rows==0)
  {
    document.getElementById('btnremove').disabled = true;
  }
  var open_time = '<?php echo $open_time; ?>';
  var closing_time = '<?php echo $closing_time; ?>';
  var x = '<?php echo $x; ?>';
  var xid = '<?php echo $id; ?>';
  var table = document.getElementById("table1");
  var m=0;
  var mids=new Array();
  for(var i = 1; i < table.rows.length; i++)
  {
    table.rows[i].onclick = function()
    {
      if(this.style.background == "" || this.style.background =="white") {
        $(this).css('background', 'lightskyblue');
        mids[m]=this.cells[0].innerHTML;
        m++;
      }
      else {
        $(this).css('background', 'white');
        var r=mids.indexOf(this.cells[0].innerHTML);
        mids.splice(r, 1);
      }
    };
  }

  function remove()
  {
    $.ajax({
      type: 'POST',
      url: 'rem_function.php',
      data: {Mids: JSON.stringify(mids)},
      success: function(response){
        location.reload();
      }
    });
  }

  var cid = '<?php echo $id; ?>';
  var rcid = '<?php echo $cid; ?>'; // undefined if tblreservation is empty
  var status = '<?php echo $status; ?>';
  var nop1 = document.getElementById("nop");
  var date1 = document.getElementById("date");
  var time1 = document.getElementById("time");

  
  function sub()
  {
    var t = time1.value;
    t = t.split(':');
    var hs = Number(t[0]);
    var ms = Number(t[1]);
    var t1;
    if (hs > 0 && hs <= 12)
    {
      t1= "" + hs;
    } else if (hs > 12)
    {
      t1= "" + (hs - 12);
    }
    else if (hs == 0)
    {
      t1= "12";
    }
    t1 += (ms < 10) ? ":0" + ms : ":" + ms;
    t1 += (hs >= 12) ? " PM" : " AM";

    var inp = new Date(new Date().toDateString()+" "+t1);
    var ot = new Date(new Date().toDateString()+" "+open_time);
    var ct = new Date(new Date().toDateString()+" "+closing_time);
    var ot2 = new Date(ot.getTime() - 1000 * 60 );
    var ct2 = new Date(ct.getTime() - 1000 * 3600 );

    var sendDate = document.getElementById('date').value;
    sendDate = new Date(Date.parse(sendDate.replace(/-/g,' ')));
    today = new Date();
    today.setHours(0,0,0,0);
    
    if(cid==rcid)
    {
      alert("Sorry. You cannot make a reservation while currently having another reservation");
    }
    else if(status == "BLOCKED")
    {
      alert("Sorry. You have been blocked from making any reservations. Please visit your profile for more info. Thank you.");
    }
    else if(nop1.value=="" || date1.value=="" || time1.value=="")
    {
      alert("Please fill up all fields before proceeding.");
      //alert(inp);
    }
    else if(!moment(inp).isBetween(ot2, ct))
    {
      alert("Sorry. You have reserved a time during closed hours. Movie Suites is only open during "+open_time+" - "+closing_time+".");
    }
    else if(moment(inp).isBetween(ct2, ct))
    {
      alert("Sorry. You cannot reserve within one hour before closing time.");
    }
    else if (sendDate < today) {
      alert("Sorry. You cannot reserve a past date.");
    } 
    else if(x==xid)
    {
      alert("Sorry. You cannot make a reservation while watching a movie.");
    }
    /*else if (selectedDate < now) {
      alert("Sorry. You cannot reserve a past date.");
    }*/
    else
    {
      var nop = $('#nop').val();
      var date = $('#date').val();

      var t = $('#time').val();
      t = t.split(':');
      var hours = Number(t[0]);
      var minutes = Number(t[1]);

      // calculate
      var timeValue;

      if (hours > 0 && hours <= 12)
      {
        time= "" + hours;
      } else if (hours > 12)
      {
        time= "" + (hours - 12);
      }
      else if (hours == 0)
      {
        time= "12";
      }
       
      time += (minutes < 10) ? ":0" + minutes : ":" + minutes;
      time += (hours >= 12) ? " pm" : " am";

      $.ajax({
        type: 'POST',
        url: 'res_function.php',
        data: {Cid: cid, Nop: nop, Date: date, Time: time},
        success: function(response){
          location.href="remsuccesspage.php";
        }
      });
    }
  }
</script>

        <!-- Footer -->
         

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- moment.js -->
    <script src="js/moment.js"></script>

</body>

</html>
