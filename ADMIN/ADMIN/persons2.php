<?php
	session_start();
	include("../../includes/connection.php");
?>
	<table class="table table-hover" id="table2">
              <tr>
                  <!-- <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;"> Room Id.</td> -------->
                  <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;"> Room No.</td>
                  <td style="background-color:#6b9cff;font-weight:bold;font-size:15px;"> Max occupancy</td>
              </tr>
<?php
				$pers=$_SESSION['persons'];
                  $qry="SELECT * FROM tblrooms";
                  $result=$con->query($qry);
                  while($row=$result->fetch_array())
                  {
                      $rno = $row['room_name'];
                      $max = $row['max_occupancy'];
                      $status = $row['status'];
                      $room_id = $row['room_id'];

                      if($pers<=$max && $status=="available")
                      {
                ?>
                  <tr>
                   <!-- <td style="font-size:13px;"><?php echo $room_id; ?></td> ------------>
                   <td style="font-size:13px;" hidden><?php echo $room_id; ?></td>
                    <td style="font-size:13px;"><?php echo $rno; ?></td>
                    <td style="font-size:13px;"><?php echo $max; ?></td>
                  </tr>
                <?php
                      }
                  }
            ?>
    </table>
    <?php
    	if($pers>20)
    	{
    ?>
    		<b style="font-size: 16px;">No rooms available for customers more than 20</b>
    <?php
    	}
    ?>
    <script>
    var table2 = document.getElementById("table2");
    var room;
    var room_id;
    for(var i = 1; i < table2.rows.length; i++)
      {
        table2.rows[i].onclick = function()
        {
          document.getElementById("rnum").innerHTML=this.cells[1].innerHTML;
          document.getElementById("promo").innerHTML="";
          room = this.cells[1].innerHTML;
          room_id = this.cells[0].innerHTML;
          $('#test2').load('personspromo.php').show;
          $(function() {
                $('.modal').modal('hide');
          });
        };
      }
    </script>