<?php

    include("includes/connection.php");

    date_default_timezone_set('UTC');
     $today = date('m/d/Y');

$name = $_FILES['file']['name'];
$extension = strtolower(substr($name, strpos($name, ".") + 1));
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
$max_size = 2097152;
$tmp_name = $_FILES['file']['tmp_name'];

$title = $_POST['title'];
$artists = $_POST['artists'];
$director = $_POST['director'];


function getGenre ($value)
{
    if (isset($_POST[$value])) {
        //foreach ($_POST[$value] as $codes) {
            //$string .= $codes . " ";
            $string=implode(",", $_POST[$value]);
        //}
    }

    return $string;
}
$genre = getGenre('checkbox');

$hr = $_POST['hr'];
$min = $_POST['min'];
$sec = $_POST['sec'];
$duration = $hr.":".$min.":".$sec;

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
                        $location = '../../assets/images/'; 

                    if(move_uploaded_file($tmp_name, $location.$name))
                    {

                        $sql = "INSERT INTO tblmovie VALUES (' ','$title', '$genre', '$duration', '$year', '$artists', '$director', '$description', '$name', '$today', '0', '0')";
                        $insert=$con->query($sql);
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
else if (isset($_POST['upt']))
{
    $id = $_POST['id'];
    
    $sql = "UPDATE tblmovie 
            SET title='".$title."', genre='".$genre."', duration='".$duration."', 
            year='".$year."', artist='".$artists."', director='".$director."', 
            description='".$description."', date_uploaded='".$today."'
            WHERE movie_id='".$id."'";
    $result=$con->query($sql);
    if($result)
        header("Location: addmovie.php");
    else
        echo "Error";
}
else if (isset($_POST['del']))
{
    $id = $_POST['id'];
    $sql = "DELETE FROM tblmovie WHERE movie_id='".$id."'";
    $result=$con->query($sql);
    if($result)
        header("Location: addmovie.php");
    else
        echo "Error";
}
?>

