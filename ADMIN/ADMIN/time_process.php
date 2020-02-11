<?php

    include("includes/connection.php");

//$open_time = $_POST['open_time'];
//$closing_time = $_POST['closing_time'];

$ot= $_POST['open_time'];
$ct = $_POST['closing_time'];

$open_time =date("g:i a", strtotime($ot));
$closing_time =date("g:i a", strtotime($ct));


 
 if (isset($_POST['btnsubmit']))
 {
    
        $sql = "INSERT INTO tbltime VALUES (' ','$open_time', '$closing_time')";
        $insert=$con->query($sql);
        header("Location: timesettings.php");
}
           
    
        else if (isset($_POST['btnsubmit2']))
            {
                    $id = $_POST['id'];
                    
                    $sql = "UPDATE tbltime 
                            SET open_time='".$open_time."', closing_time='".$closing_time."'
                            WHERE time_id='".$id."'";
                    $update=$con->query($sql);
                    header("Location: timesettings.php");
            }
         else if (isset($_POST['btnsubmit3']))
            {
                $id = $_POST['id'];
                $sql = "DELETE FROM tbltime WHERE time_id='".$id."'";
                $del=$con->query($sql);
                header("Location: timesettings.php");
            }
    ?>

        