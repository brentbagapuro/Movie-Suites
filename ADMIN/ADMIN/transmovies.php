<?php
	include("includes/connection.php");

	$id = $_POST['id'];

	$qry = "SELECT * FROM tblmovie WHERE movie_id='".$id."'";
	$result=$con->query($qry);
	while($row=$result->fetch_array())
    {
        $title = $row['title'];  
        $duration = $row['duration'];
    }

    $sql = "INSERT INTO tbltempmovies VALUES (' ','$id','$title','$duration')";
    $insert=$con->query($sql);
?>