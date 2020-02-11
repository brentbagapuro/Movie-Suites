<?php
	include("includes/connection.php");

	$qry = "SELECT * FROM tbltempmovies";
    $result=$con->query($qry);
	$ids=array();
    while ($row = $result->fetch_array())
    {
    	$title = $row['title'];
    	$id = $row['mid'];
    	$ids[] = $row['mid'];
    ?>
    <tr>
    	<td width="500px"><b><?php echo $title; ?></b><td>
    	<td><button class="rem" name="rem" value="<?php echo htmlspecialchars($id); ?>">X</button></td>
    </tr>
    <?php
	}
    $rows = mysqli_num_rows($result);
    //$amt = 250 * $rows;
    $qry="SELECT * FROM tblreg_price";
    $result=$con->query($qry);
      while($row2=$result->fetch_array())
      {
        $reg_price = $row2['reg_price'];
        $price_pax = $row2['price_pax'];
      }
	?>
    <script>
        var ps = $('#persons').val();
    	var rows='<?php echo $rows; ?>';
        var amt;
        var reg_price='<?php echo $reg_price; ?>';
        var price_pax='<?php echo $price_pax; ?>';
          if(ps<=2)
          {
            amt=parseInt(reg_price);
          }
          else if(ps>2)
          {
            amt=parseInt(reg_price)+parseInt(((ps-2)*60));
          }
        amt = amt*rows;
    	$('#amt').html(amt);
    	$(".rem").click(function(){
    		var num = $(this).val();
    		$.ajax({
	            type: 'POST',
	            url: 'transmoviesremove.php',
	            data: {id: num},
	            success: function(response){
	              $('#movies').load('transmovies2.php').show;
	            }
	          });
    	});
    	var m=new Array();
    	<?php foreach($ids as $key => $val){ ?>
    		m.push('<?php echo $val; ?>');
    	<?php } ?>
    	var mids = m.join();
    </script>