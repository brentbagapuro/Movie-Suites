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
                    <li class="active">
                        <a href="addmovie.php"><i class="fa fa-fw fa-film"></i> Movie</a>
                    </li>
                    <li>
                        <a href="adduser.php"><i class="fa fa-fw fa-user"></i> Employee</a>
                    </li>
                    <li >
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
                            Movie
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Movie
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Register movie</h2>
                            <form role="form" action="addmovieprocess.php" method="post" enctype="multipart/form-data">

                                <input type="hidden" id="id" name="id" value="" />
                                <b style="font-size: 15px;">Title: </b>
                                <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-film"></i></span>
                                <input type="text" class="form-control" placeholder="Title" name="title" id="title" style="width:270px;">
                                </div>
                                <b style="font-size: 15px;">Artist: </b>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" placeholder="Artists" class="form-control" name="artists" id="artists" style="width:270px;"> 
                                </div>
                                <b style="font-size: 15px;">Director: </b>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" placeholder="Director" class="form-control" name="director" id="director" style="width:270px;"> 
                                </div>
                                <div class="form-group">
                                    <label>Genre:</label>
                                    
                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="checkbox" id="checkbox1" name="checkbox[]" value="Action">Action
                                    </label>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="checkbox" id="checkbox2" name="checkbox[]" value="Adventure">Adventure
                                    </label>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="checkbox" id="checkbox3" name="checkbox[]" value="Comedy">Comedy
                                    </label>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="checkbox" id="checkbox4" name="checkbox[]" value="Drama">Drama
                                    </label>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="checkbox" id="checkbox5" name="checkbox[]" value="Musical">Musical
                                    </label>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="checkbox" id="checkbox6" name="checkbox[]" value="Horror">Horror
                                    </label>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="checkbox" id="checkbox7" name="checkbox[]" value="Thriller">Thriller
                                    </label>   
                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="checkbox" id="checkbox8" name="checkbox[]" value="Romance">Romance
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="checkbox" id="checkbox9" name="checkbox[]" value="Sci-fi">Sci-fi
                                    </label>
                                    
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="number" min="1900" max="2020" step="1" name="year" id="year" value="2018" class="form-control" style="width:270px;"> 
                                </div>
                                <label>Duration:</label>

                                <div class="form-group input-group">

                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="number" placeholder="hour" name="hr" id="hr"  class="form-control" style="width:80px;"> 

                                   
                                    <input type="number" placeholder="min" name="min" id="min"  class="form-control" style="width:80px;"> 

                                    <input type="number" placeholder="sec" name="sec" id="sec"  class="form-control" style="width:80px;"> 
                                </div>

                                <div class="form-group">
                                    <label>Description:</label>
                                    <textarea class="form-control" rows="3" id="description" name="description"></textarea>
                                </div> 

                                <div class="form-group" >
                                   <input type="file" name="file">
                                 </div><br> 



                                <button type="button" class="btn btn-primary" name="btnsubmit" id="btnsubmit" data-toggle="modal" data-target="#confirm-add">Add movie</button>

                                <button type="button" class="btn btn-primary" name="btnsubmit2" id="btnsubmit2" data-toggle="modal" data-target="#confirm-update" disabled>Update movie
                                </button>

                                <button type="button" class="btn btn-primary" name="btnsubmit3" id="btnsubmit3" data-toggle="modal" data-target="#confirm-delete" disabled>Delete movie
                                </button>
                               

                                <div class="modal fade" id="confirm-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <b>Confirm Update</b>
                                          </div>
                                          <div class="modal-body">
                                              You are about to add this movie's information.
                                              <br>
                                              Do you want to proceed?
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                              <button type="submit" class="btn btn-info btn-ok" name="btnsubmit" id="btnsubmit" style="background-color: #1E90FF; color: white; border: #1E90FF">Add</button>
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
                                              You are about to update this movie's information.
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
                                          You are about to delete this movie.
                                          <br>
                                          Do you want to proceed?
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                          <button class="btn btn-danger btn-ok" type="submit" name="del" id="del">Delete</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                                
                            </form>
                    </div>

                    <div class="col-lg-6">
                        <form role="role"  action="#" method="post">
                            <h2>Movie list</h2>
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
                        <div class="table-responsive" style="overflow:scroll;height:400px;">

                            <table class="table table-bordered table-hover table-striped"  id="table1">
                                <thead>
                                    <tr>
                                        <th>Movie ID</th>
                                        <th>Title</th>
                                        <th>Genre</th>

                                         <th>Duration</th>

                                          <th>Artists</th>

                                        <th>Director</th>
                                        <th>Year released</th>
                                       
                                    </tr>

                                </thead>
                              

                                   <?php //output all list from database
                         
                         if(isset($_POST['search1']))
                         {
                           $filter = $_POST['filter'];
                           $search = $_POST['search'];

                           if($filter=="Title")
                           {
                              $qry = "SELECT * FROM tblmovie WHERE title LIKE '%$search%'";
                              $result=$con->query($qry);
                              if(mysqli_num_rows($result) > 0)
                              {
                                while($row=$result->fetch_array())
                                {
                                  $movie_id = $row['movie_id'];  
                                  $title = $row['title'];
                                  $artists = $row['artist'];
                                  $director = $row['director'];
                                  $genre = $row['genre'];
                                  $duration = $row['duration'];
                                  $description = $row['description'];
                                  $year = $row['year'];
                                
                    ?>

                                <tr>
                                   <td style="font-size:13px;"><?php echo $movie_id; ?></td>
                                   <td style="font-size:13px;"><?php echo $title; ?></td>
                                   <td style="font-size:13px;"> <?php echo $genre; ?></td>
                                   <td style="font-size:13px;"> <?php echo $duration ; ?></td>
                                   <td style="font-size:13px;"><?php echo $artists; ?></td>
                                   <td style="font-size:13px;"><?php echo $director; ?></td>
                                   <td style="font-size:13px;"> <?php echo $year; ?></td>
                                   <td style="font-size:13px;"><?php echo $description; ?></td>
                                </tr>

                    <?php
                                }//end of title while
                              }//end of if
                              else
                              {
                                ?>
                                <tr>
                                  <td style="font-size:50px;"><center>No Results</center></td>
                                </tr>
                                <?php
                              }
                            }//end of if title
                            if($filter=="Genre")
                           {
                            $qry = "SELECT * FROM tblmovie WHERE genre LIKE '%$search%'";
                            $result=$con->query($qry);
                            if(mysqli_num_rows($result) > 0)
                            {
                            while($row=$result->fetch_array())
                            {
                              $movie_id = $row['movie_id'];  
                              $title = $row['title'];
                              $artists = $row['artist'];
                              $director = $row['director'];
                              $genre = $row['genre'];
                              $duration = $row['duration'];
                              $description = $row['description'];
                              $year = $row['year'];
                            
                           
                    ?>

                          <tr>
                             <td style="font-size:13px;"><?php echo $movie_id; ?></td>
                             <td style="font-size:13px;"><?php echo $title; ?></td>
                             <td style="font-size:13px;"> <?php echo $genre; ?></td>
                             <td style="font-size:13px;"> <?php echo $duration ; ?></td>
                             <td style="font-size:13px;"><?php echo $artists; ?></td>
                             <td style="font-size:13px;"><?php echo $director; ?></td>
                             <td style="font-size:13px;"> <?php echo $year; ?></td>
                             <td style="font-size:13px;"><?php echo $description; ?></td>
                          </tr>

                    <?php
                            }//end of genre while
                            }//end of if
                              else
                              {
                                ?>
                                <tr>
                                  <td style="font-size:50px;"><center>No Results</center></td>
                                </tr>
                                <?php
                              }
                              }//end of if genre
                            if($filter=="Artist")
                           {
                            $qry = "SELECT * FROM tblmovie WHERE artist LIKE '%$search%'";
                            $result=$con->query($qry);
                            if(mysqli_num_rows($result) > 0)
                              {
                            while($row=$result->fetch_array())
                            {
                              $movie_id = $row['movie_id'];  
                              $title = $row['title'];
                              $artists = $row['artist'];
                              $director = $row['director'];
                              $genre = $row['genre'];
                              $duration = $row['duration'];
                              $description = $row['description'];
                              $year = $row['year'];
                           
                    ?>

                          <tr>
                             <td style="font-size:13px;"><?php echo $movie_id; ?></td>
                             <td style="font-size:13px;"><?php echo $title; ?></td>
                             <td style="font-size:13px;"> <?php echo $genre; ?></td>
                             <td style="font-size:13px;"> <?php echo $duration ; ?></td>
                             <td style="font-size:13px;"><?php echo $artists; ?></td>
                             <td style="font-size:13px;"><?php echo $director; ?></td>
                             <td style="font-size:13px;"> <?php echo $year; ?></td>
                             <td style="font-size:13px;"><?php echo $description; ?></td>
                          </tr>

                    <?php
                          }//end of artist while
                          }//end of if
                              else
                              {
                                ?>
                                <tr>
                                  <td style="font-size:50px;"><center>No Results</center></td>
                                </tr>
                                <?php
                              }
                            }//end of if artist
                            if($filter=="Director")
                           {
                            $qry = "SELECT * FROM tblmovie WHERE director LIKE '%$search%'";
                            $result=$con->query($qry);
                            if(mysqli_num_rows($result) > 0)
                              {
                            while($row=$result->fetch_array())
                            {
                              $movie_id = $row['movie_id'];  
                              $title = $row['title'];
                              $artists = $row['artist'];
                              $director = $row['director'];
                              $genre = $row['genre'];
                              $duration = $row['duration'];
                              $description = $row['description'];
                              $year = $row['year'];
                           
                    ?>

                          <tr>
                             <td style="font-size:13px;"><?php echo $movie_id; ?></td>
                             <td style="font-size:13px;"><?php echo $title; ?></td>
                             <td style="font-size:13px;"> <?php echo $genre; ?></td>
                             <td style="font-size:13px;"> <?php echo $duration ; ?></td>
                             <td style="font-size:13px;"><?php echo $artists; ?></td>
                             <td style="font-size:13px;"><?php echo $director; ?></td>
                             <td style="font-size:13px;"> <?php echo $year; ?></td>
                             <td style="font-size:13px;"><?php echo $description; ?></td>
                          </tr>

                    <?php
                              }//end of director while
                              }//end of if
                              else
                              {
                                ?>
                                <tr>
                                  <td style="font-size:50px;"><center>No Results</center></td>
                                </tr>
                                <?php
                              }
                            }//end of if director
                          } //end of isset
                          else
                          {
                              $qry = "SELECT * FROM tblmovie"; 
                              $result=$con->query($qry);
                              while($row=$result->fetch_array()) 
                              {
                              $movie_id = $row['movie_id'];  
                              $title = $row['title'];
                              $artists = $row['artist'];
                              $director = $row['director'];
                              $genre = $row['genre'];
                              $duration = $row['duration'];
                              $description = $row['description'];
                              $year = $row['year'];

                    ?>
                          <tr>
                               <td style="font-size:13px;"><?php echo $movie_id; ?></td>
                               <td style="font-size:13px;"><?php echo $title; ?></td>
                               <td style="font-size:13px;"> <?php echo $genre; ?></td>
                               <td style="font-size:13px;"> <?php echo $duration ; ?></td>
                               <td style="font-size:13px;"><?php echo $artists; ?></td>
                               <td style="font-size:13px;"><?php echo $director; ?></td>
                               <td style="font-size:13px;"> <?php echo $year; ?></td>
                               <td style="font-size:13px;visibility:hidden;font-size:1px;"><?php echo $description; ?></td>
                          </tr>
                    <?php } }?> 

                      </table>




           <script>
                var table = document.getElementById("table1");
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         $(".checkbox").prop("checked", false);
                         document.getElementById("btnsubmit").disabled = true;
                         document.getElementById("btnsubmit2").disabled = false;
                         document.getElementById("btnsubmit3").disabled = false;
                         //rIndex = this.rowIndex;
                         //console.log(rIndex);
                         var javascriptVariable = this.cells[0].innerHTML;
                         document.getElementById('id').value = javascriptVariable;
                         document.getElementById("title").value = this.cells[1].innerHTML;
                         document.getElementById("artists").value = this.cells[4].innerHTML;
                         document.getElementById("director").value = this.cells[5].innerHTML;

                         var gen = this.cells[2].innerHTML;
                         var res = gen.split(",");
                         var r = res[0];
                         res[0] = r.substr(1);
                         var check1 = document.getElementById("checkbox1").value;
                         var check2 = document.getElementById("checkbox2").value;
                         var check3 = document.getElementById("checkbox3").value;
                         var check4 = document.getElementById("checkbox4").value;
                         var check5 = document.getElementById("checkbox5").value;
                         var check6 = document.getElementById("checkbox6").value;
                         var check7 = document.getElementById("checkbox7").value;
                         var check8 = document.getElementById("checkbox8").value;
                         for(var j=0; j<res.length; j++)
                         {
                            if(res[j]==check1)
                              $("#checkbox1").prop("checked", true);
                            if(res[j]==check2)
                              $("#checkbox2").prop("checked", true);
                            if(res[j]==check3)
                              $("#checkbox3").prop("checked", true);
                            if(res[j]==check4)
                              $("#checkbox4").prop("checked", true);
                            if(res[j]==check5)
                              $("#checkbox5").prop("checked", true);
                            if(res[j]==check6)
                              $("#checkbox6").prop("checked", true);
                            if(res[j]==check7)
                              $("#checkbox7").prop("checked", true);
                            if(res[j]==check8)
                              $("#checkbox8").prop("checked", true);
                         }
                         

                         /*var element = document.getElementById("genre");
                         var opt=this.cells[2].innerHTML;
                         element.value=opt.replace(" ", '');*/

                         var dur=this.cells[3].innerHTML;
                         var hr=dur.charAt(1);
                         var min=dur.substring(3, 5);
                         var sec=dur.substring(6, 8);
                         document.getElementById("hr").value = hr;
                         document.getElementById("min").value = min;
                         document.getElementById("sec").value = sec;
                           $('#year').val(parseInt(this.cells[6].innerHTML));
                         document.getElementById("description").value = this.cells[7].innerHTML;
                    };
                }

                $('#confirm-update').on('show.bs.modal', function(e) {
                    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                });

                $('#confirm-delete').on('show.bs.modal', function(e) {
                    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                });
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
