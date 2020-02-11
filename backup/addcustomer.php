  <?php include("includes/connection.php"); ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title> Customer Information</title>
    <!-- Site made with Mobirise Website Builder v3.10.5, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v3.10.5, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-128x128.jpg" type="image/x-icon">
    <meta name="description" content="">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    
    
    <style type="text/css">
    
    
    .text-field{
      border: 1px solid #a6a6a6;
      width: 230px;
      height: 40px;
      border-radius: 3px;
      padding-left: 10px;
      color: black;
      background: #FDFDFF;
      outline: none;
      font-family: 'Sans Serif';

    }
    .text-field1{
      border: 1px solid #a6a6a6;
      width: 230px;
      height: 90px;
      border-radius: 3px;
      padding-left: 10px;
      color: #6c6c6c;
      background: #FDFDFF;
      outline: none;
      font-family: 'Sans Serif';

    }
    .text-field2{
      border: 1px solid #a6a6a6;
      width: 100px;
      height: 30px;
      border-radius: 3px;
      padding-left: 10px;
      color: #6c6c6c;
      background: #FDFDFF;
      outline: none;
      font-family: 'Sans Serif';

    }
    .text-field:focus {
    box-shadow: inset 0 0 2px rgba(0,0,0, .3);
    color: black;
    background: #ccffff;
    }


    </style>
    
  </head>
  <body>
  <section id="menu-3a">

      <nav class="navbar navbar-dropdown navbar-fixed-top">
          <div class="container">

              <div class="mbr-table">
                  <div class="mbr-table-cell" >

                      <div class="navbar-brand">
                          <a href="https://mobirise.com" class="navbar-logo"><img src="assets/images/logo.png" alt="Mobirise"></a>
                          <a class="navbar-caption text-white" href="https://mobirise.com">MOVIE SUITES - Admin</a>
                      </div>

                  </div>
                  <div class="mbr-table-cell">

                      <button class="navbar-toggler pull-xs-right" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                          <div class="hamburger-icon"></div>
                      </button>

                      <ul style="opacity:0.90;" class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-xl" id="exCollapsingNavbar">
                        <li class="nav-item"><a class="nav-link link" href="admin_home.php"><span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>MOVIE SUITES</a></li>

                        <li class="nav-item dropdown"><a class="nav-link link" href="addcustomer.php" aria-expanded="true"><span class="mbri-bookmark mbr-iconfont mbr-iconfont-btn"></span>Customer</a></li>

                        <li class="nav-item dropdown"><a class="nav-link link" href="addmovie.php" aria-expanded="false"><span class="mbri-video-play mbr-iconfont mbr-iconfont-btn"></span>Movie</a></li>
                        <li class="nav-item dropdown"><a class="nav-link link" href="reports.php" aria-expanded="true"><span class="mbri-edit mbr-iconfont mbr-iconfont-btn"></span>Reports</a></li>
                        <li class="nav-item nav-btn"><a class="nav-link btn btn-white btn-white-outline" href="logout.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>LOG OUT</a></li></ul>
                      <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                          <div class="close-icon"></div>
                      </button>

                  </div>
              </div>

          </div>
      </nav>

  </section>


  <section class="engine"><a rel="external" href="https://mobirise.com">top responsive web site generator software download</a></section><section class="mbr-section mbr-after-navbar" id="form1-3c" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
      <form method="POST" action="addcustomerprocess.php" enctype="multipart/form-data">
      <div class="mbr-section mbr-section__container mbr-section__container--middle">
          <div class="container">
          
              <div class="row">
                  <div class="col-xs-4 text-xs-left">
                      <h4 class="mbr-section-title display-3">Customer details</h4>
                      <div class="mbr-section mbr-section-nopadding">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-xs-10 col-lg-offset-1" data-form-type="formoid">                    
                      <p class="text-danger" style="font-size:10px;">NOTE: Fields with * is required!</p>

                      <input type="hidden" id="id" name="id" value="" />

                    <div class="form-group">
                          <b style="color:red;">* </b><input type="text" placeholder="First name" name="fname" id="fname" required="yes" class="text-field">
                          
                    </div>
                    <div class="form-group">
                            <b style="color:red;">* </b><input type="text" placeholder="Middle name" required="yes" name="mname" id="mname" class="text-field"> 
                            </div>
                    <div class="form-group">
                            <b style="color:red;">* </b><input type="text" placeholder="Last name" required="yes" name="lname" id="lname" class="text-field">
                    </div>   
                     <div class="form-group">
                            <b style="color:red;">* </b><input type="text" placeholder="Contact number" required="yes" name="cnum" id="cnum" class="text-field">
                    </div>   
                    
                    
                    <div class="form-group">
                            <b style="color:red;">* </b><input type="text" placeholder="Username" required="yes" name="username" id="username" class="text-field">
                    </div>   
                    
                     <div class="form-group">
                            <b style="color:red;">* </b><input type="password" placeholder="Password" required="yes" name="password" id="password" class="text-field">
                    </div>   
                    
                    

                     <div class="form-group">
                         <div><button type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary"><span class="mbri-plus mbr-iconfont mbr-iconfont-btn small"></span>ADD CUSTOMER</button></div>
                         <br>
                         <div><button type="submit" style="font-size: 10px;"" name="btnsubmit2" id="btnsubmit2" class="btn btn-primary" disabled><span class="mbri-plus mbr-iconfont mbr-iconfont-btn small""></span>UPDATE CUSTOMER</button></div>
                         <br>
                         <div><button type="submit"  style="font-size: 10px;" name="btnsubmit3" id="btnsubmit3" class="btn btn-primary" disabled><span class="mbri-plus mbr-iconfont mbr-iconfont-btn small"></span>DELETE CUSTOMER</button></div>   
                                    <br>
                        <div><button type="submit"  style="font-size: 10px;" name="btnsubmit4" id="btnsubmit4" class="btn btn-primary" disabled><span class="mbri-plus mbr-iconfont mbr-iconfont-btn small"></span>BLACKLIST</button></div>   
                        
                                             
                     </div>
                    </div>
                       
                    </div>
                  </div>
                    </div>
                      
                  </div>

                  <div class="col-xs-8"  >
                     <h3 class="mbr-section-title display-3">Customer list</h3>
                    <div style="overflow:scroll;width:850px;height:500px;" >

                   

                   </form>


                      <form action="#" method="post" data-form-title="Customer"  >
                      <div class="form-group">
                          <select class="text-field2" name="filter" id="filter">
                            <option>Firstname</option>
                            <option>Middlename</option>
                            <option>Lastname</option>

                          </select> <input type="text" name="search" placeholder="Search.."> <input type="submit" name="search1" id="search1" value="Search">

                          <input type="submit" name="refresh" id="refresh" value="Refresh">
                      </div>
                     
                     
                    
                         <div class="table-responsive table-bordered"  >
                        <table class="table table-hover " id ="table table-hover1" >
                    <tr>
                          <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;"> Customer&nbspID</td>
                          <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;"> Fullname</td>  
                          <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;visibility: hidden;"> </td>
                          <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;visibility: hidden;"> </td>
                          <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;visibility: hidden;"> Contact&nbspnumber</td>
                          <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;visibility: hidden;"> Username</td>
                          <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;visibility: hidden;"> Password</td>   
                         
                    </tr>


                        
                        <?php //output all list from database
                         
                         if(isset($_POST['search1']))
                         {
                           $filter = $_POST['filter'];
                           $search = $_POST['search'];

                           if($filter=="Firstname")
                           {
                              $result = mysql_query("SELECT * FROM tblcustomer WHERE fname LIKE '%$search%'");
                              if(mysql_num_rows($result) > 0)
                              {
                                while($row=mysql_fetch_array($result))
                                {
                                  $cust_id = $row['cust_id'];  
                                  $fname = $row['fname'];
                                  $mname = $row['mname'];
                                  $lname = $row['lname'];
                                  $cnum = $row['contact_num'];
                                  $username = $row['username'];
                                  $password = $row['password'];
                                  
                                
                    ?>

                                <tr>
                                   <td style="font-size:13px;"> <?php echo $cust_id; ?></td>
                                   <td style="font-size:13px;" > <?php echo $fname . " " . $mname . " " . $lname; ?></td>
                                   <td  style="font-size:3px;visibility: hidden;"> <?php echo $fname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $mname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $lname ; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $cnum; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $username; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $password; ?></td>
                                   
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
                            $result = mysql_query("SELECT * FROM tblcustomer WHERE mname LIKE '%$search%'");
                              if(mysql_num_rows($result) > 0)
                              {
                                while($row=mysql_fetch_array($result))
                                {
                                  $cust_id = $row['cust_id'];  
                                  $fname = $row['fname'];
                                  $mname = $row['mname'];
                                  $lname = $row['lname'];
                                  $cnum = $row['contact_num'];
                                  $username = $row['username'];
                                  $password = $row['password'];
                            
                           
                    ?>

                          <tr>
                                   <td style="font-size:13px;"> <?php echo $cust_id; ?></td>
                                   <td style="font-size:13px;" > <?php echo $fname . " " . $mname . " " . $lname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $fname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $mname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $lname ; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $cnum; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $username; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $password; ?></td>
                                   
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
                           $result = mysql_query("SELECT * FROM tblcustomer WHERE lname LIKE '%$search%'");
                              if(mysql_num_rows($result) > 0)
                              {
                                while($row=mysql_fetch_array($result))
                                {
                                  $cust_id = $row['cust_id'];  
                                  $fname = $row['fname'];
                                  $mname = $row['mname'];
                                  $lname = $row['lname'];
                                  $cnum = $row['contact_num'];
                                  $username = $row['username'];
                                  $password = $row['password'];
                           
                    ?>

                        <tr >
                                   <td style="font-size:13px;"> <?php echo $cust_id; ?></td>
                                   <td style="font-size:13px;" > <?php echo $fname . " " . $mname . " " . $lname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $fname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $mname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $lname ; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $cnum; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $username; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $password; ?></td>
                                   
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



                              $result = mysql_query("SELECT * FROM tblcustomer");
                              if(mysql_num_rows($result) > 0)
                              {
                                while($row=mysql_fetch_array($result))
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
                                    {?>
                                        <td bgcolor="red" style="font-size:13px;"> <?php echo $cust_id; ?></td>
                                         <td bgcolor="red" style="font-size:13px;" > <?php echo $fname . " " . $mname . " " . $lname; ?></td>
                                    <?php }
                                     else if ($status == "ACTIVE" )
                                    {?>
                                      <td style="font-size:13px;"> <?php echo $cust_id; ?></td>
                                      <td style="font-size:13px;" > <?php echo $fname . " " . $mname . " " . $lname; ?></td>
                                      
                                      <?php } ?>

                                   
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $fname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $mname; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $lname ; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $cnum; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $username; ?></td>
                                   <td style="font-size:3px;visibility: hidden;"> <?php echo $password; ?></td>
                                   
                                </tr>
                    <?php } }  } ?>



                      </table>


          <script>
                var table = document.getElementById("table table-hover1");
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         document.getElementById("btnsubmit").disabled = true;
                         document.getElementById("btnsubmit2").disabled = false;
                         document.getElementById("btnsubmit3").disabled = false;
                         document.getElementById("btnsubmit4").disabled = false;


                         //rIndex = this.rowIndex;
                         //console.log(rIndex);
                         var javascriptVariable = this.cells[0].innerHTML;
                         document.getElementById('id').value = javascriptVariable;
                         document.getElementById("fname").value = this.cells[2].innerHTML;
                         document.getElementById("mname").value = this.cells[3].innerHTML;
                         document.getElementById("lname").value = this.cells[4].innerHTML;
                         document.getElementById("cnum").value = this.cells[5].innerHTML;
                         document.getElementById("username").value = this.cells[6].innerHTML;
                         document.getElementById("password").value = this.cells[7].innerHTML;

                         <?php
                            if($status=="BLOCKED")
                            {
                              echo "$('#btnsubmit4').html('UNBLOCK');";
                            }
                          ?>
                         
                    };
                }

               

         </script>

                       </div>
                     

  </div>


                  </div>
     
                 
                  </div>
                  </div>
              </div>

            </form>

          </div>
      </div>
      
             
      </form>  
  </section>



  <footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-1v" style="background-color: rgb(34, 61, 55); padding-top: 1.75rem; padding-bottom: 1.75rem;">
      
      <div class="container">
          <p class="text-xs-center">Copyright (c) 2017 MOVIESUITES</p>
      </div>
  </footer>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smooth-scroll/SmoothScroll.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
    <script src="assets/jarallax/jarallax.js"></script>
    <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
    <script src="assets/theme/js/script.js"></script>

    
     
    <input name="animation" type="hidden">
    </body>
  </html>