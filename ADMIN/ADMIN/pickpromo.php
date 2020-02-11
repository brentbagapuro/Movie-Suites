<?php
	include("includes/connection.php");

	$price_id = $_POST['price_id'];

	$qry="SELECT * FROM tblreg_price WHERE price_id = '".$price_id."'";
  $result=$con->query($qry);
      while($row2=$result->fetch_array())
      {
        $reg_price = $row2['reg_price'];
        $price_pax = $row2['price_pax'];
      }

    $qry = "SELECT * FROM tbltempmovies";
    $result=$con->query($qry);
    $rows = mysqli_num_rows($result);
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
            amt=parseInt(reg_price)+parseInt(((ps-2)*price_pax));
          }
        amt = amt*rows;
		$('#promo').html(price_name);
		$('#amt').html(amt);
</script>