
  <?php
  session_start();

     include("includes/connection.php");
     if (isset($_COOKIE['cust_id']) && !isset($_SESSION['cust_id'])) {
       $id = $_COOKIE['cust_id'];

     }else {
          $id = $_SESSION['cust_id'];
          
        }
     
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/ac-700x128.png" type="image/x-icon">
  <meta name="description" content="">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" type="text/css" href="login.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <title>Checkout</title>


  <style type="text/css">
    .form1{
      height: 820px;
      width: 300px;
      margin-top: 120px;
      text-align: left;
      }
      .form2{
      height: 820px;
      width: 300px;
      margin-top: 120px;
      text-align: left;
     
      position: absolute;

      }
      .text-field{
        margin-left: 20px;
        color: black;
      }
      button{
       margin-left: 20px; 
      }
      .number{
        margin-left: 20px;
        border: 1px solid #a6a6a6;
        width: 65px;
        height: 40px;
        border-radius: 3px;
        margin-top: 10px;
        padding-left: 10px;
        color: #6c6c6c;
        background: #FDFDFF;
        outline: none;
      }
      .textarea{
        margin-left: 20px;
        border: 1px solid #a6a6a6;
        width: 233px;
        height: 80px;
        border-radius: 3px;
        margin-top: 10px;
        padding-left: 10px;
        color: #6c6c6c;
        background: #FDFDFF;
        outline: none;
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
                        <a class="navbar-caption text-white" href="https://mobirise.com">MOVIE SUITES - Receptionist</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul style="opacity:0.8;" class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-xl" id="exCollapsingNavbar">
                      <li class="nav-item"><a class="nav-link link" href="receptionist_home.php"><span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>MOVIE SUITES</a></li>

                      <li class="nav-item dropdown"><a class="nav-link link" href="addcustomer.php" aria-expanded="true"><span class="mbri-bookmark mbr-iconfont mbr-iconfont-btn"></span>Customer</a></li>


                      <li class="nav-item dropdown"><a class="nav-link link"  href="addmovie.php" aria-expanded="false"><span class="mbri-video-play mbr-iconfont mbr-iconfont-btn"></span>Billing</a></li>

                    

                      <li class="nav-item nav-btn"><a class="nav-link btn btn-white btn-white-outline" href="logout.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>LOG OUT</a></li>

                      </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<form data-target="#movie" method="post" class="form1" ><br>
              <h2 style="margin-left:10px;">Billing Form</h2>
                
                
                <input type="text" class="text-field" placeholder="Title" id="title" name="title" required="yes" /><br>
                <input type="text" class="text-field" placeholder="Artists" id="artists" name="artists" required="yes" /><br>
                <input type="text" class="text-field" placeholder="Director" id="director" name="director" required="yes" /><br><br>
               
               <p style="margin-left:20px;">Genre: </p>
                <input type="checkbox" class="checkbox" id="checkbox1" name="checkbox[]" value="Action" style="margin-left:2em; display: inline;"/>Action<br>
                                        <input type="checkbox" class="checkbox" id="checkbox2" name="checkbox[]" value="Adventure" style="margin-left:2em; display: inline;"/>Adventure<br>
                                        <input type="checkbox" class="checkbox" id="checkbox3" name="checkbox[]" value="Comedy" style="margin-left:2em; display: inline;"/>Comedy<br>
                                        <input type="checkbox" class="checkbox" id="checkbox4" name="checkbox[]" value="Drama" style="margin-left:2em; display: inline;"/>Drama<br>
                                        <input type="checkbox" class="checkbox" id="checkbox5" name="checkbox[]" value="Musical" style="margin-left:2em; display: inline;"/>Musical<br>
                                        <input type="checkbox" class="checkbox" id="checkbox6" name="checkbox[]" value="Horror" style="margin-left:2em; display: inline;"/>Horror<br>
                                        <input type="checkbox" class="checkbox" id="checkbox7" name="checkbox[]" value="Thriller" style="margin-left:2em; display: inline;"/>Thriller<br>
                                        <input type="checkbox" class="checkbox" id="checkbox8" name="checkbox[]" value="Romance" style="margin-left:2em; display: inline;"/>Romance<br>

              

                <input type="number" min="1900" max="2020" step="1" class="text-field" placeholder="Year released" name="year" id="year" value="2016" required="yes" /><br>
                <input type="number" class="number" placeholder="hour" name="artist" required="yes" />
                :
                <input type="number" placeholder="min" required="yes" name="min" id="min" class="text-field" style="width: 55px;">
                :
                <input type="number" placeholder="sec" required="yes" name="sec" id="sec" class="text-field" style="width: 55px;">

                <br>

                <textarea class="textarea" Placeholder="Description" name="description" id="description" required="yes"></textarea><br>

                <input type="file" name="file" style="margin-left:20px;"> <br>
            <br>



                  <button type="button" class="btn btn-primary btn-md">Done</button>
             
  </form>

  <form data-target="#movie" method="post" class="form2" ><br>
              <h2 style="margin-left:10px;">Billing Form</h2>
                
                
                <input type="text" class="text-field" placeholder="Title" id="title" name="title" required="yes" /><br>
                <input type="text" class="text-field" placeholder="Artists" id="artists" name="artists" required="yes" /><br>
                <input type="text" class="text-field" placeholder="Director" id="director" name="director" required="yes" /><br><br>
               
               <p style="margin-left:20px;">Genre: </p>
                <input type="checkbox" class="checkbox" id="checkbox1" name="checkbox[]" value="Action" style="margin-left:2em; display: inline;"/>Action<br>
                                        <input type="checkbox" class="checkbox" id="checkbox2" name="checkbox[]" value="Adventure" style="margin-left:2em; display: inline;"/>Adventure<br>
                                        <input type="checkbox" class="checkbox" id="checkbox3" name="checkbox[]" value="Comedy" style="margin-left:2em; display: inline;"/>Comedy<br>
                                        <input type="checkbox" class="checkbox" id="checkbox4" name="checkbox[]" value="Drama" style="margin-left:2em; display: inline;"/>Drama<br>
                                        <input type="checkbox" class="checkbox" id="checkbox5" name="checkbox[]" value="Musical" style="margin-left:2em; display: inline;"/>Musical<br>
                                        <input type="checkbox" class="checkbox" id="checkbox6" name="checkbox[]" value="Horror" style="margin-left:2em; display: inline;"/>Horror<br>
                                        <input type="checkbox" class="checkbox" id="checkbox7" name="checkbox[]" value="Thriller" style="margin-left:2em; display: inline;"/>Thriller<br>
                                        <input type="checkbox" class="checkbox" id="checkbox8" name="checkbox[]" value="Romance" style="margin-left:2em; display: inline;"/>Romance<br>

              

                <input type="number" min="1900" max="2020" step="1" class="text-field" placeholder="Year released" name="year" id="year" value="2016" required="yes" /><br>
                <input type="number" class="number" placeholder="hour" name="artist" required="yes" />
                :
                <input type="number" placeholder="min" required="yes" name="min" id="min" class="text-field" style="width: 55px;">
                :
                <input type="number" placeholder="sec" required="yes" name="sec" id="sec" class="text-field" style="width: 55px;">

                <br>

                <textarea class="textarea" Placeholder="Description" name="description" id="description" required="yes"></textarea><br>

                <input type="file" name="file" style="margin-left:20px;"> <br>
            <br>



                  <button type="button" class="btn btn-primary btn-md">Done</button>
             
  </form>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>