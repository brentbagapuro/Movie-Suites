<?php
    session_start();
    include("../../includes/connection.php");

    $pers=$_SESSION['persons'];
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $now = date("g:i A");
?>


                    <?php
                        $qry = "SELECT * from tblpromo WHERE promo_numofpersons = '".$pers."'";
                        $result=$con->query($qry);
                        $rows = mysqli_num_rows($result);
                        
                        if($rows==0)
                        {
                          echo "<b>No promos available</b>";
                        }
                        else
                        {
                          while($row2=$result->fetch_array())
                          {
                            $time_start2 = $row2['time_start'];
                            $time_end2 = $row2['time_end'];
                          }
                          if($time_start2 == "none" && $time_end2 == "none")
                          {
                            //$date1 = DateTime::createFromFormat('H:i a', $now);
                            //$date2 = DateTime::createFromFormat('H:i a', $time_start2);
                            //$date3 = DateTime::createFromFormat('H:i a', $time_end2);
                    ?>
        <table class="table table-hover" id="table5">
                            <table class="table table-bordered table-hover" id="table4">
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
                        $qry = "SELECT * from tblpromo WHERE promo_numofpersons = '".$pers."'";
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
                            
                            //if($pers==$promo_numofpersons)
                            //{
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
                                    
                                
                    <?php 
                      //} 
                      }
                    }
                    else if($time_start2 != "none" && $time_end2 != "none")
                    {
                      $date1 = DateTime::createFromFormat('H:i a', $now);
                      $date2 = DateTime::createFromFormat('H:i a', $time_start2);
                      $date3 = DateTime::createFromFormat('H:i a', $time_end2);
                      if($date1 > $date2 && $date1 < $date3)
                      {
                    ?>
                      <table class="table table-hover" id="table5">
                            <table class="table table-bordered table-hover" id="table4">
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
                        $qry = "SELECT * from tblpromo WHERE promo_numofpersons = '".$pers."'";
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
                            
                            //if($pers==$promo_numofpersons)
                            //{
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
                    <?php
                      }
                    }
                    else
                    {
                      echo "<b>No promos available</b>";
                    }
                  }
                    else
                    {
                      echo "<b>No promos available</b>";
                    }
                  }
                    ?>
                              </tbody>
                            </table>
            </table>

            <?php
              $qry = "SELECT * FROM tbltempmovies";
              $result=$con->query($qry);
              $rows = mysqli_num_rows($result);
            ?>
<script>
    var table4 = document.getElementById("table4");
    var promo_id;
    var promo_name;
    var rows='<?php echo $rows; ?>';
    var amt;
    var a;
      for(var i = 1; i < table4.rows.length; i++)
      {
        table4.rows[i].onclick = function()
        {
          promo_id = this.cells[0].innerHTML;
          promo_name = this.cells[1].innerHTML;
          promo_amt = this.cells[2].innerHTML;
          a = this.cells[2].innerHTML;
          amt = a * rows;

          $('#promo').html(promo_name);
          $('#amt').html(amt);
          /*$.ajax({
            type: 'POST',
            url: 'pickpromo.php',
            data: {Promo_id: promo_id, Pers: pers},
            success: function(response){
              $('#promo').load('pickpromo.php').show;
            }
          });*/

          $(function() {
                $('.modal').modal('hide');
          });
        };
      }
</script>