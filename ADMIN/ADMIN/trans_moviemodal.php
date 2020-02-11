<?php
     include("includes/connection.php");

     $filter2 = $_POST['Filter2'];
     $txt2 = $_POST['Txt2'];       

     echo $filter2;
     echo $txt2;
?>
<?php
                         /*if(isset($_POST['search1']))
                         {
                           $filter = $_POST['filter'];
                           $search = $_POST['search'];

                           if($filter=="Title")
                           {
                              $result = mysql_query("SELECT * FROM tblmovie WHERE title LIKE '%$search%'");
                              if(mysql_num_rows($result) > 0)
                              {
                                while($row=mysql_fetch_array($result))
                                {
                                  $movie_id = $row['movie_id'];  
                                  $title = $row['title'];
                    ?>

                                <tr class="closemodal">
                                   <td style="font-size:13px;"><?php echo $movie_id; ?></td>
                                   <td style="font-size:13px;"><?php echo $title; ?></td>
                                  
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
                            $result = mysql_query("SELECT * FROM tblmovie WHERE genre LIKE '%$search%'");
                            if(mysql_num_rows($result) > 0)
                            {
                            while($row=mysql_fetch_array($result))
                            {
                              $movie_id = $row['movie_id'];  
                              $title = $row['title'];
                             
                            
                           
                    ?>

                          <tr class="closemodal">
                             <td style="font-size:13px;"><?php echo $movie_id; ?></td>
                             <td style="font-size:13px;"><?php echo $title; ?></td>
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
                            $result = mysql_query("SELECT * FROM tblmovie WHERE artist LIKE '%$search%'");
                            if(mysql_num_rows($result) > 0)
                              {
                            while($row=mysql_fetch_array($result))
                            {
                              $movie_id = $row['movie_id'];  
                              $title = $row['title'];
                    ?>

                          <tr class="closemodal">
                             <td style="font-size:13px;"><?php echo $movie_id; ?></td>
                             <td style="font-size:13px;"><?php echo $title; ?></td>
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
                            $result = mysql_query("SELECT * FROM tblmovie WHERE director LIKE '%$search%'");
                            if(mysql_num_rows($result) > 0)
                              {
                            while($row=mysql_fetch_array($result))
                            {
                              $movie_id = $row['movie_id'];  
                              $title = $row['title'];
                    ?>

                          <tr class="closemodal">
                             <td style="font-size:13px;"><?php echo $movie_id; ?></td>
                             <td style="font-size:13px;"><?php echo $title; ?></td>
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
                              $result = mysql_query("SELECT * FROM tblmovie"); 
                              while($row=mysql_fetch_array($result)) 
                              {
                              $movie_id = $row['movie_id'];  
                              $title = $row['title'];

                    ?>
                          <tr class="closemodal">
                               <td style="font-size:13px;"><?php echo $movie_id; ?></td>
                               <td style="font-size:13px;"><?php echo $title; ?></td>
                          </tr>
                    <?php } } */
?>
