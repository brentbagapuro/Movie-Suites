<?php
	include("includes/connection.php");

	$qry = "SELECT * FROM tbltempcust";
    $result=$con->query($qry);
	$ids=array();
    while ($row = $result->fetch_array())
    {
    	$fname = $row['fname'];
    	$id = $row['cid'];
    	$ids[] = $row['cid'];
    ?>
    <tr>
    	<td width="500px"><b><?php echo $fname; ?></b><td>
    	<td><button class="rem" name="rem" value="<?php echo htmlspecialchars($id); ?>">X</button></td>
    </tr>
    <?php
	}
    $rows = mysqli_num_rows($res);
	?>
    <script>
    	var fname=<?php echo $fname; ?>;
    	$('#fname').html(fname);
    	$("button").click(function(){
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