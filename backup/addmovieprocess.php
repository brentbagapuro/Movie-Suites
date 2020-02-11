<?php

    include("includes/connection.php");

$name = $_FILES['file']['name'];
$extension = strtolower(substr($name, strpos($name, ".") + 1));
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
$max_size = 2097152;
$tmp_name = $_FILES['file']['tmp_name'];

$title = $_POST['title'];
$artists = $_POST['artists'];
$director = $_POST['director'];
$genre = $_POST['genre'];
$duration = $_POST['duration'];
$description = $_POST['description'];
$year = $_POST['year'];

 
 if (isset($_POST['btnsubmit']))
 {
    if (isset($name))
    {
        if(!empty($name))
        {
                if(($extension == 'jpg' || $extension == 'jpeg' && $type == 'image/jpeg' && $size <= $max_size))
                {
                        $location = 'assets/images/'; 

                    if(move_uploaded_file($tmp_name, $location.$name))
                    {

                        $insert = mysql_query("INSERT INTO tblmovie VALUES (' ','$title', '$genre', '$duration', '$year', '$artists', '$director', '$description', '$name')");
                            if(!$insert)
                                die(mysql_error());
                            else
                                header("Location: addmovie.php");
                    }
                    else
                    {
                            echo '<script type="text/javascript">alert("Sorry! File must be less than 2mb! Please try again!");window.history.go(-1);</script>';
                    }

                }
                else
                {
                    echo '<script type="text/javascript">alert("File is not accessible. It must be a jpeg/jpg. Please try again!");window.history.go(-1);</script>'; 
                }
        }       
    }
}
else if (isset($_POST['btnsubmit2']))
{
    $id = $_POST['id'];
    
    $sql = "UPDATE tblmovie 
            SET title='".$title."', genre='".$genre."', duration='".$duration."', 
            year='".$year."', artist='".$artists."', director='".$director."', 
            description='".$description."'
            WHERE movie_id='".$id."'";
    $result=mysql_query($sql);
    if($result)
        header("Location: addmovie.php");
    else
        echo "Error";
}
else if (isset($_POST['btnsubmit3']))
{
    $id = $_POST['id'];
    $sql = "DELETE FROM tblmovie WHERE movie_id='".$id."'";
    $result=mysql_query($sql);
    if($result)
        header("Location: addmovie.php");
    else
        echo "Error";
}
?>

